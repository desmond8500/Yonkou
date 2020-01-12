import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-citation-bloc',
  templateUrl: './citation-bloc.component.html',
  styleUrls: ['./citation-bloc.component.scss']
})
export class CitationBlocComponent implements OnInit {
  @Input() bloc = {
    auteur : 'Auteur',
    citation: 'Citation',
    detail: 'detail',
    type: 'type'
  };

  constructor() { }

  ngOnInit() {
  }

}
