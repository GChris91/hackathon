<?php
   
   //require_once 'Model.php';     
   require_once 'Controller.php';


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

    }elseif('/Hackathon/index.php/detail_feu' == $uri)
    {
        detail_feu_action();

    }elseif('/Hackathon/index.php/detail_eau' == $uri)
    {
        detail_eau_action();

    }elseif('/Hackathon/index.php/detail_air' == $uri)
    {
        detail_air_action();

    }else  
    {
        erreur_404_action();
    }
      
?>