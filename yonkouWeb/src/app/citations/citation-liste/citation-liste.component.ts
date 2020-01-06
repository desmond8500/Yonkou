import { Component, OnInit } from '@angular/core';
import { CitationService } from 'src/app/services/citation.service';

@Component({
  selector: 'app-citation-liste',
  templateUrl: './citation-liste.component.html',
  styleUrls: ['./citation-liste.component.scss']
})
export class CitationListeComponent implements OnInit {
  public citations: any;
  public test = 'sdfsd';

  constructor(private citation: CitationService) { }

  ngOnInit() {
    this.getCitations();

  }

  getCitations() {
    this.citation.getQuotes().subscribe( data => {
      this.citations = data;
      console.log(data);
    });
  }

}
