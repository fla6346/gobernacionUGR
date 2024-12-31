import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Coodinacion4Component } from './coodinacion4.component';

describe('Coodinacion4Component', () => {
  let component: Coodinacion4Component;
  let fixture: ComponentFixture<Coodinacion4Component>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [Coodinacion4Component]
    })
    .compileComponents();

    fixture = TestBed.createComponent(Coodinacion4Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
