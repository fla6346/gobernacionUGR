import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Alerta2Component } from './alerta2.component';

describe('Alerta2Component', () => {
  let component: Alerta2Component;
  let fixture: ComponentFixture<Alerta2Component>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [Alerta2Component]
    })
    .compileComponents();

    fixture = TestBed.createComponent(Alerta2Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
