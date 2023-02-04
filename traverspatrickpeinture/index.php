<?php


include('route.php');

include('api.php');

header('Access-Control-Allow-Origin: *');
$user="sxjrupjd_admin";
$mdp="Charlely2003";
$host="localhost";
$base="sxjrupjd_patrickbdd";

$api=new API_Foyer($user,$mdp,$host,$base);


// ensemble des methodes GET


Route::add('/',function(){
    echo "welcome ";
},'get');

 Route::add('/sendEmail',function(){
    global $api;
    echo $api->sendEmail();

 },'post');

Route::pathNotFound(function(){
    echo "Ce chemin n'existe pas";
});

Route::methodNotAllowed(function() {
    echo "Cette méthode n'existe pas";
});

Route::run('/traverspatrickpeinture/index.php');
