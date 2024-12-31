import { Component, OnInit } from '@angular/core';
import { SidebarComponent } from '../../shared/sidebar/sidebar.component';
import { HeaderComponent } from "../../shared/components/header/header.component";
import {MatIconModule} from '@angular/material/icon';
import { ImgesComponent } from "../../imges/imges.component";
import { EventoService } from '../../services/evento.services';
import * as XLSX from 'xlsx';
import { saveAs } from 'file-saver';
import { EventoModel } from '../../models/evento.model';
declare function createToast(type:string,icon:string,title:string,text:string):void;

@Component({
  selector: 'app-alerta2',
  standalone: true,
  imports: [SidebarComponent,
    HeaderComponent,
    MatIconModule, ImgesComponent],
  templateUrl: './alerta2.component.html',
  styleUrls: ['./alerta2.component.css']
})
export default class Alerta2Component implements OnInit {
  //eventos:any[]=[];
  events: EventoModel[] =[];
  dataSource: any;
constructor( private eventoService:EventoService){}
  ngOnInit(): void {
    this.cargarEventos();
  }
externo(){
  window.open('https://www.umss.edu.bo/departamento-de-fisica/')
}
  onDownload() {
    this.eventoService.downloadEventos(this.events,'eventos')
  }
  cargarEventos(): void {
    this.eventoService.getEventos().subscribe(data => {
      this.events = data; // Asigna los datos a la propiedad eventos
    });
  }
  exportarEventos(): void {
    if (this.events.length > 0) {
      this.eventoService.downloadEventos(this.events, 'eventos');
    } else {
      console.error('No hay eventos para exportar');
    }
  }
}



