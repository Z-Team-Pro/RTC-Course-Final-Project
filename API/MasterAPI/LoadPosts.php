<?php

$app->get('/RTC_Blogger/Load_Posts/[{User_ID}]',function ($req,$res,$args){

if(isset($args["User_ID"])){




//get user object 



$getuser=new $this-ParseQuery("Blogger_User");
$User=$getuser->get($id);







    $query = new $this->ParseQuery("Posts");
    $query->equalTo("User",$User);
    $query->equalTo("objectId",$args["User_ID"]);
    $query->descending("createdAt");
$query->limit(10);
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
    $query->includeKey("User");
    $results = $query->find();
//var_dump($results);

    // var_dump($results);
    $message=[];
    for( $i=0; $i < count($results) ;$i++){





 $query = new $this->ParseQuery("Comments");
    $query->includeKey("User");
    $query->equalTo('Post',$results[$i]);
    $comments = $query->find();
$list=array();
 for($j=0;$j<count($comments);$j++){

$commet=array('UserName'=>$comments[$j]->get("User")->get("User_Name"),
'User_Photo'=>$comments[$j]->get("User")->get("Avatar"),
'Text'=>$comments[$i]->get("Body"),
"Time"=>$comments[$i]->getCreatedAt()
);

$list[$j]=$commet;


 }



 
    $d=array('objectid'=>$results[$i]->getObjectId(),"Title"=>$results[$i]->get("Title"),
    'Body'=>$results[$i]->get("Body"),"Phone"=>$results[$i]->get("photo"),"User"=>$results[$i]->get("User")->get("User_Name")
,"User_Photo" =>$results[$i]->get("User")->get("Avatar"),"Time"=> $results[$i]->getCreatedAt() ,"comment"=>$list  );
  
    $message[$i]=$d;
    }



  return $res->withJson($message , 200);
}





});







?>

