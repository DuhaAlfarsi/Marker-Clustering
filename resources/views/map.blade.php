<!DOCTYPE html>
<html>
  <head>
    <title>Marker Clustering</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    {{-- <link rel="stylesheet" type="text/css" href="./style.css" /> --}}
    <style>
        /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
#map {
  height: 100%;
}

/* Optional: Makes the sample page fill the window. */
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}
    </style>
    {{-- <script src="./index.js"></script> --}}
  </head>
  <body>
    <div id="map"></div>

    <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
    <script>
        function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 3,
    center: { lat: -28.024, lng: 140.887 },
  });
  // Create an array of number used to label the markers.
  const titel = "1234567890";
  // Add some markers to the map.
  const markers = place.map((location, i) => {
    return new google.maps.Marker({
      position: location,
      titel: titel[i % titel.length],
    });
  });

  // Add a marker clusterer to manage the markers.
  new markerClusterer.MarkerClusterer({ markers, map });
}

const place = [
  { lat: -31.890681177457648, lng: 151.8909482421875 },
  { lat: 23.24114118418522, lng: 56.5011263587019 },
  { lat: 23.25123561436266, lng: 56.5066195227644 },
  { lat: 22.25123561436266, lng: 50.5066195227644 },
  { lat: 28.25123561436266, lng: 45.5066195227644},
  { lat: 23.25123561436267, lng: 56.5066195227644 },
  { lat: 28.25123561436267, lng: 45.5066195227644},
  { lat: 28.35123561436267, lng: 45.5066195227644 },
  { lat: -35.828611, lng: 174.790222 },
  { lat: -33.828611, lng: 173.790222 },
  { lat: -36.828611, lng: 175.790222 },
  { lat: -38.828611, lng: 172.790222 },

];

    </script>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl92J0XvkrTtKSF3nIFnFkIuAKEkXnqok&callback=initMap&v=weekly"
      async
    ></script>
  </body>
</html>