<?php

  // call the weather api, pass the lat_lng_array
  $wather = 'https://api.darksky.net/forecast/'.$key.'/33.8688, 151.2093/?exclude=minutely?exclude=hourly?';

  // get the data for the forcast
  // json_decode makes a function into an array
  $forecast = json_decode(file_get_contents($wather), true);
  
  // feels like
  $temp = $forecast['currently']['temperature'];

  if($temp < 50){
  	$feels = 'it is cold outside.';
  } else {
	$feels = 'it is nice outside.';
  }