var map;
var infoWindow;

// Initialize Google map
function initMap() {
    var locations = [
        ['Vancouver', 49.279220, -123.122532, 300, 23, 1],
        ['Burnaby', 49.246527, -122.982270, 504, 21, 85]
    ]

    var vancouver = { lat: 49.2577142, lng: -123.1941151 };
    var burnaby = { lat: 49.2399647, lng: -123.0283806 };
    var richmond = { lat: 49.1783514, lng: -123.276426 };
    var surrey = { lat: 49.1110928, lng: -122.9414654 };
    var delta = {lat: 49.0986173, lng: -123.2502014}
    var coquitlam = { lat: 49.2850052, lng: -122.8268027 };
    var langley = { lat: 49.0986192, lng: -122.6764454 };
    var newWest = { lat: 49.2065512, lng: -122.9526156 };
    var mapleRidge = { lat: 49.2599029, lng: -122.6804384 };

    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: { lat: 49.17086710004721, lng: -122.7843577963867 },
        scrollwheel: false,
        mapTypeControl: false,
        scaleControl: false,
        navigationControl: false,
        streetViewControl: false,
        styles: [
          {
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#f5f5f5"
              }
            ]
          },
          {
            "elementType": "labels.icon",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#616161"
              }
            ]
          },
          {
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#f5f5f5"
              }
            ]
          },
          {
            "featureType": "administrative.land_parcel",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "administrative.land_parcel",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#bdbdbd"
              }
            ]
          },
          {
            "featureType": "administrative.neighborhood",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#eeeeee"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "labels.text",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "featureType": "poi.business",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#e5e5e5"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          },
          {
            "featureType": "road",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#ffffff"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "labels",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "labels.icon",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "road.arterial",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#dadada"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#616161"
              }
            ]
          },
          {
            "featureType": "road.local",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          },
          {
            "featureType": "transit",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "transit.line",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#e5e5e5"
              }
            ]
          },
          {
            "featureType": "transit.station",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#eeeeee"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#c9c9c9"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "labels.text",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          }
        ]
    });

    infoWindow = new google.maps.InfoWindow();

    for (let i = 0; i < locations.length; i++) {
        createMarker(locations[i]);
    }
}

function createMarker(city) {
    var marker = new google.maps.Marker({
        title: city[0],
        map: map,
        position: new google.maps.LatLng(city[1], city[2])
    });

    google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(city[0] + "<hr> Happy: " + city[3] + "<br> Angry: " + city[4] + "<br> Sad: " + city[5]);
        infoWindow.open(map, this);
    });
}
