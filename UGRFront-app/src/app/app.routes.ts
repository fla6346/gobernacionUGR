import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { BodyComponent } from './body/body.component';
import {SignupComponent} from './components/signup/signup.component'
import DashboardComponent from './shared/components/dashboard/dashboard.component';
import { CommonModule } from '@angular/common';
import ConocimientoAComponent from './conocimiento/conocimiento-a/conocimiento-a.component';
import Alerta2Component from './alerta/alerta2/alerta2.component';
import  AdministradorAComponent  from './datos/administrador-a/administrador-a.component'
import Coordinacion4Component from './coordinacion/coordinacion4/coordinacion4.component';
import AdminDatComponent from './datos/admin-dat/admin-dat.component';

export const routes:Routes=[
  /*{
    path:'',
    loadChildren:()=>import("./modules/home/home.module").then(m=>m.HomeModule)
  },
  {
    path:'auth',
    loadChildren:()=>import("./modules/auth-profile/auth-profile.module").then(m=>m.AuthProfileModule),
  },

  {
    path:'admin',
    loadChildren:()=>import('./shared/components/dashboard-admin/dashboard-admin.module').then(m=>m.DashboardAdminModule),

  },
  {
    path: 'conocimientoA',
    component:ConocimientoAComponent
  },
  /*{
    path:'alertaA', component:Alerta2Component
  },*/
  /*{
    path:'administradorA',
    component:AdministradorAComponent
  },
  {
    path:'',
    redirectTo:'/dashboard',
    pathMatch:'full'
  },
  {
    path:'**',
    redirectTo:'error/404',
  },

  { path:'',component:DashboardComponent },

  { path: 'body', component:BodyComponent},
  { path: 'signup', component:SignupComponent},

  { path: 'admin-dat1', loadComponent:()=> import('./datos/admin-dat/admin-dat.component'),
    children:[
      {
        path:'admin-dat1',
        loadComponent:()=> import('./datos/admin-dat/admin-dat.component'),

      }
    ]
  },
  { path: 'alerta2', loadComponent:()=> import('./alerta/alerta2/alerta2.component'),
    children:[
      {
        path:'alerta2',
        loadComponent:()=> import('./alerta/alerta2/alerta2.component'),

      }
    ]
  },
  { path: 'conocimiento3', loadComponent:()=> import('./conocimiento/conocimiento3/conocimiento3.component'),
    children:[
      {
        path:'conocimiento3',
        loadComponent:()=> import('./conocimiento/conocimiento3/conocimiento3.component'),
      }
    ]
  },
  { path: 'coordinacion4',
    loadComponent:()=> import('./coordinacion/coordinacion4/coordinacion4.component'),
    children:[
      {
        path:'coordinacion4',
        loadComponent:()=> import('./coordinacion/coordinacion4/coordinacion4.component'),
      }
    ]
  },
  { path:'',loadComponent:()=> import('./shared/components/dashboard/dashboard.component'),
    //import('./shared/components/layout/layout.component'),
    children:[
      {
        path:'dashboard',
        loadComponent:()=> import('./shared/components/dashboard/dashboard.component'),
      },
      {
        path:'',redirectTo:'dashboard',pathMatch:'full'
      },
      {
        path:'profile',
        loadComponent:()=> import('./profile/profile/profile.component'),
      }
    ]
  },
  {path:'**',
    redirectTo:'dashboard'
  },

];

  @NgModule({
    imports: [RouterModule.forRoot(routes),CommonModule],
    exports: [RouterModule]
  })
  export class appRoutes{}*/
  {
    path: 'dashboard',
    component: DashboardComponent
  },
  {path: 'admin-dat1',
    component:AdminDatComponent
  },
  {
    path: '',
    loadChildren: () => import("./modules/home/home.module").then(m => m.HomeModule)
  },
  {
    path: 'auth',
    loadChildren: () => import("./modules/auth-profile/auth-profile.module").then(m => m.AuthProfileModule),
  },
  {
    path: 'admin',
    loadChildren: () => import('./shared/components/dashboard-admin/dashboard-admin.module').then(m => m.DashboardAdminModule),
  },
  {
    path: 'conocimientoA',
    component:ConocimientoAComponent
  },
  
  {
    path:'administradorA',
    component:AdministradorAComponent
  },
  {
    path:'coordinacion4',component:Coordinacion4Component
  },
  {
    path: 'conocimientoA',
    component: ConocimientoAComponent
  },
  {
    path: 'administradorA',
    component: AdministradorAComponent
  },
  {
    path: 'body',
    component: BodyComponent
  },
  {
    path: 'signup',
    component: SignupComponent
  },
  {
    path: 'alerta2',
    loadComponent: () => import('./alerta/alerta2/alerta2.component')
  },
  {
    path: 'conocimiento3',
    loadComponent: () => import('./conocimiento/conocimiento3/conocimiento3.component')
  },
  {
    path: 'coordinacion4',
    loadComponent: () => import('./coordinacion/coordinacion4/coordinacion4.component')
  },
  {
    path: 'dashboard',
    component: DashboardComponent
  },
  {
    path: '**',
    redirectTo: 'error/404',
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes), CommonModule],
  exports: [RouterModule]
})
export class AppRoutes { }
