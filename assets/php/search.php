<?php
$keyproduct = $_GET["keyproduct"];

include_once "./connect_to_bd.php";
try {
    $stmt = $conn->prepare("SELECT * FROM produits WHERE descriptions LIKE :keyproduct") ;
    $stmt->execute(array(":keyproduct"=>'%'.$keyproduct.'%'));
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC) ;

    echo json_encode($res);
} catch (PDOException $e) {
  echo "error".$e->getMessage();
}
?>