<?php
session_start() ;

include_once "./connect_to_bd.php" ;
 
if (!isset($_SESSION["panier"])) {
    $_SESSION["panier"] = array() ;
}

if (isset($_GET["id"])) {
    $id=$_GET["id"] ;
    try {
        $stmt = $conn->prepare("SELECT * FROM produits WHERE id=:id") ;
        $stmt->bindParam(":id",$id) ;
        $stmt->execute() ;
        $quant_panier =0;


        foreach ($stmt->fetchAll() as $k => $v) {
            $quan=$v["quantites"] ;
            if (isset($_SESSION['panier'][$id])) {
                $_SESSION['panier'][$id]["quantite"] += 1;
            } else {
                $quatite = 1;
                $_SESSION["panier"][$id] = [
                    "nom" => $v["descriptions"],
                    "photo" => $v["pictures"],
                    "prix" => $v["prix"],
                    "quantite" => $quatite
                ];
            }
            
     }
        $_SESSION['nombres']=0 ;
 foreach ($_SESSION['panier'] as $k => $v) {
    $_SESSION['nombres'] += $v["quantite"];
 }
var_dump($_SESSION['nombres']) ;
        
        echo$quant_panier ;

        var_dump($_SESSION["panier"]) ;
        header("location: ../../index.php?smspanier=$quant_panier") ;
    } catch (PDOException $e) {
        echo "error" . $e->getMessage() ;
    }
}
?>