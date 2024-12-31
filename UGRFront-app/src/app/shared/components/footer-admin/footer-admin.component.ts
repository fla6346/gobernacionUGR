import { Component } from '@angular/core';
import { HeaderComponent } from '../header/header.component';
import { HomeComponent } from '../../../modules/home/home.component';
import { BodyComponent } from '../../../body/body.component';

@Component({
  selector: 'app-footer-admin',
  standalone: true,
  imports: [BodyComponent, HeaderComponent, HomeComponent],
  templateUrl: './footer-admin.component.html',
  styleUrl: './footer-admin.component.css'
})
export class FooterAdminComponent {

}
