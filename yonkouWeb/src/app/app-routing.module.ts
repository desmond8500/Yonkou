import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { IndexComponent } from './index/index/index.component';
import { CitationListeComponent } from './citations/citation-liste/citation-liste.component';


const routes: Routes = [
  { path: '', component: IndexComponent },
  { path: 'citations', component: CitationListeComponent },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
