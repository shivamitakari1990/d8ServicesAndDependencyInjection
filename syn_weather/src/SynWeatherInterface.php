<?php

namespace Drupal\syn_weather;

interface SynWeatherInterface {
	// define method which other class can override.
	public function getTodaysWeather();
}
