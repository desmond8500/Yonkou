import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NavbarComponent } from './index/navbar/navbar.component';
import { CitationListeComponent } from './citations/citation-liste/citation-liste.component';
import { CitationAddComponent } from './citations/citation-add/citation-add.component';
import { IndexComponent } from './index/index/index.component';

@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    CitationListeComponent,
    CitationAddComponent,
    IndexComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
