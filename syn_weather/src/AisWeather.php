<?php

namespace Drupal\syn_weather;
use Drupal\Component\Serialization\Json;
use Drupal\syn_weather\SynWeatherInterface;

 class AisWeather implements SynWeatherInterface {
  public function getTodaysWeather() {
	  try {
	  	$url = 'https://samples.openweathermap.org/data/2.5/weather?lat=20.19890173932319&lon=74.9609375&appid=b6907d289e10d714a6e88b30761fae22%27';
		  $client = \Drupal::httpClient();
	      $response = $client->get($url, ['verify' => FALSE]);
	    $data =(string)$response->getBody();
	    $decoded = Json::decode($data);
	    $result = array();
	    foreach ($decoded['main'] as $key => $value) {
	    	$result[$key] =  $key . ': '. $value;	
	    }	
	    if (!empty($result)) {
	      return $result;
	    }
	  }
	  catch (RequestException $e) {
	    return FALSE;
	  }
	}
}
