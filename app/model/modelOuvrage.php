<?php
function selectOuvrages()  {
    $pdo = connexion(); 
    $ouvrage = $pdo->prepare(
    "SELECT o.id_ouvrage, o.code, o.titre, o.date_edition, o.image,o.statut , r.nom FROM ouvrage o
    JOIN rayon r ON r.id_rayon=o.id_rayon");
    $ouvrage->execute();
    return $ouvrage->fetchAll(PDO::FETCH_ASSOC); 
}
function findClientByTel($pdo, $telephone) {
    $client = $pdo->prepare("SELECT * FROM clients WHERE tel =:telephone");
    $client->execute([
        'telephone' => $telephone]);
    return $client->fetch(PDO::FETCH_ASSOC); 
}
function selectOuvrageDisponible($statut)  {
    $pdo = connexion(); 
    $ouvrage = $pdo->prepare(
    "SELECT o.* , r.nom FROM ouvrage o
    JOIN rayon r ON r.id_rayon=o.id_rayon WHERE o.statut=':statut'");
    $ouvrage->execute([':statut'=>$statut]);
    return $ouvrage->fetchAll(PDO::FETCH_ASSOC); 
}