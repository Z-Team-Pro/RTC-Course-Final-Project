<?php

//Dependencies settings of full app Slim and Parse 

//Parse server app variabels 

   $app_id='RTC_BLogger'; // The ID of the the parse app
   $master_key='MASTER71110';  //The Master Key of the app
   $Server_URL='http://localhost:1337'; //Server URL of the parse Server

//Remote pasre server Configration




//Logging for local and deploy server 
//If you will use git repo on local and Deployement server 


  $whitelist = array('127.0.0.1','::1');

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
 $log=__DIR__ . '/../logs/Server_Log.log';
        }
else{

 $log=__DIR__ . '/../logs/app.log';

}







return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'Your Log API ',
            'path' => $log,
            'level' => \Monolog\Logger::DEBUG,
        ],
 // ParseClient settings
 
'ParseClient'=> [
'init'=>\Parse\ParseClient::initialize($app_id,null,$master_key),
 'URL'=>\Parse\ParseClient::setServerURL("http://localhost:1337",'parse'),
],

    ],
];
