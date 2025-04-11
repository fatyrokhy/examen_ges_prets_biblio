<?php
function userConnect($mail,$pass)  {
    $pdo = connexion(); 
    $user = $pdo->prepare("SELECT * FROM utilisateur u WHERE u.email=:mail AND u.mot_de_passe=:pass");
    $user->execute([':mail'=>$mail,
    ':pass'=>$pass]); 
    return $user->fetch(PDO::FETCH_ASSOC);
}

function isEmpty($name, &$errors)
{
    if (empty(trim($_POST[$name]))) {
        $errors[$name] = ucfirst($name) . " obligatoire*";
    }
}

function pagination($tab, $nbreElementParPage = 5, $p = 1)
{
    $nbreElementTab = count($tab);
    $nbrePage = ceil($nbreElementTab / $nbreElementParPage);
    $debut = ($p - 1) * $nbreElementParPage;
    if ($p < 1 || $p > $nbrePage) {
        return ['data' => [], 'nbrePage' => $nbrePage];
    }

    return [
        'data' => array_slice($tab, $debut, $nbreElementParPage),
        'nbrePage' => $nbrePage
    ];
}