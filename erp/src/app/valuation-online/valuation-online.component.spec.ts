import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ValuationOnlineComponent } from './valuation-online.component';

describe('ValuationOnlineComponent', () => {
  let component: ValuationOnlineComponent;
  let fixture: ComponentFixture<ValuationOnlineComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ValuationOnlineComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ValuationOnlineComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
