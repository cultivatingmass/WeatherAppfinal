<?php
  // Get the keys
  include 'keys.php';

  // Get the address from the form and sanitize it
  $address = htmlspecialchars($_POST["location"]);

  // Replace any spaces in the url with a plus symbol
  // using the str_replace() PHP function
  $address = str_replace(' ', '+', $address);

  // Get a Google Maps API key, and store it here
  // https://developers.google.com/maps/documentation/geocoding/get-api-key
  $google_key = $keys['google'];

  // Send the address to Google to get an array of geo data
  $address_url = 'https://maps.googleapis.com/maps/api/geocode/json?address='.$address.'&key='.$google_key;


  // Convert the Google Geo data to an array
  $address_data = json_decode(file_get_contents($address_url), true);

  // Optional, uncomment to see the data array
  // echo '<pre>';
  // print_r($address_data);
  // echo '</pre>';

  // Get the latitude and longitude array from the Google Geo data
  $coordinates = $address_data['results'][0]['geometry']['location'];

  // Put the array values into a string
  $coordinates = $coordinates['lat'].','.$coordinates['lng'];

  // Get the place name from the Google Geo data — we'll echo it later
  $place = $address_data['results'][0]['address_components'][0]['long_name'];

  // Get the formatted address from the Google Geo data
  $formatted_address = $address_data['results'][0]['formatted_address'];

  // Call DarkSky and pass along the coordinates we got from Google
  $forecast = 'https://api.darksky.net/forecast/'.$keys['darksky'].'/'.$coordinates.'/?exclude=minutely?exclude=hourly?lang=es';

  
  // Get our forecast data back
  $forecast = json_decode(file_get_contents($forecast));

  // Test Array
  // echo '<pre>';
  // print_r($forecast);
  // echo '<hr>';
  // print_r($places);
  // echo '</pre>';

// Weather Variables
  $temp_current = round($forecast->currently->temperature);
  $humidity_current = $forecast->currently->humidity;
  $rain_current = $forecast->currently->precipProbability;
  $wind_current = $forecast->currently->windSpeed;
  $places = json_decode(file_get_contents($place))>


  // quote variables
$things = array(
    $rain = array(
      '<h2>"Higher seas endanger coastal communities—where 40 percent of the world\'s population lives—and threaten groundwater supplies."</h2>',
      '<h2>A warmer climate spurs the evaporation of water from land and sea and allows the atmosphere to hold more moisture—thus setting the stage for more extreme precipitation."</h2>',  
      '<h2>"Municipal sewer systems may overflow during extreme rainfall events, gushing untreated sewage into drinking water supplies."</h2>',
      '<h2>"Heavier rain could exacerbate floods that disrupt traffic and transportation, overburden stormwater and runoff systems, damage property and infrastructure, and reduce crop yields due to excess water or field flooding, among other impacts."</h2>',
      '<h2>"The amount of rain falling in the heaviest downpours has increased approximately 20 percent on average in the past century."</h2>',
      '<h2>"Heavy downpours have increased in frequency and intensity during the last 50 years. Models predict that downpours will become still more more frequent and intense as greenhouse gas emissions and the planet’s temperature continue to rise."</h2>',

    ),
    $hot = array(
      '<iframe width="560" height="315" src="https://www.youtube.com/watch?v=s3RWTTtPg8E" frameborder="0" allowfullscreen></iframe>',
      '<h2>"The shrinking of mountain glaciers threatens drinking water supplies for millions of people."</h2>',  
      '<h2>"Multiple studies show that a massive 97 per cent of researchers believe global warming is happening and that they agree that trends observed over the last past century are probably due to human activity."</h2>',
      '<h2>"In 2017, Arctic sea ice reached a record low for the third straight running."</h2>'
    )
  );

  if($rain_current > 1){
    $statement = $things[0][rand(0, 5)];
  } else {
     $statement = $things[1][rand(0, 4)];
  }

  if($temp_current > 80){
    $statement = $things[1][rand(0, 3)];
  } else {
     $statement = $things[0][rand(0, 3)];
  }