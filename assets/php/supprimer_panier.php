<?php
session_start() ;
if (isset($_GET['id'])) {
    $id = $_GET['id'] ;
    unset($_SESSION['panier'][$id]) ;
    $num_panier=0 ;
    $_SESSION['nombres'] = 0;
foreach ($_SESSION['panier'] as $k => $v) {
        $_SESSION['nombres'] += $v["quantite"];
}
var_dump($_SESSION['nombres']) ;
    header("location:./panier.php?smspanier=$num_panier") ;
}
?>