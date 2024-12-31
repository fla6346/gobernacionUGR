import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouterLink, RouterOutlet } from '@angular/router';
import AdminDatComponent from './datos/admin-dat/admin-dat.component'
import LayoutComponent from './shared/components/layout/layout.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { SharedModule } from './shared/shared.module';
import { LoginComponent } from './modules/login/login.component';
import { RegisterComponent } from './modules/auth-profile/register/register.component';
import { ImageUploadComponent } from './image-upload/image-upload.component';
import { DashboardAdminComponent } from './shared/components/dashboard-admin/dashboard-admin.component';
import { PdfViewerModule } from 'ng2-pdf-viewer';
import Conocimiento3Component from './conocimiento/conocimiento3/conocimiento3.component';
import ConocimientoAComponent from './conocimiento/conocimiento-a/conocimiento-a.component';
import { ImgesComponent } from './imges/imges.component';
import AdministradorAComponent from './datos/administrador-a/administrador-a.component';
import LinearChartComponent from './linear-chart/linear-chart.component';
import Body1Component from './body/body1/body1/body1.component';
@NgModule({

  imports: [
    BrowserModule,
    RouterLink,// Importa el módulo de enrutamiento aquí
    RouterOutlet,
    LayoutComponent,
    ReactiveFormsModule,
    SharedModule,
    FormsModule,
    LoginComponent,
    RegisterComponent,
    AdminDatComponent,
    ImageUploadComponent,
    DashboardAdminComponent,
    Conocimiento3Component,
    PdfViewerModule,
    PdfViewerModule,
    ConocimientoAComponent,
    AdminDatComponent,
    ImgesComponent,NgModule,
    AdministradorAComponent,
    LinearChartComponent,
    Body1Component,


  ],
  providers:[
    providerHttpClient()
  ],
  exports:[
    Body1Component
  ],


})
export class AppModule { }
function providerHttpClient(): import("@angular/core").Provider | import("@angular/core").EnvironmentProviders {
  throw new Error('Function not implemented.');
}

