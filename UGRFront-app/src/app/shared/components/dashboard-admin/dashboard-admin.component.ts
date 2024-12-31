import { Component, OnInit } from '@angular/core';
import { SidebarComponent } from '../../sidebar/sidebar.component';
import { HeaderAdminComponent } from '../header-admin/header-admin.component';
import { AuthService } from '../../../services/auth.services';
import { UserModel } from '../../../models/user.model';
import { FooterAdminComponent } from "../footer-admin/footer-admin.component";
import { CommonModule, NgFor } from '@angular/common';
import { MatTableDataSource } from '@angular/material/table';
import { HttpClient } from '@angular/common/http';
import { ImageUploadComponent } from "../../../image-upload/image-upload.component";
import { RouterModule } from '@angular/router';

@Component({
  selector: 'app-dashboard-admin',
  standalone: true,
  imports: [SidebarComponent, HeaderAdminComponent,
    FooterAdminComponent, CommonModule, ImageUploadComponent, RouterModule],
  templateUrl: './dashboard-admin.component.html',
  styleUrl: './dashboard-admin.component.css'
})
export class DashboardAdminComponent implements OnInit{
//user: UserModel|null=null;
data=new MatTableDataSource<UserModel>;
users:UserModel[]=[];

selectedFile: File |null=null;
  private http: HttpClient ;
imageUrl: string| ArrayBuffer| null=null;


  constructor(public authService: AuthService, http:HttpClient){
    this.http=http;
    this.data=new MatTableDataSource(this.users);
   }




  ngOnInit(): void {
    //this.user();
    //this.loadUsers();
    //this.loadCurrentUser();
    /*this.authService.getUser().subscribe({
      next:(data:any[])=>{
        this.users=data;
      },
      error:(err)=>{
        console.error('Error',err);
      }
    })*/
      //this.data=new MatTableDataSource(this.users);
  }
  loadCurrentUser (): void {
    const currentUser  = this.authService.getCurrentUser ();
    console.log('Current User:', currentUser );
    if (currentUser ) {
      this.authService.userG({ user: currentUser  });
      console.log('User  Loaded:', currentUser );
    } else {
      console.log('No users found');
    }
  }

 /* loadUsers(): void {
    this.authService.getUser().subscribe({
      next: (data: UserModel[]) => {
        this.users = data;
        this.data.data = this.users; // Update MatTableDataSource with new data
      },
      error: (err) => {
        console.error('Error loading users', err);
      }
    });
  }*/


  user():void{
  const currentUser=this.authService.getCurrentUser();
  /*const current=this.authService.loadStorage1();*/
  console.log('yyy',currentUser)
  //console.log('load',current);
  if(currentUser){
    this.authService.userG({user:currentUser});
    console.log('usuario Cargado',currentUser);
  }else{
    console.log('no hay usuarios');
  }
  }
    //getCurrentUser();
    //const currentUser=this.authService.user;




    logout(){
      this.authService.logout();
    }
    /*usuario(){
      this.authService.userG(this.authService.user).subscribe({
        next:(data:any[])=>{this.users=data;}
        });
        }*/

      }

