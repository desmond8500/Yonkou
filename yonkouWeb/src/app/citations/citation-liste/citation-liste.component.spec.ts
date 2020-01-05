import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CitationListeComponent } from './citation-liste.component';

describe('CitationListeComponent', () => {
  let component: CitationListeComponent;
  let fixture: ComponentFixture<CitationListeComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CitationListeComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CitationListeComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
