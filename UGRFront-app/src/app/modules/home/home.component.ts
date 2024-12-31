import { Component, OnInit } from '@angular/core';
import { HeaderComponent } from "../../shared/components/header/header.component";
import { FooterComponent } from '../../shared/components/footer/footer.component';
import LayoutComponent from "../../shared/components/layout/layout.component";
import { BodyComponent } from "../../body/body.component";
import { SidebarComponent } from '../../shared/sidebar/sidebar.component';
import Body1Component from '../../body/body1/body1/body1.component';

//declare var $: any;
//declare function initPage([]):any;
@Component({
  selector: 'app-home',
  standalone: true,
  imports: [FooterComponent, LayoutComponent, BodyComponent,SidebarComponent,HeaderComponent,Body1Component],
  templateUrl: './home.component.html',
  styleUrls:[ './home.component.css']
})
export class HomeComponent implements OnInit {
constructor(){}
ngOnInit(): void {
  /*setTimeout(()=>{
    initPage($);
  },50);*/
}
}
