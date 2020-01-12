import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class LocationService {
  private local = 'http://localhost:8000/api/';
  private server = 'http://taabourserver.yonkou.info/api/structures';

  constructor(private http: HttpClient) { }

  getClients() {
    return this.http.get(this.local + 'clients');
  }
}
