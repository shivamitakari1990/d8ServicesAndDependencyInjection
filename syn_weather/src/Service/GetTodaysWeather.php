<?php
/**
* @file providing the service that say hello world and hello 'given name'.
*
*/

namespace Drupal\syn_weather\Service;
use Drupal\Component\Serialization\Json;
use Drupal\syn_weather\SynWeatherInterface;


class GetTodaysWeather {
	private $weatherService;
	function __construct(OpenWeather $weatherService) {
	  $this->weatherService = $weatherService;
	}
	
  public function getTodaysWeather() {
 	return $this->weatherService->getTodaysWeather();
  }
}
