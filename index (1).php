<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <script src='https://api.mapbox.com/mapbox-gl-js/v0.40.1/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v0.40.1/mapbox-gl.css' rel='stylesheet' />
  <style>
    body { margin:0; padding:0; }
    #map { position:absolute; top:0; bottom:0; width:100%; }
  </style>
</head>
<body>
  <div id='map'></div>
<!-- <script src="mapbox1.js"></script> -->

<script>
  mapboxgl.accessToken = 'pk.eyJ1Ijoia29iYWthenUxMCIsImEiOiJjajZ1MWkwbmIwbTA1MndzNmg0dmc2aWVvIn0._sxtnb1FlCzKYpqKROv_Ag';

  var position = new mapboxgl.LngLat(132.601271, 34.232102).wrap();

  var map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/mapbox/streets-v9',
      // var loc = new mapboxgl.LngLat(34.232262, 132.601539);
      center: [position.lng, position.lat],
      zoom: 16

//       map.addSource（'some id'、{
//       type：'geojson'、
//      data：'https://d2ad6b4ur7yvpq.cloudfront.net/naturalearth-3.3.0/ne_10m_ports.geojson'
}）;
  </script>
</body>
</html>