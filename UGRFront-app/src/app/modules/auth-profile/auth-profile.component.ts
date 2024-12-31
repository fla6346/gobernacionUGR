import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { HttpClient, HttpClientModule} from '@angular/common/http';
import { OnInit } from '@angular/core';
import { RouterOutlet } from '@angular/router';

/*declare var $:any;
declare function initPage(params:any[]):any;*/
@Component({
  selector: 'app-auth-profile',
  standalone: true,
  imports: [CommonModule,FormsModule,HttpClientModule,RouterOutlet],
  templateUrl: './auth-profile.component.html',
  styleUrl: './auth-profile.component.css',
  providers:[HttpClient],
})
export class AuthProfileComponent implements OnInit{

  constructor() { }
  ngOnInit(): void {
    /*setTimeout(()=>{
      //initPage($);
    },50);*/
  }
  /*email: string= '';
  password: string='';
//constructor (private http: HttpClientModule){}
//private apiUrl='http://localhost:8000/usuarios'
  constructor (private http: HttpClient){
  }
  onSubmit(){
    const usuario={
      email: this.email,
      password: this.password,
    };
     this.http.post('http://localhost:8000/AuthenticatedSessionController/login', usuario).subscribe(
      response=>{
        console.log('Usuario Regis',response);
      }, error=>{
        console.log('Error al iniciar sesion',error);
        if(error.error){
          console.log('Error Details',error.error);
        }
      }
    );
  }*/
}
