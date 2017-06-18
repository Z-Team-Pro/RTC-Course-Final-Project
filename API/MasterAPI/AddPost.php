<?php

$app->post('/RTC_Blogger/AddPost',function ($req,$res,$args){

$data= $req->getParsedBody();




$Post_Title = $data["Title"];
$Body = $data["Body"];
$id=$data["id"];
//$Likes = intval($data["Likes"]);
var_dump($data);
$files=$req->getUploadedFiles();
//$newimage=$files['Photo'];

/*
if ($newimage->getError() === UPLOAD_ERR_OK) {
    $uploadFileName = $newimage->getClientFilename();
           $type=$newimage->getClientMediaType();
            $name = uniqid('img-'.date('Ymd').'-');
            $name.= $newimage->getClientFilename();
            $imgs[] = array('url' => '/Photos/' . $name);
           
   //local server 
   $whitelist = array('127.0.0.1','::1');

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
 $newimage->moveTo("/home/islamelbadawy/RTC-Course-Final-Project/API/public/Photos/$name");
        }
else{

 $newimage->moveTo("/home/islamelbadawy/RTC-Course-Final-Project/API/public/Photos/$name");

}
   
//localdev
      $PhotoURL="http://localhost:8080/API/public/Photos/$name";
   
  //return $res->withJson($photoURL,200);


}
*/

// create new object Posts

try{






   $addpost = new $this->ParseObject("Posts");

   $addpost->set("Title",$Post_Title);
   $addpost->set("Body",$Body);
   $addpost->set("User",$User);
   
   // $addpost->set("Photo",$PhotoURL);
 //   $addpost->set("Likes",$Likes);
    $addpost->save();
    $message=array("objectid"=>$addpost->getObjectId(),"message"=>"Post Added");
    return $res->withJson($message,200);
     }


catch(parseException $e){
    return $res->withJson(" Error",200);
}

});


