<?php

$app->post('/addpost',function ($req,$res){


$data= $req->getParsedBody();
$Name= $req->getParsedBodyParam("Name");
echo $Name;
echo $datap['title'];


















});