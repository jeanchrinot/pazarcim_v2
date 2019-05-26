<?php

if(isset($_SESSION['id']) AND !empty($_SESSION['id'])){
    $session_id = $_SESSION['id'];
}
else if(isset($_COOKIE['id']) AND !empty($_COOKIE['id'])){
    $session_id = $_COOKIE['id'];
}

if(isset($_SESSION['admin']) AND $_SESSION['admin']==1){
    $session_admin = 1;
}
else if(isset($_COOKIE['admin']) AND $_COOKIE['admin']==1){
    $session_admin= 1;
}

$connect=new PDO("mysql:host=localhost;dbname=pazarcimdb;charset=utf8","root","root!123");
$connect->exec("SET NAMES utf8");
$connect->exec("SET CHARACTER SET utf8");
$connect->exec("SET COLLATION_CONNECTION='utf8_general_ci'");

function getRealIpAddr()
{
    /*if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {*/

      $ip=$_SERVER['REMOTE_ADDR'];

    return $ip;
}

function checkUser(){
    global $connect;
    if(isset($session_id)){
         $checkUserId=$connect->prepare("SELECT * FROM user_info WHERE id=?");
        $checkUserId->execute(array($customer_id));
        if($checkUserId->rowCount()==1){
            return $checkUser;
        }
        else{
            return "nouser";
        }
    }
    else{
        return "nouser";
    }
}

?>
