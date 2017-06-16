<?php

$app->post('/RTC_Blogger/SignUp',function ($req,$res){




$Name= $req->getParsedBodyParam("Name");

$Password=$req->getParsedBodyParam("Password");
$Phone=$req->getParsedBodyParam("Phone");
$Email=$req->getParsedBodyParam("Email");
$date=$req->getParsedBodyParam("date-of-birth");
//get Data from user 

$files=$req->getUploadedFiles();
$newimage=$files['photo'];

$this->logger->info($Name." ".$Password." ".$Phone." ".$Email." ".$date);

/*

if ($newimage->getError() === UPLOAD_ERR_OK) {

$this->logger->info("image");

    $uploadFileName = $newimage->getClientFilename();
           $type=$newimage->getClientMediaType();
            $name = uniqid('img-'.date('Ymd').'-');
            $name.= $newimage->getClientFilename();
            $imgs[] = array('url' => '/Photos/' . $name);
           
   //local server 
   $whitelist = array('127.0.0.1','::1');

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
 $newimage->moveTo("/home/ramy/RTC-Course-Final-Project/API/public/Photos/$name");
        }
else{

 $newimage->moveTo("/home/ramy/RTC-Course-Final-Project/API/public/Photos/$name");

}
   
//localdev
      $photoURL="http://localhost:8080/public/Photos/$name";
   
  //return $res->withJson($photoURL,200);


}
*/
try {




$AddUser= new $this->ParseObject("Blogger_Users");
$AddUser->set('User_Name',$Name);
$AddUser->set('Password',$Password);
$AddUser->set('Date_of_Birth',$date);
$AddUser->set('Phone',$Phone);
$AddUser->set('Email',$Email);
//$AddUser->set('Avatar',$photoURL);
$AddUser->save();


return $res->withJson($AddUser->getObjectId(),200);

}
catch(ParseExection $e ){

return $res->withJson(" الدنيا اتعكت ",200);



}

});