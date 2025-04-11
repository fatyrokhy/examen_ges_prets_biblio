<?php
function rayon() {
    $pdo=connexion();
    $rayon = $pdo->prepare("SELECT nom FROM `rayon`");
    $rayon->execute();
    return $rayon->fetch(PDO::FETCH_ASSOC); 
}
