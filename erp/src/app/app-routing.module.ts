import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';


const routes: Routes = [
  { path: '', loadChildren: () => import('./home/home.module').then(mod => mod.HomeModule) },
  { path: 'about-us', loadChildren: () => import('./about-us/about-us.module').then(mod => mod.AboutUsModule) },
  { path: 'contact-us', loadChildren: () => import('./contact-us/contact-us.module').then(mod => mod.ContactUsModule) },
  { path: 'store', loadChildren: () => import('./store/store.module').then(mod => mod.StoreModule) },
  { path: 'sign-in', loadChildren: () => import('./sign-in/sign-in.module').then(mod => mod.SignInModule) },
  { path: 'user-registration', loadChildren: () => import('./user-registration/user-registration.module').then(mod => mod.UserRegistrationModule) },
  { path: 'password-recovery', loadChildren: () => import('./password-recovery/password-recovery.module').then(mod => mod.PasswordRecoveryModule) },
  { path: 'sign-out', loadChildren: () => import('./sign-out/sign-out.module').then(mod => mod.SignOutModule) },
  { path: 'my-profile', loadChildren: () => import('./my-profile/my-profile.module').then(mod => mod.MyProfileModule) },
  { path: 'my-loans', loadChildren: () => import('./my-loans/my-loans.module').then(mod => mod.MyLoansModule) },
  { path: 'my-purchases', loadChildren: () => import('./my-purchases/my-purchases.module').then(mod => mod.MyPurchasesModule) },
  { path: 'my-account-state', loadChildren: () => import('./my-account-state/my-account-state.module').then(mod => mod.MyAccountStateModule) },
  { path: 'valuation-online', loadChildren: () => import('./valuation-online/valuation-online.module').then(mod => mod.ValuationOnlineModule) },
  { path: '**', redirectTo: '', pathMatch: 'full' }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
