import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { MyAccountStateComponent } from './my-account-state.component';


const routes: Routes = [
  { path: '', component: MyAccountStateComponent }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class MyAccountStateRoutingModule { }
