// src/app/evento.service.ts

import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { catchError, map, Observable, of, throwError } from 'rxjs';
import { URL_SERVICIOS } from '../app.config';
import { Form } from '@angular/forms';
import * as XLSX from 'xlsx';
@Injectable({
  providedIn: 'root' // Asegúrate de que el servicio esté disponible en toda la aplicación
})
export class EventoService {
  getMunicipio(): Observable<string[]> {
    return this.http.get<any[]>(this.apiUrl);
  }

  id:number|null=null;

  private apiUrl = 'http://localhost:8000/api/eventos'; // Cambia esto según tu configuración
  private createEventUrl = 'http://localhost:8000/api/eventos/create'; // URL para registrar eventos

  private data:Form |null= null;
  constructor(private http: HttpClient) {
  }
  deleteEvento(id: number) {
      const url=`${URL_SERVICIOS}/eventos/delete/${id}`
      return this.http.delete(url);
     }
  registroEvento1(formData: any): Observable<any> {
    return this.http.post(this.createEventUrl, formData).pipe(
      catchError((error) => {
        console.error('Error al registrar el evento', error);
        return of({ error: true, message: 'Error al registrar el evento' });
      })
    );;
  }
  getEventos(): Observable<any> {
    return this.http.get<any[]>(this.apiUrl).pipe( // Asegúrate de que esta URL sea correcta
      catchError((error) => {
        console.error('Error al cargar eventos', error);
        return of([]); // Retorna un array vacío en caso de error
      })
    );
  }


  postAlertRegi(){
    const url=`${URL_SERVICIOS}/idAlert`;
    const url1=`${URL_SERVICIOS}/idRegion`;
    return this.http.post(url,url1).pipe(
      map((resp:any) => {
             // if (resp) {
                return this.saveLocalResponse(resp);
              //} else {
                //return resp;
              //}
            }),
            catchError((err: any) => {


              console.error(err);
              return of({ error: true, message: 'Error al cargar el PDF' });
            })
          );
  }
  registroEvento(tipo: string,provincia:string,municipio:string,fechaIni:Date,fechaFin:Date,hora:Date,descripcion:string,area:string){
    //return this.http.post(this.apiUrl, { nombre: 'evento1', descripcion: 'descripcion1
    const url=`${URL_SERVICIOS}/eventos/create`;
    return this.http.post(url,{tipo,provincia,municipio,fechaIni,
      fechaFin,hora,descripcion,area}).pipe(
      map((resp:any) => {
             // if (resp) {
                return this.saveLocalResponse(resp);
              //} else {
                //return resp;
              //}
            }),
            catchError((err: any) => {


              console.error(err);
              return of({ error: true, message: 'Error al cargar el PDF' });
            })
          );
  }
  saveLocalResponse(resp:any):boolean{
    if(resp.form){
      //localStorage.setItem('file',JSON.stringify(resp.file));
      //this.file=resp.file;
      console.log(resp);
      return true;
    }
    return false;

  }
  downloadEventos(data: any[], nombreArchivo: string): void {
    // Crea un nuevo libro de trabajo
    const ws: XLSX.WorkSheet = XLSX.utils.json_to_sheet(data);
    const wb: XLSX.WorkBook = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(wb, ws, 'Eventos');

    // Genera el archivo Excel y lo descarga
    XLSX.writeFile(wb, `${nombreArchivo}.xlsx`);
  }
}
/*return this.http.get<any[]>(this.apiUrl).pipe( // Asegúrate de que esta URL sea correcta
  catchError((error) => {
    console.error('Error al cargar eventos', error);
    return of([]); // Retorna un array vacío en caso de error
  })
);*/

/*export class DataService{
  getData(): Observable<any>{
    return of({data: 'data'});
  }
}*/
