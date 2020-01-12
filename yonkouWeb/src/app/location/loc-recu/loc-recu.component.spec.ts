import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { LocRecuComponent } from './loc-recu.component';

describe('LocRecuComponent', () => {
  let component: LocRecuComponent;
  let fixture: ComponentFixture<LocRecuComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ LocRecuComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(LocRecuComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
