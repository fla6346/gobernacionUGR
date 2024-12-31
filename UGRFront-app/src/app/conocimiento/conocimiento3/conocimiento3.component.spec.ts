import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Conocimiento3Component } from './conocimiento3.component';

describe('Conocimiento3Component', () => {
  let component: Conocimiento3Component;
  let fixture: ComponentFixture<Conocimiento3Component>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [Conocimiento3Component]
    })
    .compileComponents();

    fixture = TestBed.createComponent(Conocimiento3Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
