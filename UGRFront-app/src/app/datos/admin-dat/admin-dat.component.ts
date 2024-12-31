import { Component, NO_ERRORS_SCHEMA, OnInit } from '@angular/core';
import { SidebarComponent } from '../../shared/sidebar/sidebar.component';
import { HeaderComponent } from "../../shared/components/header/header.component";
import {MatInputModule} from "@angular/material/input";
import { MatFormFieldModule } from '@angular/material/form-field';
import {MatSelectModule} from '@angular/material/select';
import { FormControl, ReactiveFormsModule } from '@angular/forms';
import { MatOptionModule } from '@angular/material/core';
import { CommonModule, NgFor } from '@angular/common';
import {MatIconModule} from '@angular/material/icon';
import { EventoService } from '../../services/evento.services';
import { MatTableDataSource, MatTableModule } from '@angular/material/table';
import { EventoModel } from '../../models/evento.model';
import  EventChartComponent  from '../../event-chart/event-chart.component';
import { Chart } from 'chart.js';
import  LinearChartComponent  from "../../linear-chart/linear-chart.component";
@Component({
  selector: 'app-admin-dat',
  standalone: true,
  imports: [SidebarComponent,
    HeaderComponent,
    MatFormFieldModule,
    MatInputModule,
    MatSelectModule,
    ReactiveFormsModule,
    MatOptionModule,
    NgFor,
    MatIconModule,
    CommonModule,
    MatTableModule,
    EventChartComponent, LinearChartComponent],
  templateUrl: './admin-dat.component.html',
  styleUrl: './admin-dat.component.css',
  schemas: [NO_ERRORS_SCHEMA]
})
export default  class AdminDatComponent implements OnInit {
  mySelect=new FormControl();
  municipios:string[]=['Cochabamba'];
  evento=['Incendios','Inundaciones','sequias','granizadas','heladas','sismos'];
  disableSelectList:string[]=[];

  //events:any[]=[];
displayedColumns: string[]= ['nombreEvento','fecha_inicio','fecha_finalizacion'];
dataSource: MatTableDataSource<EventoModel>;
events:EventoModel[]=[
  {
    idEvento:1,
    tipo:'',
    provincia: 'Provincia 1',
    municipio: 'Municipio 1',
    fecha_inicio: '2023-10-01',
    fecha_finalizacion: '2023-10-02',
    hora: '10:00',
    descripcion: 'Descripción del Evento 1',
    area: 'Área Afectada 1',
  },
  {
    idEvento:2,
    tipo:'',
    provincia: 'Provincia 2',
    municipio: 'Municipio 2',
    fecha_inicio: '2023-10-03',
    fecha_finalizacion: '2023-10-04',
    hora: '11:00',
    descripcion: 'Descripción del Evento 2',
    area: 'Área 2',
  },
]
  availableEvents: EventoModel[]=[];
  yourFormControl= new FormControl('');
constructor(private eventoService:EventoService) {
  this.dataSource=new MatTableDataSource(this.events);
  //this.loadData()
}
ngOnInit():void{


  this.siExiste();

  this.eventoService.getEventos().subscribe({
    next:(data: EventoModel[])=>{
      this.events=data;
      this.filterAvailableEvents(); // Filtra eventos disponibles después de cargar
      this.dataSource.data = this.events; // Actualiza la fuente de datos de la tabla

    },
    error: (err) => {
      console.error('Error al cargar eventos', err); // Manejo de errores
    },
    complete: () => {
      console.log('Carga de eventos completada'); // Opción de completar
    }
  });

}

filterAvailableEvents(): void {

  const today = new Date();
  this.availableEvents = this.events.filter(event => {
    const endDate = new Date(event.fecha_finalizacion);
    return endDate >= today; // Filtra eventos cuya fecha de finalización es hoy o en el futuro
  });
}
siExiste(): void {
  if (this.events.length > 0) {
    console.log('Sí existe');
    const today = new Date();
    this.availableEvents = this.events.filter(event => {
      const endDate = new Date(event.fecha_finalizacion);
      return endDate >= today; // Filtra eventos cuya fecha de finalización es hoy o en el futuro
    });
    console.log(this.availableEvents); // Muestra los eventos disponibles
  } else {
    console.log('No hay eventos disponibles');
  }
}
loadMunicipio():void{
this.eventoService.getMunicipio().subscribe(data=>{
  this.municipios=data;
});
}
loadEventos():void{
  this.eventoService.getEventos().subscribe(data=>{
    this.municipios=data;
  });
  }
eliminar(id:number) {
 const event=this.events.find(e=>e.idEvento===id)
 console.log(event);
 if(event != null){
  this.eventoService.deleteEvento(event.idEvento).subscribe({
    next: response => {
      console.log(response);
    },
    error: error => {
      console.log('Error al eliminar el archivo pdf');
    }
  });
}
}
}
