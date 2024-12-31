import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ImgesComponent } from './imges.component';

describe('ImgesComponent', () => {
  let component: ImgesComponent;
  let fixture: ComponentFixture<ImgesComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [ImgesComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ImgesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
