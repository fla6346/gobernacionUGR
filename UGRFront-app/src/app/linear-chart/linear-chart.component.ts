import { CommonModule, isPlatformBrowser } from '@angular/common';
import { AfterViewInit, Component, ElementRef, Inject, Input, OnChanges, OnDestroy, PLATFORM_ID, ViewChild } from '@angular/core';
import { BarController, BarElement, CategoryScale, Chart, LinearScale, Title, Tooltip, Legend } from 'chart.js/auto';
import { debounceTime, Subject } from 'rxjs';

interface Event {
  tipo: string;
  provincia: string;
  municipio: string;
  fecha_inicio: string;
  fecha_finalizacion: string;
  hora: string;
  descripcion: string;
  area: string;
}

@Component({
  selector: 'app-linear-chart',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './linear-chart.component.html',
  styleUrls: ['./linear-chart.component.css']
})
export default class LinearChartComponent implements AfterViewInit, OnChanges, OnDestroy  {
  @ViewChild('chartCanvas') chartCanvas!: ElementRef<HTMLCanvasElement>;
  @Input() events: Event[] = [];
  private chart: Chart | null = null;
  private resizeObserver: ResizeObserver | null = null;
  private updateSubject = new Subject<void>();
isLoading: any;

  constructor(@Inject(PLATFORM_ID) private platformId: Object) {
    this.updateSubject.pipe(
      debounceTime(250)
    ).subscribe(() => {
      this.createChart();
    });
  }

  ngAfterViewInit() {
    if (isPlatformBrowser(this.platformId)) {
      this.createChart();
      this.setupResizeObserver();
    }
  }

  ngOnChanges() {
    if (this.chart) {
      this.chart.destroy();
    }
    if (isPlatformBrowser(this.platformId)) {
      this.updateSubject.next();
    }
  }

  ngOnDestroy() {
    if (this.resizeObserver) {
      this.resizeObserver.disconnect();
    }
    if (this.chart) {
      this.chart.destroy();
    }
    this.updateSubject.complete();
  }

  private setupResizeObserver() {
    this.resizeObserver = new ResizeObserver(() => {
      if (this.chart) {
        this.chart.resize();
      }
    });

    if (this.chartCanvas?.nativeElement) {
      this.resizeObserver.observe(this.chartCanvas.nativeElement);
    }
  }

  private formatDate(date: Date): string {
    return date.toLocaleDateString('es-ES', {
      year: 'numeric',
      month: 'short',
      day: 'numeric'
    });
  }

  private validateEventDates(event: Event): boolean {
    const startDate = new Date(event.fecha_inicio);
    const endDate = new Date(event.fecha_finalizacion);

    if (isNaN(startDate.getTime()) || isNaN(endDate.getTime())) {
      console.warn(`Invalid dates for event: ${JSON.stringify(event)}`);
      return false;
    }

    if (endDate < startDate) {
      console.warn(`End date before start date for event: ${JSON.stringify(event)}`);
      return false;
    }

    return true;
  }

  private createChart() {
    if (!this.chartCanvas || !this.chartCanvas.nativeElement) {
      console.error('Canvas element is not available');
      return;
    }

    const ctx = this.chartCanvas.nativeElement.getContext('2d');
    if (!ctx) {
      console.error('No se pudo obtener el contexto del canvas');
      return;
    }

    Chart.register(LinearScale, BarController, BarElement, Title, Tooltip, Legend, CategoryScale);

    const eventCountByDate: { [key: string]: number } = {};
    this.events.forEach(event => {
      if (!this.validateEventDates(event)) {
        return;
      }

      const startDate = new Date(event.fecha_inicio);
      const endDate = new Date(event.fecha_finalizacion);
      const currentDate = new Date(startDate);

      while (currentDate <= endDate) {
        const dateString = currentDate.toISOString().split('T')[0];
        eventCountByDate[dateString] = (eventCountByDate[dateString] || 0) + 1;
        currentDate.setDate(currentDate.getDate() + 1);
      }
    });

    const labels = Object.keys(eventCountByDate);
    const data = Object.values(eventCountByDate);

    if (data.length === 0) {
      console.error('No hay datos para mostrar en el gráfico');
      return;
    }

    this.chart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: labels,
        datasets: [
          {
            label: 'Número de Eventos',
            data: data,
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 2,
            fill: true,
            tension: 0.4,
            hoverBackgroundColor: 'rgba(75, 192, 192, 0.7)',
            hoverBorderColor: 'rgba(75, 192, 192, 1)',
          }
        ]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            display: true,
            position: 'top',
          },
          tooltip: {
            callbacks: {
              label: (tooltipItem) => {
                const date = new Date(labels[tooltipItem.dataIndex]);
                return `Fecha: ${this.formatDate(date)}, Eventos: ${tooltipItem.raw}`;
              }
            }
          },
          title: {
            display: true,
            text: 'Eventos por Fecha',
          }
        },
        scales: {
          y: {
            beginAtZero: true,
            title: {
              display: true,
              text: 'Número de Eventos'
            }
          },
          x: {
            title: {
              display: true,
              text: 'Fechas'
            },
            ticks: {
              autoSkip: true,
              maxTicksLimit: 10
            }
          }
        },
        animation: {
          duration: 1000,
          easing: 'easeInOutQuad'
        }
      }
    });
  }
}
