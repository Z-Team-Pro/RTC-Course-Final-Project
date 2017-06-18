import { HttpModule  , Http, Response ,Headers, RequestOptions } from '@angular/http';
import { Injectable } from '@angular/core';
import "rxjs/add/operator/map";
@Injectable()


export class SignUpService {



constructor(private http: Http){

}


SignUp( Name:string, Phone:string ,Email: string ,Date:string,Avatar:any,Password:string){
console.log("name here");


// add authorization header with jwt token
      //  let headers = new Headers({ 'Authorization': 'Bearer ' + localStorage.getItem('token') });
        let headers = new Headers({ 'Content-Type': 'form-data' });


        let options = new RequestOptions({ headers: headers });


console.log(Name);
var data= new FormData;
data.append("Name",Name);
data.append("Email",Email);
data.append("Password",Password);
//data.append("photo",Avatar);
data.append("Phone",Phone);
data.append("date-of-birth",Date);


return this.http.post("http://localhost:8080/public/RTC_Blogger/SignUp",data).map(


result=>result.json()

)   

}


}