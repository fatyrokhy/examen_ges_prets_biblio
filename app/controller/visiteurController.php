<?php
require_once("../app/model/modelOuvrage.php");
require_once("../app/model/modelUtilisateur.php");
require_once("../app/model/modelRayon.php");
if (isset($_REQUEST["page"])) {
    $page = $_REQUEST["page"];
    if ($page == 'catalogue') {
        catalogue();   
    }
    } else {
        catalogue();   
    }   
    function catalogue()  {
        ob_start();
        $rayon=rayon();
        $dispo=selectOuvrageDisponible("disponible");
        require_once("../app/views/visiteur/catalogue.php");
        $contenu= ob_get_clean();
        require_once("../app/views/layout/securitylayout.php");
    } 