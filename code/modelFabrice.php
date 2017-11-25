<?php
	function open_database_connection(){
		$link =  mysqli_connect('localhost', 'root', '', 'projet'); 
        mysqli_set_charset($link,"utf8");
        return $link; 
	}

	function close_database_connection($link){ 
        mysqli_close($link); 
    }

	function get_last_water_quality($lieu){
		$link = open_database_connection();
		$query = 'SELECT *
		FROM (SELECT MAX(Date) as Date, qualite.idPtPrelevement FROM qualite,ptprelevement,lieu  WHERE qualite.idPtPrelevement = ptprelevement.idPtPrelevement AND ptprelevement.idLieu = lieu.idLieu AND lieu.NomLieu = "'+$lieu+'" ) as dernieresDates, qualite
		WHERE dernieresDates.Date = qualite.Date and qualite.idPtPrelevement = dernieresDates.idPtPrelevement';
		$result = mysqli_query($link, $query ); 
		$prelevement = mysqli_fetch_assoc($result);
        mysqli_free_result($result);           
        close_database_connection($link); 
        return $prelevement;
	}
	function qualification_baignade($lieu){   
		$prelevements = get_last_water_quality();
		if ($prelevements.EscherichiaColi > 2000) {
			return 4;
		}
		elseif ($prelevements.EscherichiaColi > 1000 OR $prelevements.EnterocoquesIntestinaux > 370) {
			return 3;
		}elseif ($prelevements.EscherichiaColi > 100 OR $prelevements.EnterocoquesIntestinaux > 100) {
			return 2;
		}else{
			return 1;
		}
	}
?>