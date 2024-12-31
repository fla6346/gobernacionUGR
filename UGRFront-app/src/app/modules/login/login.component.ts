import { Component, OnDestroy, OnInit } from '@angular/core';
import {AuthService} from '../../services/auth.services'
import {ActivatedRoute, Router, RouterLink, RouterOutlet} from '@angular/router'
import { CommonModule } from '@angular/common'; // Import CommonModule
import { FormBuilder, FormGroup, FormsModule, Validators } from '@angular/forms'; // Import FormsModule
import { HttpClient, HttpClientModule } from '@angular/common/http';
import { Observable, Subscription } from 'rxjs';

interface LoginResponse{
  user: any;
  access_token:string;
}

@Component({
  selector: 'app-login',
  standalone: true,
  imports: [CommonModule, FormsModule],
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit, OnDestroy {
email:any=null;
password:any=null;
  loginForm:any;
  hasError:boolean=false;
  isLoading$:Observable<Boolean> | undefined;
  private unsubscribe: Subscription[]=[]

  defaultAuth:any={
    email: '',
    password:'',

  };

  constructor(
    private authService: AuthService,
    private router: Router,
    private route:ActivatedRoute,
    private http:HttpClient,
    private fb:FormBuilder
  ){
    this.isLoading$ = this.authService.isLoading$;
    /*if (authService.isLogued()) {
      this.router.navigate(['/']);
    }*/
    this.loginForm=this.initForm();
  }
  ngOnInit(): void{}
get f(){
  return this.loginForm.controls;
}

initForm():FormGroup{
  return this.fb.group({
      email:[
        null,Validators.compose([
          Validators.required,
          Validators.email,
          Validators.minLength(3),
          Validators.maxLength(320),
        ]),
      ],
      password:[
        null,
        Validators.compose([
          Validators.required,
          Validators.minLength(3),
          Validators.maxLength(100),
      ]),
    ],
    });
  }
submit(){
  this.hasError=false;
  if(this.loginForm.valid){
    this.authService.login(this.f.email.value, this.f.password.value).subscribe(
      (resp: any) => {
        console.log(resp);
        if (resp) {
          localStorage.setItem('access_token', resp.access_token);
          this.router.navigate(['/dashboard']);
        } else {
          this.hasError = true;
        }
      },
      (error: any) => {
        console.error('Error de inicio de sesión', error);
        this.hasError = true;
      }
    );
}
}
  onSubmit(form:any): void {
    if (this.loginForm) {
      this.sendData(form.value)
    }
  }
    sendData(data: any):void{
      this.http.post<LoginResponse>('http://127.0.0.1:8000/api/users/login', data).subscribe(
        response=>{
          console.log('Usuario Regis',response);
          localStorage.setItem('access_token',response.access_token)
          if(response.user){
          localStorage.setItem('user',JSON.stringify(response.user));
          }
          this.router.navigate(['/admin']);

        }, error=>{
          console.log('Error al registro',error);
          this.hasError=true;
        }
      );
    }

ngOnDestroy(){
  this.unsubscribe.forEach((sb) => sb.unsubscribe());
}
login(){
  if(!this.email || !this.password){
    alert('Por favor ingrese su correo electrónico y contraseña');
    return;
  }
  this.authService.login(this.email,this.password).subscribe((resp:any)=>{
  console.log(resp);
  if(resp.error&&resp){
    document.location.reload();
  }else{
    if(resp.error.error=="Unauthorized"){
      alert('El usuario o contrasena ingresado son incorrectas');
      return;
    }
  }
  })
}
}


