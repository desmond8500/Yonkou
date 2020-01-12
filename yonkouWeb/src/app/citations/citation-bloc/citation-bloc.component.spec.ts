import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CitationBlocComponent } from './citation-bloc.component';

describe('CitationBlocComponent', () => {
  let component: CitationBlocComponent;
  let fixture: ComponentFixture<CitationBlocComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CitationBlocComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CitationBlocComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
