<?php
   
  // require_once 'model.php'; 
   require_once 'modelFabrice.php';        
   require_once 'Controller.php';

//comment//
   session_start();

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

   if('/Hackathon/' == $uri)
   {
        $uri='/Hackathon/index';
        $uri = trim($uri.".php");
   }
   
     
    if('/Hackathon/index.php' == $uri)
    {
        accueil_action(); 

    }elseif ('/Hackathon/index.php/carte_vide' == $uri)
    {
        carte_vide_action();

    }elseif('/Hackathon/index.php/carte_feu' == $uri)
    {
        carte_feu_action();

    }elseif('/Hackathon/code/index.php/carte_eau' == $uri)
    {
        carte_eau_action();

    }elseif('/Hackathon/index.php/carte_meteo' == $uri)
    {
        carte_meteo_action();

    }elseif('/Hackathon/index.php/carte_population' == $uri)
    {
        carte_population_action();

    }elseif('/Hackathon/index.php/carte_air' == $uri)
    {
        carte_air_action();

    }else  
    {
        erreur_404_action();
    }
      
?>