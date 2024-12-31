import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Coordinacion4Component } from './coordinacion4.component';

describe('Coordinacion4Component', () => {
  let component: Coordinacion4Component;
  let fixture: ComponentFixture<Coordinacion4Component>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [Coordinacion4Component]
    })
    .compileComponents();

    fixture = TestBed.createComponent(Coordinacion4Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
