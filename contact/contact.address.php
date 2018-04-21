<section id="home-selected-cart-section">
    <div class="container-fluid">
        <div class="main-logo-container">
            <h3><i class="fas fa-plus"></i>Self Pick Up Address</h3>
        </div>
        
        <div class="row">
            <div class="col-md-6">
            <style>
                /* Always set the map height explicitly to define the size of the div
                                                * element that contains the map. */

                #map {
                    height: 400px;
                    width: 100%;
                }
            </style>
            <div id="map" data-lat="22.304917" data-lng="114.179723"></div>
            <script>
                function initMap() {
                    var map_container = document.getElementById('map');
                    var latitiude = parseFloat(map_container.getAttribute('data-lat'));
                    var longitude = parseFloat(map_container.getAttribute('data-lng'));

                    var myLatLng = {
                        lat: latitiude,
                        lng: longitude
                    };

                    var map = new google.maps.Map(map_container, {
                        zoom: 18,
                        center: myLatLng
                    });

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map
                    });
                }
            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBft4LbSyXY6XdsakgfEiFzZzeF8wFcLJQ&callback=initMap">
            </script>
            </div>
            <div class="col-md-6">
                <h4>11 Yuk Choi Rd, Hung Hom</h4>
                <p>+852 - 3123 4567</p>
            </div>
        </div>
    </div>
</section>