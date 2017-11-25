<?php

    function accueil_action()
    {	
        require 'view/Page_accueil.php'; 
        require 'view/shared/_Layout.php'; 
    }

    function detail_feu_action()
    {	
        require 'view/Page_detail_feu.php';
        require 'view/shared/_Layout.php';   
    }

    function detail_eau_action()
    {	
        require 'view/Page_detail_eau.php';
        require 'view/shared/_Layout.php';    
    }

	function detail_air_action()
    {	
        require 'view/Page_detail_air.php'; 
        require 'view/shared/_Layout.php';   
    }

    function erreur_404_action()
    {
        require 'view/404.html';
    }


?>