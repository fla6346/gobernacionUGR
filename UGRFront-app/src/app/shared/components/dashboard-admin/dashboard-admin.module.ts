import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { DashBoardRoutingModule } from './dashboard-admin-routing.module';
import { FooterComponent } from '../footer/footer.component';
import { SharedModule } from '../../shared.module';
import { DashboardAdminComponent } from './dashboard-admin.component';

@NgModule({
  declarations: [],
  imports: [
    CommonModule,
    DashBoardRoutingModule,FooterComponent,
    SharedModule
  ]
})
export class DashboardAdminModule { }
