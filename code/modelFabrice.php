<?php
	function open_database_connection(){
		$link =  mysqli_connect('localhost', 'root', '', 'glamgs'); 
        mysqli_set_charset($link,"utf8");
        return $link; 
	}

	function close_database_connection($link){ 
        mysqli_close($link); 
    }

	function get_last_water_quality($lieu){
		$link = open_database_connection();
		$query = 'SELECT *
		FROM (SELECT MAX(dateReleve) as dateReleve FROM qualiteeau_prelevement  WHERE qualiteeau_prelevement.idPointPrelevement = '.$lieu.' ) as dernieresDates, qualiteeau_prelevement
		WHERE dernieresDates.dateReleve = qualiteeau_prelevement.dateReleve AND qualiteeau_prelevement.idPointPrelevement = '.$lieu.'';
		$result = mysqli_query($link, $query ); 
		$prelevement = mysqli_fetch_assoc($result);
        mysqli_free_result($result);           
        close_database_connection($link); 
        return $prelevement;
	}

	function distancePointsGPS($latitude1,$longitude1,$latitude2,$longitude2){
		$lat1 = (string)$latitude1;
		$long1 = (string)$longitude1;
		$lat2 = (string)$latitude2;
		$long2 = (string)$longitude2;
		return bcmul(bcsqrt(bcadd(bcpow(bcsub($lat2, $lat1), '2'),bcpow(bcsub($long2, $long1), '2'))),'111195');
	}

	function qualification_baignade($lieu){   
		$prelevements = get_last_water_quality($lieu);
		if ($prelevements['esccoli42'] > 2000) {
			return 'red';
		}
		elseif ($prelevements['esccoli42'] > 1000 OR $prelevements['entfec43'] > 370) {
			return 'orange';
		}elseif ($prelevements['esccoli42'] > 100 OR $prelevements['entfec43'] > 100) {
			return 'yellow';
		}else{
			return 'green';
		}
	}

	function get_pt_prelevement_proche($maLatitude,$maLongitude){
		$link = open_database_connection();
		$query = 'SELECT idPointPrelevement,Latitude,Longitude FROM point_prelevement ORDER BY idPointPrelevement';
		$resultall = mysqli_query($link,$query);
		$row = mysqli_fetch_assoc($resultall);
		$idPlusProche = $row['idPointPrelevement'];
		$distPlusProche = distancePointsGPS($maLatitude,$maLongitude,$row['Latitude'],$row['Longitude']);
		while ($row = mysqli_fetch_assoc($resultall)) {
			$distStation =  distancePointsGPS($maLatitude,$maLongitude,$row['Latitude'],$row['Longitude']);
			if ($distPlusProche > $distStation) {
				$idPlusProche = $row['idPointPrelevement'];
				$distPlusProche = $distStation;
			}
		}
		return $idPlusProche;
	}
?>