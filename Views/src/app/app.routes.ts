import { SignUpComponent } from './sign-up/sign-up.component';
import { HomeComponent } from './home/home.component';
import { LoginComponent } from './login/login.component';
import { Routes } from '@angular/router';
import{ControlService} from './Services/Control.service';

import {AddPostComponent} from './add-post/add-post.component'
export const rootRouterConfig: Routes = [
  { path: '', redirectTo: 'Login', pathMatch: 'full' },
  { path: 'home', component: HomeComponent ,canActivate:[ControlService] },
  {path: 'SignUp',component:SignUpComponent},
  {path: 'Login',component: LoginComponent},
  {path: 'AddPost',component: AddPostComponent,canActivate:[ControlService] }


];