import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { ValuationOnlineRoutingModule } from './valuation-online-routing.module';
import { ValuationOnlineComponent } from './valuation-online.component';


@NgModule({
  declarations: [ValuationOnlineComponent],
  imports: [
    CommonModule,
    ValuationOnlineRoutingModule
  ]
})
export class ValuationOnlineModule { }
