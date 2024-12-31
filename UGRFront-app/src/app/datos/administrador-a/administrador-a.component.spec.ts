import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AdministradorAComponent } from './administrador-a.component';

describe('AdministradorAComponent', () => {
  let component: AdministradorAComponent;
  let fixture: ComponentFixture<AdministradorAComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [AdministradorAComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(AdministradorAComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
