import { ApplicationConfig, importProvidersFrom, provideZoneChangeDetection } from '@angular/core';
import { provideRouter } from '@angular/router';
import { routes } from './app.routes';
import { provideClientHydration } from '@angular/platform-browser';
import { HttpClient, provideHttpClient, withFetch} from '@angular/common/http';
import {enviroment} from "../app/enviroment";
import { provideAnimationsAsync } from '@angular/platform-browser/animations/async'

export const appConfig: ApplicationConfig = {
  providers: [
    provideRouter(routes),
    provideHttpClient(),
    provideHttpClient(withFetch()), provideAnimationsAsync()]
    //provideZoneChangeDetection({ eventCoalescing: true }), provideRouter(routes), provideClientHydration(),provideHttpClient(withFetch())]
  };
  export const URL_BACKEND=enviroment.URL_BACKEND;
  export const URL_SERVICIOS=enviroment.URL_SERVICIOS;
  export const URL_FRONTEND=enviroment.URL_FRONTEND;
