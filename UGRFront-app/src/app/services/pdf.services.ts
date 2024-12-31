import { Inject, Injectable, PLATFORM_ID } from "@angular/core";
import { URL_SERVICIOS } from "../app.config";
import { HttpClient } from "@angular/common/http";
import { BehaviorSubject, catchError, map, Observable, of } from "rxjs";
@Injectable({
  providedIn: 'root'
})
export class PdfService{

  file: File | null = null;
  private pdfFileName:string| null=null;
  private pdfUrlSource = new BehaviorSubject<string | null>(null);
  currentPdfUrl = this.pdfUrlSource.asObservable();
  id:number|null=null;
 // private  url = `URL_SERVICIOS/api/files`;
  constructor(private http:HttpClient,
@Inject(PLATFORM_ID) private platformId: Object // Inyecta el PLATFORM_ID
){}

deletePdfFiles(id:number) {
  const url = `${URL_SERVICIOS}/files/${this.id}`;
  return this.http.delete(url);
    //url);
}
getPdfFiles(): Observable<any> {
  const url = `${URL_SERVICIOS}/api/files`;
  return this.http.get(url);
}
registroPdf1(formData:FormData):Observable<any>{
  const url = `${URL_SERVICIOS}/uploadPdf`;
  return this.http.post(url,formData);
}
  registroPdf(file: string){
    const url = `${URL_SERVICIOS}/uploadPdf`;
    return this.http.post(url,{file }).pipe(
      map((resp: any) => {
        if (resp.file) {
          return this.saveLocalResponse(resp);
        } else {
          return resp;
        }
      }),
      catchError((err: any) => {


        console.error(err);
        return of({ error: true, message: 'Error al cargar el PDF' });
      })
    );
  }
  saveLocalResponse(resp:any):boolean{
    if(resp.file){
      localStorage.setItem('file',JSON.stringify(resp.file));
      this.file=resp.file;
      console.log(resp);
      return true;
    }
    return false;

  }
}
