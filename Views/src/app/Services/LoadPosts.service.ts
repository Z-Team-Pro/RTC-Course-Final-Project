import { Http } from '@angular/http';
import { Injectable } from '@angular/core';
import 'rxjs/add/operator/map';

@Injectable()

export class LoadPostService{




constructor(private http:Http){



}

Load(id=""){
return this.http.get('http://localhost:8080/public/RTC_Blogger/Load_Posts/'+id).map(
result=>result.json()

)


}





}