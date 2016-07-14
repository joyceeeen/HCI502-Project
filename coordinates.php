<?php
// $jsondata =file_get_contents("json/coordinates.geojson");
// $json = json_decode($jsondata,true);
//    $i=0;
//    $output='';
// 	foreach($json['features'] as $features){
//     $output .= $features['geometry']['coordinates'][0][0]."<br>";
//     $output .= $features['geometry']['coordinates'][0][1]."<br>";
//     $output .= $features['geometry']['coordinates'][0][2]."<br>";
//     $i++;
//   }
//   echo $output;
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      html, body, #map { margin: 0; padding: 0; height: 100%; }
    </style>
    <script>
      var map;

      function initialize() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: new google.maps.LatLng(14.8302664,121.1126421),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        // Create a <script> tag and set the USGS URL as the source.
        var script = document.createElement('script');
        // (In this example we use a locally stored copy instead.)
        script.src = 'json/coordinates.geojson';
        // script.src = '/maps/documentation/javascript/tutorials/js/earthquake_GeoJSONP.js';
        document.getElementsByTagName('head')[0].appendChild(script);
      }

      // Loop through the results array and place a marker for each
      // set of coordinates.
      window.eqfeed_callback = function(results) {
        for (var i = 0; i < results.features.length; i++) {
          var coords = results.features[i].geometry.coordinates[0];
          var latLng = new google.maps.LatLng(coords[1],coords[0]);
          var marker = new google.maps.Marker({
            icon:'http://maps.google.com/mapfiles/ms/micons/ylw-pushpin.png',
            position: latLng,
            map: map
          });
        }
      }
    </script>
  </head>
  <body>
    <div id="map"></div>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAolqrs1RmBOGIJIu4rIe4SJFA6CB1lI58&libraries=visualization&callback=initialize">
    </script>
  </body>
</html>
