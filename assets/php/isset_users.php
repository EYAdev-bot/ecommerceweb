<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
require("./connect_to_bd.php") ;
  $mail = $_POST["mail"] ;
  $passwd=$_POST["passwd"] ;
  $pass_hached = hash("sha256",$passwd) ;
  $yes=false;
    try {
        $yes = true ;
        $stmt = $conn->prepare("SELECT * FROM users WHERE emails=:mail , passwords=:passwd") ;
        $stmt ->bindParam('mail',$mail);
        $stmt->bindParam('passwd',$pass_hached) ;
        $stmt->execute() ;
    } catch (PDOException $e) {
        $sms ="mot de passe ou email invalide";
        header("location:sing_up.php?sms=$sms");
    }

    if ($yes) {
        $_SESSION["users"] = array() ;
        try {
            $stmt = $conn->prepare("SELECT * FROM users WHERE emails=:mail ");
            $stmt->bindParam('mail', $mail);
            $stmt->execute();
            foreach ($stmt->fetchAll() as $k => $v) {
                $_SESSION['users']["mail"] =[
                    "username"=>$v["surnames"]." ".$v["names"] ,
                    "roles"=>$v["roles"]
                ] ;
            }
            header("location:../../index.php") ;
        } catch (PDOException $e) {
            echo 'error' .$e->getMessage() ;
        }
    }
    echo$_SESSION["users"]["mail"]["roles"]
    ?>
    
</body>
</html>