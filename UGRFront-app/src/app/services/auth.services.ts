import { Injectable, Inject, PLATFORM_ID } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { BehaviorSubject, catchError, map, Observable, of } from 'rxjs';
import { Router } from '@angular/router';
import { isPlatformBrowser } from '@angular/common';
import { UserModel } from '../models/user.model';
import { URL_SERVICIOS } from '../app.config';

@Injectable({
  providedIn: 'root'
})
export class AuthService {


  getUser():Observable<UserModel> {
    return this.http.get<UserModel>(`${URL_SERVICIOS}/user`)
  }
  //private unSubscribe: Subscription[] = [];
  token: any;
  user: any;
  private isLoadingSubject: BehaviorSubject<boolean>;
  private currentUserSubject: BehaviorSubject<UserModel | null>;
  public isLoading$: Observable<boolean>;
  public currentUser$: Observable<UserModel | null>;

  constructor(
    private http: HttpClient,
    private router: Router,
    @Inject(PLATFORM_ID) private platformId: Object // Inyecta el PLATFORM_ID

  ) {
    this.loadStorage();

    this.isLoadingSubject = new BehaviorSubject<boolean>(false);
    this.currentUserSubject = new BehaviorSubject<UserModel | null>(null);
    this.currentUser$ = this.currentUserSubject.asObservable();
    this.isLoading$ = this.isLoadingSubject.asObservable();
  }



  /*isLogued(): boolean {
    return this.token !== null && this.token.length > 5;
  }*/
  loadStorage()  {
    if (isPlatformBrowser(this.platformId)) {
      if(localStorage.getItem('token')){
        this.token = localStorage.getItem('token');
        this.user =JSON.parse(localStorage.getItem('user')??'');
      }else{
        this.token = '';
        this.user=null;
      }
  }
}
 loadStorage1(): void {
  if (isPlatformBrowser(this.platformId)) {
    const userData = localStorage.getItem('user');
    this.user = userData ? JSON.parse(userData) : null; // Cargar el usuario desde localStorage
  }
}


  login(email: string, password: string){
   // this.isLoadingSubject.next(true);
    const url = `${URL_SERVICIOS}/users/login`;
    return this.http.post(url,{email,password}).pipe(

      map((resp: any) => {
    if(resp.access_token)
      {

           return this.saveLocalResponse(resp);
        //   return this.user();
  }else{
    return resp;  }
   }),
   catchError((err:any)=>{
    return of(err);

   })
   )
}
registro(name:string,email: string, password: string){
  // this.isLoadingSubject.next(true);
   const url = `${URL_SERVICIOS}/users/register`;
   return this.http.post(url,{name,email,password}).pipe(

    map((resp: any) => {
      if(resp.access_token)
        {

             return this.saveLocalResponse(resp);
          //   return this.user();
    }else{
      return resp;  }
     }),
     catchError((err:any)=>{
      return of(err);

     })
     )

}
  saveLocalResponse(resp:any){
   if(resp.access_token&& resp.user){
    localStorage.setItem('token',resp.access_token);
    localStorage.setItem('user',JSON.stringify(resp.user));
    this.user=resp.user;
    this.token = resp.access_token;
    return true;
    //////////////////////////////////////////////////////////////////////////return this.cargaDatos(resp);
   }
   return false;
  }
  cargaDatos(resp: any) {
    throw new Error('Method not implemented.');
  }
  getCurrentUser():UserModel|null{
    const user=localStorage.getItem('currentUser');
    return user ? JSON.parse(user) : null;
   // this.saveLocalResponse();
    return this.user;

  }


  userG(usuario: { user: UserModel }) {
    const userName=usuario.user.name;
    localStorage.setItem('user', JSON.stringify({name:userName}));
    this.user = userName;
    this.currentUserSubject.next(this.user);
    return usuario;
}

  logout() {
    this.user = null;
    this.token = '';
    localStorage.removeItem('token');
    localStorage.removeItem('user');
    this.router.navigate(['auth/login'], {
      queryParams: [],
    });
  }
 /* getUser(): Observable<UserModel>{
    return this.http.get<UserModel>(`${URL_SERVICIOS}/users/me`);
  }*/
}
