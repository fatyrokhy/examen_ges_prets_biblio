<?php
require_once("../app/model/modelDashboard.php");
if (isset($_REQUEST["page"])) {
    $page = $_REQUEST["page"];
    if ($page == 'dashboard') {
    dashboard();  
    }
    } else {
        dashboard();   
    }   
    function dashboard()  {
        ob_start();
        $totalpret=totalPrets();
        $totallivres=totalExemplaires();
        $perdu=totalPerdu();
        require_once("../app/views/dashboard/dashboard.php");
        $contenu= ob_get_clean();
        require_once("../app/views/layout/baselayout.php");
    } 