<?php

    function accueil_action()
    {	
        $lieu = get_pt_prelevement_proche(-22.262884,166.404669);
        $baignade = qualification_baignade($lieu);
        require 'view/Page_accueil.php'; 
        require 'view/shared/_Layout.php'; 
    }

    function carte_vide_action()
    {	
        require 'view/Page_detail_vide.php';
        require 'view/shared/_Layout.php';    
    }

    function carte_feu_action()
    {	
        require 'view/Page_detail_feu.php';
        require 'view/shared/_Layout.php';   
    }

    function carte_eau_action()
    {	
        require 'view/Page_detail_eau.php';
        require 'view/shared/_Layout.php';

    }

    function carte_meteo_action()
    {	
        require 'view/Page_detail_meteo.php';
        require 'view/shared/_Layout.php';    
    }

    function carte_population_action()
    {	
        require 'view/Page_detail_population.php';
        require 'view/shared/_Layout.php';   
    }
	
	function carte_air_action()
    {	
        require 'view/Page_detail_air.php'; 
        require 'view/shared/_Layout.php';   
    }

    function erreur_404_action()
    {
        //require 'view/404.html';
    }


?>