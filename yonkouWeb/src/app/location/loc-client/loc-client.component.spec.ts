import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { LocClientComponent } from './loc-client.component';

describe('LocClientComponent', () => {
  let component: LocClientComponent;
  let fixture: ComponentFixture<LocClientComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ LocClientComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(LocClientComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
