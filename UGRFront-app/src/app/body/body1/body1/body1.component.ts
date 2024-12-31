import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';

@Component({
  selector: 'app-body1',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './body1.component.html',
  styleUrls:['./body1.component.css']
})
export default class Body1Component {

  images: string[] = [
    '/img/carrusel/1.jpg',
    '/img/carrusel/2.jpg',
    '/img/carrusel/3.jpg'
  ];
}
