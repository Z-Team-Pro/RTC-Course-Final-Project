import { SignUpService } from './../Services/Signup.service';
import { Component } from '@angular/core';

@Component({
    selector: 'sign-up',
    templateUrl: 'sign-up.component.html',
    styleUrls: ['sign-up.component.css']
})
export class SignUpComponent {


Name:string;
Password:string;
Email:string;
Phone:string;
Avatar:any;
Date:string;






constructor( private adduser : SignUpService ) {


console.log(this.Name);


}
  signup(){
console.log(this.Name);

this.adduser.SignUp(this.Name,this.Phone,this.Email,this.Date,this.Avatar,this.Password).subscribe(
result=>{ console.log(result)},
error=>{console.log(error)}
)




  }


}
