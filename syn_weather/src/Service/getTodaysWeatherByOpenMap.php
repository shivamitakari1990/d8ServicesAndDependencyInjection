<?php
/**
* @file providing the service that say hello world and hello 'given name'.
*
*/

namespace Drupal\syn_weather\Service;
use Drupal\Component\Serialization\Json;	
use Drupal\syn_weather\OpenWeather;
use Drupal\syn_weather\SynWeatherInterface;

class GetTodaysWeatherByOpenMap implements SynWeatherInterface {
  public function getTodaysWeather() {
  	$aisW = new OpenWeather();
    return $aisW->getTodaysWeather();
  }
}
