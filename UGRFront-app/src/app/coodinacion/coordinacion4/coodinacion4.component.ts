import { Component } from '@angular/core';
import { DefaultDeserializer } from 'v8';
import { SidebarComponent } from "../../shared/sidebar/sidebar.component";
import LayoutComponent from "../../shared/components/layout/layout.component";
import Body1Component from "../../body/body1/body1/body1.component";
import { BodyComponent } from "../../body/body.component";
import { HeaderComponent } from '../../shared/components/header/header.component';
 import { CommonModule } from '@angular/common';
@Component({
  selector: 'app-coodinacion4',
  standalone: true,
  imports: [SidebarComponent,HeaderComponent,CommonModule],
  templateUrl: './coodinacion4.component.html',
  styleUrl: './coodinacion4.component.css'
})
export default class Coordinacion4Component {

}
