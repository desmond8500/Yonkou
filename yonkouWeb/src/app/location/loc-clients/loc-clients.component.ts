import { Component, OnInit, Input } from '@angular/core';
import { LocationService } from 'src/app/services/location.service';
import { FormControl } from '@angular/forms';

@Component({
  selector: 'app-loc-clients',
  templateUrl: './loc-clients.component.html',
  styleUrls: ['./loc-clients.component.scss']
})
export class LocClientsComponent implements OnInit {
  public clients: any;
  public tampon: any;
  public date = new FormControl('');
  public mois = new FormControl('');
  public annee = ['Novembre', 'Decembre'];

  public contrat = {
    etat: false
  };

  public recu = {
    etat: false,
    date: '',
    local: '',
    prenom: '',
    nom: '',
    prix: '',
    mois: ''
  };



  @Input() client = {
    prenom: 'prenom',
    nom: 'nom'
  };
  constructor(private location: LocationService) { }

  ngOnInit() {
    this.getClients();
  }

  getClients() {
    this.location.getClients().subscribe(data => {
      this.tampon = data;
      this.clients = this.tampon.data;
    });
  }

  getContrat(client) {
    this.contrat.etat = true;
    this.recu.etat = false;
  }

  getRecu(client) {
    this.recu.etat = true;
    this.contrat.etat = false;


    this.recu.date = this.date.value;
    // this.recu.date = this.datePipe.transform(this.date.value, 'dd-MM-yyyy');
    this.recu.local = this.getAppartement(client.local);
    this.recu.prenom = client.prenom;
    this.recu.nom = client.nom;
    this.recu.prix = client.prix;
    this.recu.mois = this.mois.value;
  }

  getAppartement(app) {
    if (app === 'A11') {
      return 'Appartement 11';
    } else if (app === 'A13') {
      return 'Appartement 13';
    } else if (app === 'A14') {
      return 'Appartement 14';
    }
  }



}
