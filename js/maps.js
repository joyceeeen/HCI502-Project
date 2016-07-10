var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 9,
  center: new google.maps.LatLng(14.8302664,121.1126421),
  mapTypeId: google.maps.MapTypeId.ROADMAP
});
  var locations = [
    ['<b>Doña Remedios Trinidad, Bulacan <br> Population: 22,663</b>', 15.0929081,121.0613609],
    ['<b>Norzagaray, Bulacan <br> Population: 111,348</b>', 14.8740942,121.1427638],
    ['<b>San Jose del Monte City, Bulacan <br> Population: 574,089</b>', 14.8236989,121.0948389],
    ['<b>Rodriguez, Rizal <br> Population: 369,222</b>', 14.760122,121.2003971],
    ['<b>San Mateo, Rizal <br> Population: 252,527</b>', 14.6774533,121.1591888],
    ['<b>Quezon City, Metro Manila <br> Population: 2,936,116</b>', 14.6750431,121.0402429],
    ['<b>Marikina City, Metro Manila <br> Population: 450,741</b>', 14.6504042,121.1019699],
    ['<b>Pasig City, Metro Manila <br> Population: 755,300</b>', 14.5772737,121.0857342],
    ['<b>Makati City, Metro Manila <br> Population: 582,602</b>', 14.5546368,121.0241139],
    ['<b>Taguig City, Metro Manila <br> Population: 804,915</b>', 14.5170481,121.047546],
    ['<b>Muntinlupa City, Metro Manila <br> Population: 504,509</b>', 14.4067315,121.0365698],
    ['<b>Gen. Mariano Alvarez, Cavite <br> Population: 155,143</b>', 14.3072134,121.0116093],
    ['<b>Carmona, Cavite <br> Population: 97,557</b>', 14.2971985,121.0387576],
    ['<b>Silang, Cavite <br> Population: 248,085</b>', 14.2191259,120.9692234],
    ['<b>San Pedro City, Laguna <br> Population: 325,809</b>', 14.3488148,121.0342489],
    ['<b>Biñan City, Laguna <br> Population: 333,028</b>', 14.3034756,121.0759443],
    ['<b>Santa Rosa City, Laguna <br> Population: 353,767</b>', 14.283444,121.084726],
    ['<b>Cabuyao City, Laguna <br> Population: 308,745</b>', 14.2471016,121.1360729],
    ['<b>Calamba City, Laguna <br> Population: 454,486</b>', 14.1870326,121.1235034]

  ];
  var userCoorPath = [new google.maps.LatLng(15.0929081,121.0613609),
                      new google.maps.LatLng(14.8740942,121.1427638),
                    new google.maps.LatLng(14.8236989,121.0948389),
                    new google.maps.LatLng(14.760122,121.2003971),
                    new google.maps.LatLng(14.6774533,121.1591888),
                    new google.maps.LatLng(14.6750431,121.0402429),
                    new google.maps.LatLng(14.6504042,121.1019699),
                    new google.maps.LatLng(14.5772737,121.0857342),
                    new google.maps.LatLng(14.5546368,121.0241139),
                    new google.maps.LatLng(14.5170481,121.047546),
                    new google.maps.LatLng(14.4067315,121.0365698),
                    new google.maps.LatLng(14.3072134,121.0116093),
                    new google.maps.LatLng(14.2971985,121.0387576),
                    new google.maps.LatLng(14.2191259,120.9692234),
                    new google.maps.LatLng(14.3488148,121.0342489),
                    new google.maps.LatLng(14.3034756,121.0759443),
                    new google.maps.LatLng(14.283444,121.084726),
                    new google.maps.LatLng(14.2471016,121.1360729),
                    new google.maps.LatLng(14.1870326,121.1235034)]

var userCoordinate = new google.maps.Polyline({
path: userCoorPath,
strokeColor: "#FF0000",
strokeOpacity: 1,
strokeWeight: 2
});
userCoordinate.setMap(map);

var population = [22663,111348,574089,369222,252527,2936116,450741,755300,582602,804915,504509,155143,97557,248085,325809,333028,353767,308745,454486];
  var infowindow = new google.maps.InfoWindow();

  var marker, i;

  for (i = 0; i < locations.length; i++) {
    var circle = new google.maps.Circle({
map: map,
radius: Math.sqrt(population[i])*2,
strokeColor: '#FF0000',
strokeOpacity: 0.8,
strokeWeight: 2,
fillColor: '#FF0000',
fillOpacity: 0.35
});
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      map: map
    });
circle.bindTo('center', marker, 'position');
    google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
        infowindow.setContent(locations[i][0]);
        infowindow.open(map, marker);
      }
    })(marker, i));
  }
