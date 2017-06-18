import { Http } from '@angular/http';
import { Injectable } from '@angular/core';
import 'rxjs/add/operator/map';

@Injectable()


export class LoginService{




constructor(private http:Http){







}



//login user 


Login(user:string, password:string){
return this.http.get('http://localhost:8080/public/BloggerLogin/'+user+'/'+password).map(
reslut=>reslut.json()
)



}






}