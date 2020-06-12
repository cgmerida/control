<script>
    // Note: This example requires that you consent to location sharing when
    // prompted by your browser. If you see the error "The Geolocation service
    // failed.", it means you probably did not give permission for the browser to
    // locate you.

    let lat = parseFloat(document.getElementsByName('lat')[0].value);
    let lon = parseFloat(document.getElementsByName('lon')[0].value);

    var map, marker, center, message;
    var openedInfoWindow = null;

    function initMap() {

        marker = new google.maps.Marker;
        let infoWindow = new google.maps.InfoWindow;
        
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 14.6489571, lng: -90.4802813},
            zoom: 17,
        });
        
        if(lat && lon) {
            center = {lat: lat, lng: lon};
            message = '<h4>Ya hay una posición registrada</h4><br><h5>Verifica la ubicación</h5>';
        } else {
            center = {lat: 14.6489571, lng: -90.4802813};
            message = '<h4>No hay una posición registrada<h4><br><h5>Para registrar una posición presiona en "Marcar Ubicación Actual"</h5>';
        }

        marker.setPosition(center);
        marker.setTitle(message);

        if (openedInfoWindow != null) openedInfoWindow.close();
        
        infoWindow.setContent(message);
        infoWindow.open(map, marker);

        openedInfoWindow = infoWindow;
        google.maps.event.addListener(infoWindow, 'closeclick', function() {
            openedInfoWindow = null;
        });
        
        // To add the marker to the map, call setMap();
        marker.setMap(map);
        map.panTo( center );
    }

    function buscarPosicion() {
        document.querySelector('#btn-map').textContent = 'Cargando...';

        setTimeout(() => {
            document.querySelector('#btn-map').textContent = 'Guardar Ubicación Actual';
        }, 2000)
        

        var infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                message = '<h4>Se registro la ubicación actual</h4>';

                marker.setPosition(pos);
                marker.setTitle(message);

                if (openedInfoWindow != null) {
                    openedInfoWindow.close();
                }
                
                infoWindow.setContent(message);
                infoWindow.open(map, marker);

                openedInfoWindow = infoWindow;
                google.maps.event.addListener(infoWindow, 'closeclick', function() {
                    openedInfoWindow = null;
                });
        
                map.panTo( pos );

                document.getElementsByName('lat')[0].value = pos.lat;
                document.getElementsByName('lon')[0].value = pos.lng;

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
                                'Error: El servicio de Geolización Fallo.' :
                                'Error: Tu navegador no esta actualizado y no puede obtener la ubicación.');
        infoWindow.open(map);
        map.panTo( pos );
    }
  </script>

  <script async
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCH5jx8cbDO-sfqwcYUO8l-_qk-cfJ8jg&callback=initMap">
  </script>
