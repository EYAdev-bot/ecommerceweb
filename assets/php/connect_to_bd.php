<?php
$servername = "mysql-yann-dev.alwaysdata.net" ;
$dbname = "yann-dev_ecommerce1";
$username = "yann-dev" ;
$password = "eya-dev";
try {
    $conn =new PDO("mysql:host=$servername;dbname=$dbname",$username,$password) ;
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION) ;
    //  echo"connection succeful" ;
} catch (PDOException $e) {
    echo"erroe".$e->getMessage() ;
}
?>