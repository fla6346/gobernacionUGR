import { Component,  OnInit } from '@angular/core';
import { FormBuilder, FormControl, FormGroup, ReactiveFormsModule, Validators } from '@angular/forms';
import { MatFormFieldModule } from '@angular/material/form-field';
import { MatSelectModule } from '@angular/material/select';
import { MatInputModule } from '@angular/material/input';
import { MatIconModule } from '@angular/material/icon';
import { Router, RouterModule } from '@angular/router';
import { SharedModule } from "../../shared/shared.module";
import { CommonModule, NgFor } from '@angular/common';
import { HttpClient } from '@angular/common/http';
import { EventoService } from '../../services/evento.services';
import { EventoModel } from '../../models/evento.model';
import { MatTableDataSource } from '@angular/material/table';

@Component({
  selector: 'app-administrador-a',
  standalone: true,
  imports: [
    RouterModule,
    SharedModule,
    MatFormFieldModule,
    MatInputModule,
    MatSelectModule,
    MatIconModule,
    ReactiveFormsModule,
    NgFor,
    CommonModule
],
  templateUrl: './administrador-a.component.html',
  styleUrls: ['./administrador-a.component.css'],

})
export default class AdministradorAComponent  implements OnInit{
  mySelect=new FormControl();
  disableSelectList:string[]=[];
 //eventos=['Incendios','Inundaciones','sequias','granizadas','heladas','sismos'];
 eventos:any[]=[];
 eventForm: FormGroup;
  loading: boolean | undefined;
  //private fb!: FormBuilder;
  dataSource: MatTableDataSource<EventoModel>;
  events:EventoModel[]=[
    {
      idEvento:1,
      tipo:'',
      provincia: 'Provincia 1',
      municipio: 'Municipio 1',
      fecha_inicio: '2023-10-01',
      fecha_finalizacion: '2023-10-02',
      hora: '10:00',
      descripcion: 'Descripción del Evento 1',
      area: 'Área Afectada 1',
    },
    {
      idEvento:2,
      tipo:'',
      provincia: 'Provincia 2',
      municipio: 'Municipio 2',
      fecha_inicio: '2023-10-03',
      fecha_finalizacion: '2023-10-04',
      hora: '11:00',
      descripcion: 'Descripción del Evento 2',
      area: 'Área 2',
    },
  ]
  availableEvents: EventoModel[]=[];
  constructor(
     private http: HttpClient,
     //private sanitizer:DomSanitizer,
     private fb: FormBuilder,
     private eventoService:EventoService,
     private router:Router,
    ) {
     this.dataSource=new MatTableDataSource(this.events);
    this.eventForm = this.fb.group({
      id:[''],
      tipo: ['', Validators.required], // Vinculado al tipo de evento
      provincia: ['', Validators.required],
      municipio: ['', Validators.required],
      fechaIni: ['', Validators.required],
      fechaFin: ['', Validators.required],
      hora: ['', Validators.required],
      area: ['', Validators.required],
      descripcion: ['', Validators.required]
    });
   }
  ngOnInit(): void {
    this.loadEventos(); // Cargar eventos al iniciar el componente
  }
  loadEventos() {
    this.loading = true;
    this.eventoService.getEventos().subscribe({
      next:(data: EventoModel[])=>{
        this.events=data;
        this.filterAvailableEvents(); // Filtra eventos disponibles después de cargar
        this.dataSource.data = this.events; // Actualiza la fuente de datos de la tabla

      },
      error: (err) => {
        console.error('Error al cargar eventos', err); // Manejo de errores
      },
      complete: () => {
        console.log('Carga de eventos completada'); // Opción de completar
      }
    });
  }
  filterAvailableEvents() {
    const today = new Date();
  this.availableEvents = this.events.filter(event => {
    const endDate = new Date(event.fecha_finalizacion);
    return endDate >= today; // Filtra eventos cuya fecha de finalización es hoy o en el futuro
  });
  }


  onalert(event:Event):void{

  }
  /*onSubmit(){
    if(this.eventForm.valid){
      const formData = this.eventForm.value;
      //this.eventoService.registroEvento(this.eventForm.value)
      //this.eventoService.postAlertRegi();
      //const selectedEventos = this.mySelect.value;
      this.eventoService.registroEvento1(formData)
        //selectedEventos,this.eventForm.value.provincia,this.eventForm.value.municipio,this.eventForm.value.fechaIni,this.eventForm.value.fechaFin,this.eventForm.value.hora,this.eventForm.value.descripcion
        //,this.eventForm.value.area)
      .subscribe(response => {
        console.log('Success!', response);
        }, error => {
          console.error('Error!', error);
        });
    }
    else{
      console.log('salio!');
    }
  }*/
    onSubmit() {
      if (this.eventForm.valid) {
        //this.loading = true; // Inicia el estado de carga
        const formData = this.eventForm.value; // Obtiene todos los datos del formulario
        this.eventoService.registroEvento1(formData).subscribe(
          response => {
            console.log('Evento registrado con éxito!', response);
            // Aquí puedes redirigir o mostrar un mensaje de éxito
            this.router.navigate(['/ruta-de-exito']); // Cambia esto a la ruta deseada
          },
          error => {
            console.error('Error al registrar el evento', error);
            // Aquí puedes mostrar un mensaje de error al usuario
          },
          () => {
            this.loading = false; // Finaliza el estado de carga
          }
        );
      } else {
        console.log('El formulario no es válido');
        // Aquí puedes mostrar un mensaje de error al usuario si el formulario no es válido
      }
    }
    eliminar(id:number) {
      const event=this.events.find(e=>e.idEvento===id)
      console.log('ID a eliminar:', id); // Verifica el ID que se está pasando
      console.log(event?.area);
      if(event){
       this.eventoService.deleteEvento(event.idEvento).subscribe({
         next: response => {
           console.log('elemento eliminado',response);
           this.loadEventos();
         },
         error: error => {
           console.log('Error al eliminar el archivo pdf');
         }
       });
     } else {
      console.warn('Evento no encontrado con ID:', id); // Mensaje si no se encuentra el evento
    }
     }
     
}
