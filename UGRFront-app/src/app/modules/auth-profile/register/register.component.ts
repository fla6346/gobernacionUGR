import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { HttpClient } from '@angular/common/http';
import { AuthService } from '../../../services/auth.services';
import { FormBuilder, FormGroup, FormsModule, Validators } from '@angular/forms';
import { Router } from '@angular/router';

interface RegisterResponse {
  message: string;
  //user: {
    name: string;
    email: string;
    password:string;
 // };
}

@Component({
  selector: 'app-register',
  standalone: true,
  imports: [CommonModule, FormsModule],
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {
  loginForm: any;
  hasError: boolean = false;
  passwordMismatch: boolean = false;

  constructor(
    private authService: AuthService,
    private http: HttpClient,
    private fb: FormBuilder,
    private router: Router
  ) {
    this.loginForm = this.initForm();
  }

  ngOnInit(): void {}

  get f() {
    return this.loginForm.controls;
  }

  initForm(): FormGroup {
    return this.fb.group({
      name: [null, [Validators.required, Validators.minLength(3)]],
      email: [null, [Validators.required, Validators.email]],
      password: [null, [Validators.required, Validators.minLength(6)]],
      password1: [null, [Validators.required]] // Password confirmation
    });
  }

  submit(form:any) {
{
    this.sendData(form.value);
  }
  }
  sendData(data: any): void {
    if(data.password==data.password1){
    this.authService.registro(data.name,data.email,data.password).subscribe(
      response => {
        console.log('Usuario Registrado', response);
        if (response) {
          localStorage.setItem('user', JSON.stringify(response));
          this.router.navigate(['/admin']);
          console.log(response);
        }
      },
      error => {
        console.error('Error al registrar usuario', error);
        this.hasError = true; // Indica que hubo un error
      }
    );
    console.log(data);
  }else{
    console.log('no es el mismo password');
  }
}
}
