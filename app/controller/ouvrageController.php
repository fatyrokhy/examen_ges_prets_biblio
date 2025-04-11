<?php
require_once("../app/model/modelOuvrage.php");
if (isset($_REQUEST["page"])) {
    $page = $_REQUEST["page"];
    if ($page == 'liste_ouvrage') {
    listeOuvrage();   
    }
    } else {
        listeOuvrage();   
    }   
    function listeOuvrage()  {
        ob_start();
        $ouvrage=selectOuvrages();
        require_once("../app/views/ouvrage/liste_ouvrage.php");
        $contenu= ob_get_clean();
        require_once("../app/views/layout/baselayout.php");
    } 