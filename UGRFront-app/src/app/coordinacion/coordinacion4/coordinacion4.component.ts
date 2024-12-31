import { Component } from '@angular/core';
import { SidebarComponent } from '../../shared/sidebar/sidebar.component';
import { HeaderComponent } from '../../shared/components/header/header.component';
import { CommonModule } from '@angular/common';
import { OrganigramaComponent } from "../organigrama/organigrama.component";

@Component({
  selector: 'app-coordinacion4',
  standalone: true,
  imports: [SidebarComponent, HeaderComponent, CommonModule, OrganigramaComponent],
  templateUrl: './coordinacion4.component.html',
  styleUrl: './coordinacion4.component.css'
})
export default class Coordinacion4Component {

}
