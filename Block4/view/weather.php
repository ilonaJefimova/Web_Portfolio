<div class="container mb-5">

  <?php
  $api = "YOUR_API_KEY";
  $url = "https://api.openweathermap.org/data/2.5/weather?q=city&appid=".$api."&mode=xml";
  $xmltxt = file_get_contents ($url);
  $xml = simplexml_load_string ($xmltxt);

  $feels = $xml -> feels_like ["value"] - 273;
  $humidity = $xml -> humidity ["value"];
  $visibility = $xml -> visibility ["value"];
  $condition = $xml -> weather ["value"];
  $pressure = $xml -> pressure ["value"];
  $icon = $xml -> weather ["icon"];
  $temperature = $xml -> temperature ["value"] - 273;
  $wind = $xml -> wind;
  $speed = round ($wind -> speed ["value"] * 3.6);
  ?>

  <div class="card weather-card shadow-lg mb-4 p-3" 
      style="border-radius:20px; background:linear-gradient(135deg, #343a40, #495057); color:white;">

    <div class="d-flex align-items-center mb-3">
        <img src="https://openweathermap.org/img/wn/<?php echo $icon; ?>@2x.png" alt="Weather icon" class="weather-icon">
        <div>
            <h2 class="mb-0"><?php echo round ($temperature); ?>°C</h2>
            <p class="mb-0 opacity-75" style="font-size:1.2rem;">
              <?php echo ucfirst ($condition); ?>
            </p>
        </div>
    </div>

    <hr style="border-color:rgba(255,255,255,0.2);">

    <div class="row">
        <div class="col-6">
            <p><strong>Feels Like:</strong> <?php echo round ($feels); ?>°C</p>
            <p><strong>Humidity:</strong> <?php echo $humidity; ?>%</p>
            <p><strong>Pressure:</strong> <?php echo $pressure; ?> hPa</p>
        </div>
        <div class="col-6">
            <p><strong>Wind:</strong> <?php echo $speed; ?> kph</p>
            <p><strong>Sunrise:</strong> <?php echo $xml->city->sun ["rise"]; ?></p>
            <p><strong>Sunset:</strong> <?php echo $xml->city->sun ["set"]; ?></p>
        </div>
    </div>

    <div class="text-end opacity-75" style="font-size:0.9rem;">OpenWeatherMap Data</div>
  </div>