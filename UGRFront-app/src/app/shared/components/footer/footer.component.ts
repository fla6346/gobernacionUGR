import { Component } from '@angular/core';
import AdminDatComponent from '../../../datos/admin-dat/admin-dat.component';

@Component({
  selector: 'app-footer',
  standalone: true,
  imports: [AdminDatComponent],
  templateUrl: './footer.component.html',
  styleUrl: './footer.component.css'
})
export class FooterComponent {

}
