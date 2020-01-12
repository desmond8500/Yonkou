import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class CitationService {
  private local = 'http://localhost:8000/api/';
  private server = 'http://yonkou.yonkou.info/api/';

  constructor(private http: HttpClient) { }

  getQuotes() {
    // return this.http.get( this.local + 'quotes');
    return this.http.get( this.server + 'quotes');
  }
}
