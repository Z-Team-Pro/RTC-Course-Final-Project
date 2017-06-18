<?php


$app->get('/BloggerLogin/{username}/{password}',function($req,$res,$args){



$user=$args['username'];
$pass=$args['password'];


//call parse server 



$query=new $this->ParseQuery("Blogger_Users");
$query->equalTo("User_Name",$user);
$query->equalTo("Password",$pass);
$Profile=$query->find();
//var_dump($Profile);
if(is_null($Profile[0])){


return $res->withJson("user not found",404);

}
else {


$User=array("Name"=>$Profile[0]->get('User_Name'),"Photo"=>$Profile[0]->get('Avatar'),"Phone"=>$Profile[0]->get('Phone'));


$data=[];
$data["Profile"]=$User;

$now = new DateTime();
    $future = new DateTime("now +20 minutes");
//    $server = $request->getServerParams();

    $payload = [
        "iat" => $now->getTimeStamp(),
        "exp" => $future->getTimeStamp(),
        "sub" =>"Use Thsi",
    ];
    $secret = "supersecretkeyyoushouldnotcommittogithub";
    $token = $this->JWT::encode($payload, $secret, "HS512");
    $data["status"] = "ok";
    $data["token"] = $token;
    return $res->withStatus(201)
        ->withHeader("Content-Type", "application/json")
        ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));


















//return $res->withJson("User Found",200);



}





});