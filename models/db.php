<?php
$servername="localhost";
$username="root";
$password="";
global $conn;   
try{
    $conn= new PDO("mysql:host=$servername;dbname=dam",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "faile".$e->getMessage();
}


?>

