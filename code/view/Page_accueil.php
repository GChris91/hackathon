<?php ob_start(); ?>
	<div id="page-content">
	    <div id="map"></div>
	</div>

	<!-- Menu -->
	<div id="top-icon"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>
    <nav>
        <ul>
            <li class>
                <i class="fa fa-cloud green" aria-hidden="true"></i>
            </li>
            <li>
                <i class="fa fa-free-code-camp red" aria-hidden="true"></i>
            </li>
            <li>
                <i class="fa fa-tint green" aria-hidden="true"></i>
            </li>
        </ul>
    </nav>
    

    <!-- /#page-content-wrapper -->

    <div class="more">
    	<a href="/Hackathon/index.php/detail_air">
	        <section>
	            <div class="info">
	                <h1><i class="fa fa-cloud green" aria-hidden="true"></i> Qualité de l'air</h1>
	                <span class="description">L'air est de bonne qualité</span>
	            </div>
	            <div class="legend">
	                <div class="level bg-red"></div><div class="level bg-orange"></div><div class="level bg-green"></div>
	            </div>
	        </section>
	    </a>
	    <a href="#">
	        <section>
	            <div class="info">
	                <h1><i class="fa fa-free-code-camp red" aria-hidden="true bg-yellow"></i> Risque d'incendie</h1>
	                <span class="description">Risque d'incendie élevé, faire un feu est interdit</span>
	            </div>
	            <div class="legend">
	                <div class="level bg-red"></div><div class="level bg-orange"></div><div class="level bg-yellow"></div><div class="level bg-green"></div>
	            </div>
	        </section>
        </a>
        <a href="#">
	        <section>
	            <div class="info">
	                <h1><i class="fa fa-tint green" aria-hidden="true"></i> Baignade</h1>
	                <span class="description">Baignade autorisée</span>
	            </div>
	            <div class="legend">
	                <div class="level bg-red"></div><div class="level bg-orange"></div><div class="level bg-yellow"></div><div class="level bg-green"></div>
	            </div>
	        </section>
        </a>
    </div>
<?php $contents = ob_get_clean(); ?>

<?php ob_start(); ?>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 15
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Vous êtes ici'); /* pos.lat+','+pos.lng */
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmWNGCwrowebt-qvmIr1wa64NsNGjd15Q&callback=initMap">
    </script>
<?php $scripts = ob_get_clean(); ?>