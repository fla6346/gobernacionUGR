import { Component } from '@angular/core';
import { RouterLink,RouterOutlet } from '@angular/router';
import { FormBuilder, FormGroup } from '@angular/forms';
import { AuthService } from '../../services/auth.services';
import { Router } from 'express';
import { ReactiveFormsModule } from '@angular/forms';
import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-signup',
  standalone: true,
  imports: [RouterOutlet,BrowserModule,ReactiveFormsModule],
  templateUrl: './signup.component.html',
  styleUrl: './signup.component.css'
})
export class SignupComponent {
  /*registerForm:FormGroup;
  errors:any;


  constructor(
    private authService:AuthService,
    private router:Router,
    private fb:FormBuilder
  ){
    this.registerForm = this.fb.group({
      name:[''],
      email:[''],
      password:[''],
      password_confirmation:['']
    });
  }
  onSubmit():void{
    this.cleanErrors();
    this.authService.register(this.registerForm.value).subscribe(
    response =>this.handleResponse(response),
    errors=>this.handleErrors(errors)
  )
}
  private  handleResponse(response:any):void{
    console.log(response.message);
  }
  private handleErrors(errors:any):void{
    this.errors=errors.error.errors;
    console.log(this.errors);
  }
  private cleanErrors():void{
    this.errors = null;
  }*/
}
