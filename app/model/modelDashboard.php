<?php
function totalPrets()  {
    $pdo = connexion(); 
    $prop = $pdo->prepare("SELECT COUNT(*) AS total_prets FROM pret;");
    $prop->execute(); 
    return $prop->fetch(PDO::FETCH_ASSOC); 
}

function totalExemplaires()  {
    $pdo = connexion(); 
    $prop = $pdo->prepare("SELECT COUNT(*) AS total_livres FROM exemplaire;");
    $prop->execute();
    return $prop->fetch(PDO::FETCH_ASSOC); 
}
function totalPerdu()  {
    $pdo = connexion(); 
    $prop = $pdo->prepare("SELECT COUNT(*) AS total_perdu FROM exemplaire e WHERE e.statut='perdu'");
    $prop->execute();
    return $prop->fetch(PDO::FETCH_ASSOC); 
}
function demandePrets()  {
    $pdo = connexion(); 
    $prop = $pdo->prepare("SELECT * FROM `pret` p WHERE p.statut='traitement'");
    $prop->execute();
    return $prop->fetch(PDO::FETCH_ASSOC); 
}


function findClientByTel($pdo, $telephone) {
    $client = $pdo->prepare("SELECT * FROM clients WHERE tel =:telephone");
    $client->execute([
        'telephone' => $telephone]);
    return $client->fetch(PDO::FETCH_ASSOC); 
}
