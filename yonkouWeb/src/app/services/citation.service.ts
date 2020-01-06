import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class CitationService {
  private local = 'http://localhost:8000/api/';
  private server = 'http://taabourserver.yonkou.info/api/structures';

  constructor(private http: HttpClient) { }

  getQuotes() {
    return this.http.get( this.local + 'citations');
  }
}
