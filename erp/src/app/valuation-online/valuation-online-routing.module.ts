import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ValuationOnlineComponent } from './valuation-online.component';


const routes: Routes = [
  { path: '', component: ValuationOnlineComponent }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class ValuationOnlineRoutingModule { }
