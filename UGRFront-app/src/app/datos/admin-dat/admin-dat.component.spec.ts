import { ComponentFixture, TestBed } from '@angular/core/testing';

import {AdminDatComponent} from './admin-dat.component'

describe('AdminDatComponent', () => {
  let component: AdminDatComponent;
  let fixture: ComponentFixture<AdminDatComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [AdminDatComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(AdminDatComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
