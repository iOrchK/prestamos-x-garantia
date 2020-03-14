import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { MyAccountStateComponent } from './my-account-state.component';

describe('MyAccountStateComponent', () => {
  let component: MyAccountStateComponent;
  let fixture: ComponentFixture<MyAccountStateComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MyAccountStateComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(MyAccountStateComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
