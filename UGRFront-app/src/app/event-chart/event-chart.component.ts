import { Component, AfterViewInit, ViewChild, ElementRef, Input, Inject, PLATFORM_ID, OnChanges } from '@angular/core';
import { Chart} from 'chart.js';
import { LinearScale, BarController, BarElement, Title, Tooltip, Legend, CategoryScale } from 'chart.js';
import { CommonModule, isPlatformBrowser } from '@angular/common';

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
  selector: 'app-event-chart',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './event-chart.component.html',
  styleUrls: ['./event-chart.component.css']
})
export default class EventChartComponent implements AfterViewInit,OnChanges    {
  @ViewChild('chartCanvas') chartCanvas!: ElementRef<HTMLCanvasElement>;
  @Input() events: Event[] = []; // Array of Event objects
  private chart: Chart | null = null; // Reference to the chart instance

  constructor(@Inject(PLATFORM_ID) private platformId: Object) {}

  ngAfterViewInit() {
    setTimeout(() => {
      if (isPlatformBrowser(this.platformId)) {
        this.createChart();
      }
    });
  }

  ngOnChanges() {
    if (this.chart) {
      this.chart.destroy(); // Destroy the existing chart if it exists
    }
    if (isPlatformBrowser(this.platformId) && this.events.length > 0) {
      this.createChart(); // Create a new chart only in the browser
    }
  }

  createChart() {
    // Check if the canvas is available
    if (!this.chartCanvas || !this.chartCanvas.nativeElement) {
      console.error('Canvas element is not available');
      return;
    }

    const ctx = this.chartCanvas.nativeElement.getContext('2d');
    if (!ctx) {
      console.error('No se pudo obtener el contexto del canvas');
      return;
    }

    // Register the required components
    Chart.register(LinearScale, BarController, BarElement, Title, Tooltip, Legend, CategoryScale);

    // Count events by date
    const eventCountByDate: { [key: string]: number } = {};
    this.events.forEach(event => {
      const startDate = new Date(event.fecha_inicio);
      const endDate = new Date(event.fecha_finalizacion);
      const currentDate = new Date(startDate);

      // Loop through each date from start to end
      while (currentDate <= endDate) {
        const dateString = currentDate.toISOString().split('T')[0]; // Format 'YYYY-MM-DD'
        eventCountByDate[dateString] = (eventCountByDate[dateString] || 0) + 1; // Count events
        currentDate.setDate(currentDate.getDate() + 1); // Move to the next day
      }
    });

    const labels = Object.keys(eventCountByDate);
    const data = Object.values(eventCountByDate);

    // Create a new chart instance
    this.chart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [
          {
            label: 'Número de Eventos',
            data: data,
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
          }
        ]
      },
      options: {
        responsive: true,
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
            }
          }
        },
        plugins: {
          legend: {
            display: true,
 position: 'top',
          },
          tooltip: {
            callbacks: {
              label: (tooltipItem) => {
                return `Fecha: ${tooltipItem.label}, Eventos: ${tooltipItem.raw}`;
              }
            }
          },
          title: {
            display: true,
            text: 'Eventos por Fecha',
          }
        }
      }
    });
  }
}
