<?php
// Mendapatkan IP user pengunjung
$ip = $_SERVER['REMOTE_ADDR'];

// Mengambil data lokasi berdasarkan IP dari geoplugin.net
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

echo 'Lokasi Anda :<br><br>';
echo 'Country Name: ' . $ipdat->geoplugin_countryName . "<br>";
echo 'City Name: ' . $ipdat->geoplugin_city . "<br>";
echo 'Continent Name: ' . $ipdat->geoplugin_continentName . "<br>";
echo 'Latitude: ' . $ipdat->geoplugin_latitude . "<br>";
echo 'Longitude: ' . $ipdat->geoplugin_longitude . "<br>";
echo 'Timezone: ' . $ipdat->geoplugin_timezone;
?>
