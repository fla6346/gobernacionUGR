import { Component } from '@angular/core';
import { BodyComponent } from "../../../body/body.component";
import { FooterComponent } from "../footer/footer.component";
import { HeaderComponent } from '../header/header.component';
import { SidebarComponent } from '../../sidebar/sidebar.component';
import Conocimiento3Component from "../../../conocimiento/conocimiento3/conocimiento3.component";
import Body1Component from "../../../body/body1/body1/body1.component";
import { RouterLink, RouterLinkActive } from '@angular/router';
import { HomeComponent } from "../../../modules/home/home.component";
import AdminDatComponent from '../../../datos/admin-dat/admin-dat.component';

@Component({
  selector: 'app-dashboard',
  standalone: true,
  imports: [HeaderComponent, SidebarComponent, Body1Component],
  templateUrl: './dashboard.component.html',
  styleUrl: './dashboard.component.css'
})
export default class DashboardComponent {

}
