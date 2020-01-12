import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

// Added Modules
import { HttpClientModule } from '@angular/common/http';

// Modules
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';


// Pages
import { NavbarComponent } from './index/navbar/navbar.component';
import { CitationListeComponent } from './citations/citation-liste/citation-liste.component';
import { CitationAddComponent } from './citations/citation-add/citation-add.component';
import { IndexComponent } from './index/index/index.component';
import { CitationBlocComponent } from './citations/citation-bloc/citation-bloc.component';
import { LocClientsComponent } from './location/loc-clients/loc-clients.component';
import { LocRecuComponent } from './location/loc-recu/loc-recu.component';
import { LocClientComponent } from './location/loc-client/loc-client.component';
import { LocContratComponent } from './location/loc-contrat/loc-contrat.component';
import { ReactiveFormsModule } from '@angular/forms';

@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    CitationListeComponent,
    CitationAddComponent,
    IndexComponent,
    CitationBlocComponent,
    LocClientsComponent,
    LocRecuComponent,
    LocClientComponent,
    LocContratComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    NgbModule,
    HttpClientModule,
    ReactiveFormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
