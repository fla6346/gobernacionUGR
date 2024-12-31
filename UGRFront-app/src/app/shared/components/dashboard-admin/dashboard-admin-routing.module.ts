import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { DashboardAdminComponent } from './dashboard-admin.component';

const routes: Routes = [
  {
    path:'', component:DashboardAdminComponent,
    children: [
      /*{
      path: 'conocimientoA',
      //component: ConocimientoAComponent
      loadComponent(){
        return import('../../../conocimiento/conocimiento-a/conocimiento-a.component');
      },*/
     /* {
        path:'alertaA',
        loadComponent:() => import('../../../alerta/alerta2/alerta2.component')
      },*/
      /*{
        path:'conocimientoA',
        loadComponent:()=> import('../../../conocimiento/conocimiento-a/conocimiento-a.component')
        //component: ConocimientoAComponent
        /*loadComponent() {
          return import('../../../conocimiento/conocimiento-a/conocimiento-a.component');
        },
      }*/

    ]
    }
    ];



@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class DashBoardRoutingModule { }
