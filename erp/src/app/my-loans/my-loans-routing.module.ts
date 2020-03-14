import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { MyLoansComponent } from './my-loans.component';


const routes: Routes = [
  { path: '', component: MyLoansComponent }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class MyLoansRoutingModule { }
