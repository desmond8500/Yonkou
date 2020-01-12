import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { IndexComponent } from './index/index/index.component';
import { CitationListeComponent } from './citations/citation-liste/citation-liste.component';
import { LocClientsComponent } from './location/loc-clients/loc-clients.component';


const routes: Routes = [
  { path: '', component: IndexComponent },
  { path: 'citations', component: CitationListeComponent },
  { path: 'locations', component: LocClientsComponent },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
