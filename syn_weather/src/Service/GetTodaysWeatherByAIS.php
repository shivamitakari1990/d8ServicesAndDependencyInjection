<?php
/**
* @file providing the service that say hello world and hello 'given name'.
*
*/

namespace Drupal\syn_weather\Service;
use Drupal\Component\Serialization\Json;	
use Drupal\syn_weather\AisWeather;
use Drupal\syn_weather\SynWeatherInterface;

class GetTodaysWeatherByAIS implements SynWeatherInterface {
  public function getTodaysWeather() {
  	$aisW = new AisWeather();
    return $aisW->getTodaysWeather();
  }
}
