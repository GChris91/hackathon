<?php ob_start(); ?>
  <div id="scroll-spy"></div>

	<div id="container">
	    <div id="map"></div>
      <a href="/Hackathon/code"><i class="fa fa-bullseye locate-icon" aria-hidden="true"></i></a>
	</div>
 <div class="meteo"></div>
	<!-- Menu -->
	<a class="js-scrollTo" href="#more">
    <div id="top-icon" onclick="clickScroll();"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>
  </a>
  <a class="js-scrollTo" href="#more">
    <nav>
        <ul>
            <li>
                <img src="/Hackathon/code/img/wind_green_small.png" class="green"><!-- <i class="fa fa-cloud green" aria-hidden="true"></i> -->
            </li>
            <li>
                <img src="/Hackathon/code/img/fire_red.png" class="red">
            </li>
            <li>
                <img src="/Hackathon/code/img/swim_yellow.png" class="yellow">
            </li>
        </ul>
    </nav>
  </a>

  <!-- /#page-content-wrapper -->
  <div id="more">
  	<a href="/Hackathon/code/index.php/detail_air">
        <section>
            <div class="info">
                <h1><img src="/Hackathon/code/img/wind_green_small.png" class="green"> Qualité de l'air</h1>
                <span class="description">L'air est de bonne qualité</span>
            </div>
            <div class="legend">
                <div class="level bg-red"></div><div class="level bg-orange"></div><div class="level bg-green"></div>
            </div>
        </section>
    </a>
    <a href="/Hackathon/code/index.php/detail_feu">
        <section>
            <div class="info">
                <h1><img src="/Hackathon/code/img/fire_red.png" class="red"> Risque d'incendie</h1>
                <span class="description">Risque d'incendie élevé, faire un feu est interdit</span>
            </div>
            <div class="legend">
                <div class="level bg-red"></div><div class="level bg-orange"></div><div class="level bg-yellow"></div><div class="level bg-green"></div>
            </div>
        </section>
      </a>
      <a href="/Hackathon/code/index.php/detail_eau">
        <section>
            <div class="info">
                <h1><img src="/Hackathon/code/img/swim_yellow.png" id="no-border" class="yellow"> Baignade</h1>
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
      // Note: This example requires that you consent to location sharing when 9999999
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          fullscreenControl: false,
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

    <script>
      $(document).ready(function() {
        $('.js-scrollTo').on('click', function() { // Au clic sur un élément
          var page = $(this).attr('href'); // Page cible
          var speed = 600; // Durée de l'animation (en ms)
          $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
          return false;
        });
      });
    </script>
<?php $scripts = ob_get_clean(); ?>