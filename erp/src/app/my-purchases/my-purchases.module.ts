import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { MyPurchasesRoutingModule } from './my-purchases-routing.module';
import { MyPurchasesComponent } from './my-purchases.component';


@NgModule({
  declarations: [MyPurchasesComponent],
  imports: [
    CommonModule,
    MyPurchasesRoutingModule
  ]
})
export class MyPurchasesModule { }
