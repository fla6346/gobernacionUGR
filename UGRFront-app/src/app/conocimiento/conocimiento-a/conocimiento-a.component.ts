import { Component, OnInit } from '@angular/core';
import { HeaderAdminComponent } from '../../shared/components/header-admin/header-admin.component';
import { SidebarComponent } from "../../shared/sidebar/sidebar.component";
import { RouterModule } from '@angular/router';
import { DomSanitizer, SafeResourceUrl } from '@angular/platform-browser';
import { HttpClient } from '@angular/common/http';
import { CommonModule } from '@angular/common';
import { PdfService } from '../../services/pdf.services';
import { URL_SERVICIOS } from '../../app.config';
import { FormsModule } from '@angular/forms';
import { Router } from '@angular/router';
import { response } from 'express';

@Component({
  selector: 'app-conocimiento-a',
  standalone: true,
  imports: [HeaderAdminComponent, SidebarComponent, RouterModule,CommonModule,FormsModule],
  templateUrl: './conocimiento-a.component.html',
  styleUrl: './conocimiento-a.component.css'
})
export default class ConocimientoAComponent implements OnInit {



  selectedFile: File | null = null;
  selectedFileName: string | null = null;
  pdfSrc: SafeResourceUrl | ArrayBuffer | null = null;
  fileName:string='';
  pdfFiles:any[]=[];

  constructor(
    private http: HttpClient,
    private sanitizer:DomSanitizer,
    private pdfService:PdfService,
    private router:Router,
  ) {}

  ngOnInit(): void {
    this.loadPdfFiles();
  }
  getSafeUrl(url: string):SafeResourceUrl {
    return this.sanitizer.bypassSecurityTrustResourceUrl(url);
  }
  onFileSelected(event: Event): void {
    const file = (event.target as HTMLInputElement).files?.[0];
    if (file && file.type === 'application/pdf') {
     //this.selectedFileName=file.name;
     this.selectedFile=file;
     this.selectedFileName=file.name;
      const reader = new FileReader();
      reader.onload = () => {
        this.pdfSrc = this.sanitizer.bypassSecurityTrustResourceUrl(reader.result as string); // Set the PDF source to the result of the FileReader
      };
      reader.readAsDataURL(file); // Read the file as a data URL
    } else {
      alert('Please select a valid PDF file.');
    }
  }
  onSubmit():void {
    if(this.selectedFile){
      const formData:FormData=new FormData();
      formData.append('fileName', this.selectedFile,this.selectedFile.name);
      //console.log('error?',name);
      const name={fileName:this.selectedFileName ?? ''}
      const url = `${URL_SERVICIOS}/uploadPdf/`;
      this.http.post(url,formData).subscribe({
        next: response => {
          //this.pdfService.setPdfUrl(this.selectedFileName);
          console.log('Pdf cargado con éxito:', response);
          console.log('Nombre del archivo :',this.selectedFileName );
          //this.router.navigate(['/conocimiento3', this.selectedFileName]);
          //const name={fileName:this.selectedFileName?? ''};
          //this.pdfService.setPdfFileName(formData.append);
          //this.procesarNombre(name.fileName);
          this.selectedFile=null;
          this.pdfSrc=null;
        },
        error: err => {
          console.error('Error al cargar el pdf:', err);
        }
      });
    }else{
      alert('Por favor selecciona un archivo pdf');

    }
  }
   procesarNombre(fileName:string) {
    console.log(fileName);
      }
    onCancel(): void {
      // Reset the form or perform any other action needed on cancel
      this.selectedFile = null;
      this.pdfSrc = null;
    }
    loadPdfFiles(): void {
      this.pdfService.getPdfFiles().subscribe({
        next: (response) => {
          this.pdfFiles=response.data;
        },
        error: (err) => {
          console.error('Error al cargar los archivos PDF:', err);
        }
      })
    }
    eliminar(id:number) {

        this.pdfService.deletePdfFiles(id).subscribe({
          next: response => {
            console.log(response);
          },
          error: error => {
            console.log('Error al eliminar el archivo pdf');
          }
        });
    }
  }

