import { SignUpComponent } from './sign-up/sign-up.component';
import { HomeComponent } from './home/home.component';
import { LoginComponent } from './login/login.component';
import { Routes } from '@angular/router';

export const rootRouterConfig: Routes = [
  { path: '', redirectTo: 'Login', pathMatch: 'full' },
  { path: 'home', component: HomeComponent },
  {path: 'SignUp',component:SignUpComponent},
  {path: 'Login',component: LoginComponent}
];