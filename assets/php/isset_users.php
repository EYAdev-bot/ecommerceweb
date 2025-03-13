<?php
session_start()
?>
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
        ob_start();
        header("location:sing_up.php?sms=$sms");
        ob_end_flush() ;
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
            ob_start() ;
            header("location:../../index.php") ;
            ob_end_flush() ;
        } catch (PDOException $e) {
            echo 'error' .$e->getMessage() ;
        }
    }
    echo$_SESSION["users"]["mail"]["roles"]
    ?>
    
