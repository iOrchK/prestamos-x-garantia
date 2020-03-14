import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { MyAccountStateRoutingModule } from './my-account-state-routing.module';
import { MyAccountStateComponent } from './my-account-state.component';


@NgModule({
  declarations: [MyAccountStateComponent],
  imports: [
    CommonModule,
    MyAccountStateRoutingModule
  ]
})
export class MyAccountStateModule { }
