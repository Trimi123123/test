<?php


$host = "localhost";
$user = "root";
$psw = "";
$dbname = "trimis database";


try {
    $conn = new PDO ("mysql:host=$host; dbname =$dbname" , $user , $psw);

    echo "Connected";
}catch(Exeption $e){

    echo"not connected";
}









?>