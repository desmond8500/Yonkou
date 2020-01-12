import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class LocationService {
  private local = 'http://localhost:8000/api/';
  private server = 'http://yonkou.yonkou.info/api/';

  constructor(private http: HttpClient) { }

  getClients() {
    // return this.http.get(this.local + 'clients');
    return this.http.get(this.server + 'clients');
  }
}
