import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-loc-recu',
  templateUrl: './loc-recu.component.html',
  styleUrls: ['./loc-recu.component.scss']
})
export class LocRecuComponent implements OnInit {
  public date: Date = new Date();
  public jour = this.date.getDate();
  public mois = this.date.getMonth();
  public annee = this.date.getFullYear();
  public total = this.jour + this.mois;

  @Input() recu = {
    date: this.total,
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
