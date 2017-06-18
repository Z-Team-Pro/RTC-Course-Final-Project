import { SignUpService } from './Services/Signup.service';
import { LoginService } from './Services/Login.service';

import { SignUpComponent } from './sign-up/sign-up.component';
import { HomeComponent } from './home/home.component';
import { LoginComponent } from './login/login.component';
import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { rootRouterConfig } from './app.routes';
import { AppComponent } from './app.component';
import { RouterModule } from '@angular/router';
import {AddPostComponent} from './add-post/add-post.component'
import{ControlService} from './Services/Control.service';
import{LoadPostService} from './Services/LoadPosts.service';

@NgModule({
  declarations: [
    AppComponent
    ,LoginComponent,
    HomeComponent,
    SignUpComponent,
    AddPostComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    RouterModule.forRoot(rootRouterConfig)
  ],
  providers: [ SignUpService,LoginService ,ControlService ,LoadPostService ],
  bootstrap: [AppComponent]
})
export class AppModule { }
