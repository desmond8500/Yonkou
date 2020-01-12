import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { LocClientsComponent } from './loc-clients.component';

describe('LocClientsComponent', () => {
  let component: LocClientsComponent;
  let fixture: ComponentFixture<LocClientsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ LocClientsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(LocClientsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
