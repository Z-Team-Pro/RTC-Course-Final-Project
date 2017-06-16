<?php

$app->get('/RTC_Blogger/Load_Posts/[{User_ID}]',function ($req,$res,$args){

if(isset($args["User_ID"])){
    $query = new $this->ParseQuery("Posts");
    $query->equalTo("objectId",$args["User_ID"]);
    $results = $query->find();
    // var_dump($results);
    $message=[];
    for( $i=0; $i < count($results) ;$i++){
 
    $d=array('objectid'=>$results[$i]->getObjectId());
    
    $message[$i]=$d;
    }



  return $res->withJson($message , 200);





    
}
else {
    $query = new $this->ParseQuery("Posts");
    $results = $query->find();
    // var_dump($results);
    $message=[];
    for( $i=0; $i < count($results) ;$i++){
 
    $d=array('objectid'=>$results[$i]->getObjectId());
    
    $message[$i]=$d;
    }



  return $res->withJson($message , 200);
}





});







?>

