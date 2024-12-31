import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { NgModule } from '@angular/core';
import { RouterLinkActive, RouterModule, RouterOutlet } from '@angular/router';
import { RouterLink } from '@angular/router';
import  AdminDatComponent  from '../datos/admin-dat/admin-dat.component';
@Component({
  selector: 'app-body',
  standalone: true,
  imports: [RouterLink,CommonModule],
  templateUrl: './body.component.html',
  styleUrl: './body.component.css'
})
export class BodyComponent {

}
