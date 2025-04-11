<?php
function connexion() {

// $pdo = null;
try {
     $pdo = new PDO("mysql:host=localhost;dbname=ges_prets_biblio", "root", "");

    //    $pdo = new PDO("mysql:host=$host;dbname=$dbname,$username,$password");
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
       return $pdo;
    } catch (PDOException $e) {
        echo "Connection échouée: " . $e->getMessage();
} 
}