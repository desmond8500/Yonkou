import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-loc-recu',
  templateUrl: './loc-recu.component.html',
  styleUrls: ['./loc-recu.component.scss']
})
export class LocRecuComponent implements OnInit {
  @Input() recu = {
    date: 's',
    local: '',
    prenom: '',
    nom: '',
    prix: '',
    mois: ''
  };
  constructor() { }

  ngOnInit() {
  }



}
