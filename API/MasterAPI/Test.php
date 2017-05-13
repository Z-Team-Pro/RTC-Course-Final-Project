<?php

$app->post('/AddUser',function ($req,$res){

$data= $req->getParsedBody();


// create new object Users



$adduser = new $this->ParseObject("Blogger_Users");

$adduser->set("User_Name",$data["User_Name"]);
$adduser->set("Password",$data["Password"]);
$adduser->set("Email",$data["Email"]);
$adduser->set("Phone",$data["Phone"]);
$adduser->save();
$message=array("objectid"=>$adduser->getObjectId(),"message"=>"user Added");
return $res->withJson($message,200);
});