# RTC-Course-Final-Project
The Final Project For  RTC PHP API Course RTC-Blogger using Angular4 Slim framwork and Parse server 
# Installation Guide 

How to prepare the development Environment for RTC-Blogger Project

**1. Install Node JS**
   
 * Go to [Node Download](https://nodejs.org/en/download/)
 * Install Node for your OS 

**2. Install Mongodb** 
  * Go to [Mongodb](https://www.mongodb.com/download-center?jmp=nav#community)
  * Install Mongo in Your OS 
  * For ubuntu users check for Installtion  here [Install Mongo on Ubuntu](https://www.digitalocean.com/community/tutorials/how-to-install-mongodb-on-ubuntu-16-04) 
  
**3. Install Parse Server**
  * open Node Commends Line from your terminal or node console From Windows
  * Navigate to  The Repository folder/parse-server
  * Run `npm install`
  * After installation completed run this

    `npm start -- --appId RTC_Blogger --masterKey Master71110 --serverURL http://localhost:1337/parse`
  
**4. Install Parse server Dashboard via npm**

>We will install parse server dashboard via npm rather than using the code provided from Repository

* Open Node Commends Line from your terminal or node console From Windows
* Navigate to  The Repository folder
* Run this  `npm install -g parse-dashboard`
* After installation completed run this commend from project root directory 
*`parse-dashboard --config config.json `
* Now you can navigate to Parse server dashboard and browse you Parse server app on http://localhost:4040

**5. Install Angular 4 dependences**
>We will use Angular Cli for our Angular 4 Project
* Navigate to Views Folder
* Run ` npm install`
* Run `npm start`
* If you want to use Angular cli  to start your Angular project 
   You must install it first `npm install @angular/cli` 
* Run `ng serve` 

**6. Install Slim and Parse server SDK Files**

> And now we will go back to our Main Course scope and install Slim dependencies in our API folder 
* Navigate to API folder 
* Install dependencies via composer `composer install `
* run your local server or the built-in php server using `php -S lcoalhost:8080` 
Now You get All Done LoL 
# Test the project 
   1. Navigate to http://localhost://public/AddUser using Advanced Rest Client extension or others  
   2. Pass the required parms in json format

     `{"User_Name":"YourName","Email":"Your Email","Password":"######","Phone":"YourPhone"}`
   3. Refresh your Parse server Dashboard  class to find  the New user data was created successfully 
   
##  Stuck in any Step?!  Ask in issues to make it helpful for all of others 
     
            
  
      
  
  
