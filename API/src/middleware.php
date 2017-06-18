<?php

//use \Firebase\JWT\JWT;
//use \Slim\Middleware\HttpBasicAuthentication\AuthenticatorInterface;

//require '../vendor/autoload.php';


$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
});







/*










$app = new \Slim\App;

class RandomAuthenticator implements AuthenticatorInterface {
   public function __invoke(array $arguments) {
    //  return (bool)rand(0,1);
   
    
     $Password=$arguments['password'];
        $Phone=$arguments['user'];
if(($Password=="71110") &&($Phone=="0123") ){
return true;
}  
else{

    return false ;

    }
    
}}










$app->add(new \Slim\Middleware\HttpBasicAuthentication([
    "path" => "/api/token,/api/test",
     "realm" => "Protected",
    "authenticator" => new RandomAuthenticator()

]));


$app->post("/api/token", function ($request, $response, $arguments) {

    $now = new DateTime();
    $future = new DateTime("now +20 minutes");
    $server = $request->getServerParams();

    $payload = [
        "iat" => $now->getTimeStamp(),
        "exp" => $future->getTimeStamp(),
        "sub" => $server["PHP_AUTH_USER"],
    ];
    $secret = "supersecretkeyyoushouldnotcommittogithub";
    $token = JWT::encode($payload, $secret, "HS512");
    $data["status"] = "ok";
    $data["token"] = $token;

    return $response->withStatus(201)
        ->withHeader("Content-Type", "application/json")
        ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
});

$app->add(new \Slim\Middleware\JwtAuthentication([
	 "path" => ["/"],
    "passthrough" => ["/RTC_Blogger/Login","RTC_Blogger/SignUp"],
    "secret" => "supersecretkeyyoushouldnotcommittogithub",
    "error" => function ($request, $response, $arguments) {
        $data["status"] = "error";
        $data["message"] = $arguments["message"];
        return $response
            ->withHeader("Content-Type", "application/json")
            ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
    }
]));

*/