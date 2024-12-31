import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import DashboardComponent from '../../../shared/components/dashboard/dashboard.component';
import LayoutComponent from '../../../shared/components/layout/layout.component';

@Component({
  selector: 'app-register',
  standalone: true,
  imports: [LayoutComponent],
  templateUrl: './register.component.html',
  styleUrl: './register.component.css'
})
export default class RegisterComponent {

}
