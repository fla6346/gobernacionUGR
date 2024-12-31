import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ConocimientoAComponent } from './conocimiento-a.component';

describe('ConocimientoAComponent', () => {
  let component: ConocimientoAComponent;
  let fixture: ComponentFixture<ConocimientoAComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [ConocimientoAComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ConocimientoAComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
