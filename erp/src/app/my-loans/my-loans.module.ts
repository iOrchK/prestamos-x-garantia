import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { MyLoansRoutingModule } from './my-loans-routing.module';
import { MyLoansComponent } from './my-loans.component';


@NgModule({
  declarations: [MyLoansComponent],
  imports: [
    CommonModule,
    MyLoansRoutingModule
  ]
})
export class MyLoansModule { }
