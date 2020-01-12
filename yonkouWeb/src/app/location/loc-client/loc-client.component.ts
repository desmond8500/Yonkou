import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-loc-client',
  templateUrl: './loc-client.component.html',
  styleUrls: ['./loc-client.component.scss']
})
export class LocClientComponent implements OnInit {
  @Input() clients;
  constructor() { }

  ngOnInit() {
  }

}
