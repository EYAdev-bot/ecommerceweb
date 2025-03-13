<?php
session_start() ;
require('./connect_to_bd.php') ;
$stmt = $conn->prepare("SELECT * FROM users") ;
$stmt->execute() ;
@$nom = $_POST["nom"];
@$prenom = $_POST["prenom"];
@$mail = $_POST["mail"];
@$phone = $_POST["phone"];
@$user_pass = $_POST["password"];
@$pass_hashed = hash("sha256",$user_pass) ;

foreach ($stmt->fetchAll() as $k => $v) {
    if ($v["emails"]==$mail || $v["phone_num"]==$phone) {
        $sms="compte existant avec cette email ou ce numero de telephone" ;
        header("location:./login.php?sms=$sms") ;
        die ;
    }
}
try {
    $yes = true ;
    $stmt = $conn->prepare("INSERT INTO users (names,surnames,emails,phone_num,passwords) VALUES(:nom,:prenom,:mail,:phone,:mot_passe)") ;
    $stmt->bindParam(":nom",$nom) ;
    $stmt->bindParam(":prenom",$prenom) ;
    $stmt->bindParam(":mail",$mail) ;
    $stmt->bindParam(":phone",$phone) ;
    $stmt->bindParam(":mot_passe",$pass_hashed) ;
    $stmt->execute() ;
} catch (PDOException $e) {
    echo"error". $e->getMessage() ;
}

if($yes){
    $_SESSION["users"] = array();
    try {
        $stmt = $conn->prepare("SELECT * FROM users WHERE emails=:mail ");
        $stmt->bindParam('mail', $mail);
        $stmt->execute();
        foreach ($stmt->fetchAll() as $k => $v) {
            $_SESSION['users']["mail"] = [
                "username" => $v["surnames"] . " " . $v["names"],
                "roles" => $v["roles"]
            ];
        }
         header("location:../../index.php");
    } catch (PDOException $e) {
        echo 'error' . $e->getMessage();
    }
}
var_dump($_SESSION['users']) ;

?>