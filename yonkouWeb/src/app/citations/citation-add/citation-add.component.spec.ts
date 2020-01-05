import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CitationAddComponent } from './citation-add.component';

describe('CitationAddComponent', () => {
  let component: CitationAddComponent;
  let fixture: ComponentFixture<CitationAddComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CitationAddComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CitationAddComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
