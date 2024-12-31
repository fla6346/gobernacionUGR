import { CommonModule } from '@angular/common';
import { HttpClient } from '@angular/common/http';
import { Component } from '@angular/core';


@Component({
  selector: 'app-image-upload',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './image-upload.component.html',
  styleUrl: './image-upload.component.css'
})
export class ImageUploadComponent {

  selectedFile:File|null=null;
  imageUrl:string| ArrayBuffer|null=null;
  constructor(private http:HttpClient){}

onFileSelected(event:Event):void{
    const target=event.target as HTMLInputElement;
    if(target.files && target.files.length>0){
    this.selectedFile=target.files[0];

    const reader=new FileReader();
    reader.onload=e=>this.imageUrl=reader.result;
    reader.readAsDataURL(this.selectedFile);
  }
}
onSubmit(): void {
  if (this.selectedFile) {
    const formData = new FormData();
    formData.append('image', this.selectedFile, this.selectedFile.name);

    // Aquí se envía la imagen al servidor
    this.http.post('http://localhost:8000/api/upload', formData)
      .subscribe({
        next: response => {
          console.log('Imagen cargada con éxito:', response);
        },
        error: err => {
          console.error('Error al cargar la imagen:', err);
        }
      });
  } else {
    console.error('No se ha seleccionado ninguna imagen.');
  }
}
}
