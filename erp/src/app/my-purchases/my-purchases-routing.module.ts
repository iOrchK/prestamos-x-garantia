import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { MyPurchasesComponent } from './my-purchases.component';


const routes: Routes = [
  { path: '', component: MyPurchasesComponent }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class MyPurchasesRoutingModule { }
