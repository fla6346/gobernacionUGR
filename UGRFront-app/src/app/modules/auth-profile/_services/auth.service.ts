import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Router } from 'express';

@Injectable({
  providedIn: 'root'
})
export class AuthService {
user:any;
token:any='';

  constructor(
    private http:HttpClient,
    private router:Router,

  ) {
    // tiene que cargarse el usuario y el Token
   }
}
