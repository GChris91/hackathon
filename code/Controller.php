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
        require 'view/Page_carte_feu.php';
        require 'view/shared/_Layout.php';   
    }

    function carte_eau_action()
    {	
        require 'view/Page_carte_eau.php';
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
        require 'view/Page_carte_air.php'; 
        require 'view/shared/_Layout.php';   
    }

    function erreur_404_action()
    {
        require 'view/404.html';
    }


?>