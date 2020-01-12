import { Component, OnInit, Input } from '@angular/core';
import { LocationService } from 'src/app/services/location.service';

@Component({
  selector: 'app-loc-clients',
  templateUrl: './loc-clients.component.html',
  styleUrls: ['./loc-clients.component.scss']
})
export class LocClientsComponent implements OnInit {
  public clients: any;
  public tampon: any;

  @Input() client = {
    prenom: 'prenom',
    nom: 'nom'
  };
  constructor(public location: LocationService) { }

  ngOnInit() {
    this.getClients();
  }

  getClients() {
    this.location.getClients().subscribe(data => {
      this.tampon = data;
      this.clients = this.tampon.data;
    });
  }

}
