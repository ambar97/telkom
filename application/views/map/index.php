<link rel="stylesheet" href="<?= base_url(); ?>/assets/leaflet/leaflet.css" />
<script src="<?= base_url(); ?>/assets/leaflet/leaflet.js"></script>
 
<style>
#map { height: 530px; }
</style>
<div id="map"></div>
 
<script>
    var map = L.map('map').setView([-7.797068, 110.370529], 10);
ACCESS_TOKEN = 'pk.eyJ1IjoiZGhhbnlydmxkIiwiYSI6ImNrMmZzNXl5NzBkOXUzaG8xNzBpYmJ4NDYifQ.lGh6FZf2oNpB6G5kgN7Tgg';
    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=' + ACCESS_TOKEN, {
        id: 'mapbox.streets'
    }).addTo(map); 
    var marker = L.marker([-7.797068, 110.370529], { title: "My marker" }, {}).addTo(map);
</script>