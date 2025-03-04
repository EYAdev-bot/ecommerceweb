<?php
$servername = "127.0.0.1" ;
$dbname = "ecommerce";
$username = "root" ;
$password = "";
try {
    $conn =new PDO("mysql:host=$servername;dbname=$dbname",$username,$password) ;
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION) ;
    //  echo"connection succeful" ;
} catch (PDOException $e) {
    echo"erroe".$e->getMessage() ;
}
?>