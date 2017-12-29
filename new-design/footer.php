<footer>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="logo">
                    <img src="assets/img/logo-white.png" alt="logo"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <button class="btn btn-primary">Contact our Customer Productivity Team</button>
            </div>
            <div class="col-md-4">
                <button class="btn btn-primary">Download A PDF fo this website</button>
            </div>
            <div class="col-md-4">
                <button class="btn btn-primary">Download Sample Menu</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="social">
                    <div class="social-item">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </div>
                    <div class="social-item">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </div>
                    <div class="social-item">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copy-rights">
                    © 2017 Mumm · All Rights Reserved
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker();
        $('#myCarousel').carousel({
            interval: 4000
        })
        $('.carousel .item').each(function () {
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
            if (next.next().length > 0) {
                next.next().children(':first-child').clone().appendTo($(this));
            } else {
                $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
            }
        });
        function initialize() {

    var markers = [];
    var map = new google.maps.Map(document.getElementById('map-canvas'), {
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var defaultBounds = new google.maps.LatLngBounds(
        new google.maps.LatLng(-33.8902, 151.1759),
        new google.maps.LatLng(-33.8474, 151.2631));
    map.fitBounds(defaultBounds);

    // Create the search box and link it to the UI element.
    var input = /** @type {HTMLInputElement} */(
        document.getElementById('pac-input'));
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    var searchBox = new google.maps.places.SearchBox(
      /** @type {HTMLInputElement} */(input));

    // [START region_getplaces]
    // Listen for the event fired when the user selects an item from the
    // pick list. Retrieve the matching places for that item.
    google.maps.event.addListener(searchBox, 'places_changed', function() {
      var places = searchBox.getPlaces();

      if (places.length == 0) {
        return;
      }
      for (var i = 0, marker; marker = markers[i]; i++) {
        marker.setMap(null);
      }

      // For each place, get the icon, place name, and location.
      markers = [];
      var bounds = new google.maps.LatLngBounds();
      for (var i = 0, place; place = places[i]; i++) {
        var image = {
          url: place.icon,
          size: new google.maps.Size(71, 71),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(17, 34),
          scaledSize: new google.maps.Size(25, 25)
        };

        // Create a marker for each place.
        var marker = new google.maps.Marker({
          map: map,
          icon: image,
          title: place.name,
          position: place.geometry.location
        });

        markers.push(marker);

        bounds.extend(place.geometry.location);
      }

      map.fitBounds(bounds);
    });
    // [END region_getplaces]

    // Bias the SearchBox results towards places that are within the bounds of the
    // current map's viewport.
    google.maps.event.addListener(map, 'bounds_changed', function() {
      var bounds = map.getBounds();
      searchBox.setBounds(bounds);
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);

    });
</script>
</body>
</html>
