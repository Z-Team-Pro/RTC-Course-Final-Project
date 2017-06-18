import { Component } from '@angular/core';
import{LoadPostService} from '../Services/LoadPosts.service';
import { Routes, RouterModule ,Router } from '@angular/router';

@Component({
    selector: 'home',
    templateUrl: 'home.component.html',
    styleUrls: ['home.component.css']
})
export class HomeComponent {



Profile:any;
Posts:any;
constructor( private load:LoadPostService , private route: Router )

{
this.load.Load().subscribe(
result=>{
 this.Posts=result;
 console.log(this.Posts);
},
error=>{console.log(error)}
)

this.Profile=localStorage.getItem("currentUser");
this.Profile=JSON.parse(this.Profile);




}


logout( )
{


localStorage.removeItem("currentUser");
this.route.navigate(['/Login']);




}






}
