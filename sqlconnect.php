<?php 

try {
    $dns ='mysql:host=localhost;dbname=wordskills2022';
    $uttilisateur ='root';
    $motDePasse ='';
    $connection = new PDO( $dns, $uttilisateur, $motDePasse );
    $connection->query("SET NAMES utf8") ;
}catch (BadFunctionCallException $e){
    echo "connection à MySQL inpossible : ", $e->getMessage();
    die();
}

?>