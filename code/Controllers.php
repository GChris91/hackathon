<?php

    function accueil_action()
    {	
        require 'view/Page_accueil.php'; 
        require 'view/shared/_Layout.php'; 
    }

    function carte_vide_action()
    {	
        require 'view/Page_carte_vide.php';
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
        require 'view/Page_carte_meteo.php';
        require 'view/shared/_Layout.php';    
    }

    function carte_population_action()
    {	
        require 'view/Page_carte_population.php';
        require 'view/shared/_Layout.php';   
    }
	
	function carte_air_action()
    {	
        require 'view/Page_detail_air.php'; 
        require 'view/shared/_Layout.php';   
    }

    function erreur_404_action()
    {
        require 'view/404.html';
    }

    function carte_action()
    {   
        require 'view/Page_carte.php'; 
        require 'view/shared/_Layout.php';   
    }


?>