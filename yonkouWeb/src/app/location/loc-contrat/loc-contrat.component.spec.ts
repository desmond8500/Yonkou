import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { LocContratComponent } from './loc-contrat.component';

describe('LocContratComponent', () => {
  let component: LocContratComponent;
  let fixture: ComponentFixture<LocContratComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ LocContratComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(LocContratComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
