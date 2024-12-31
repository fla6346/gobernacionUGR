import { Component, OnInit } from '@angular/core';
import {SidebarComponent} from '../../shared/sidebar/sidebar.component'
import { HeaderComponent } from '../../shared/components/header/header.component';
import { HttpClient } from '@angular/common/http';
import { CommonModule, NgClass } from '@angular/common';
import { DomSanitizer, SafeResourceUrl } from '@angular/platform-browser';
import { BehaviorSubject, Observable } from 'rxjs';
import { PdfService } from '../../services/pdf.services';
import { FormsModule, NgModel } from '@angular/forms';
import { URL_SERVICIOS } from '../../app.config';
import { ActivatedRoute, Route } from '@angular/router';
@Component({
  selector: 'app-conocimiento3',
  standalone: true,
  imports: [SidebarComponent, HeaderComponent,CommonModule,FormsModule],
  templateUrl: './conocimiento3.component.html',
  styleUrl: './conocimiento3.component.css'
})
export default class Conocimiento3Component implements OnInit {
getSafeUrl(url: string):SafeResourceUrl {
  return this.sanitizer.bypassSecurityTrustResourceUrl(url);
}

  private  url = `URL_SERVICIOS/api/files`;
  pdfFiles:any[]=[];

  constructor(
    private http: HttpClient,
    private sanitizer:DomSanitizer,
    private pdfService:PdfService,
    private route:ActivatedRoute ) {}
    ngOnInit(): void {
        this.loadPdfFiles();

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


}
