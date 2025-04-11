<?php
require_once("../app/model/modelUtilisateur.php");
if (isset($_REQUEST["page"])) {
    $page = $_REQUEST["page"];
    if ($page == 'connexion') {
        login();
    }
} else {
    login();
}

function login()
{
    ob_start();
    $errors = [];
    if (isset($_POST["add"])) {
        isEmpty('email', $errors);
        isEmpty('pass', $errors);
        $utilisateur = userConnect($_POST["email"], $_POST["pass"]);
        if ($utilisateur) {
            if ($utilisateur['role'] === "RB") {
                $_SESSION['user'] = $utilisateur;
                header('Location: ' . PAGE . 'controller=dashboardController&page=dashboard');
            } else {
                echo "Vous n'avez pas le rôle requis pour accéder à cette page.";
            }
        } else {
            $errors['global'] = "Email ou mot de passe incorrect.";
        }
    }

    require_once("../app/views/authentification/connexion.php");
    $contenu = ob_get_clean();
    require_once("../app/views/layout/securitylayout.php");
}
