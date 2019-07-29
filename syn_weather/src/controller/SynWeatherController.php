<?php
namespace Drupal\syn_weather\controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\syn_weather\AisWeather;
//use Drupal\syn_weather\AisWeather;
//use Drupal\syn_weather\service\GetTodaysWeatherByAIS;

/**
 * Provides route responses for the Example module.
 */
class SynWeatherController extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function weatherWidget() {
    $service = \Drupal::service('syn_weather.get_ais_weather');
    $weather_details = $service->getTodaysWeather(); 
    $element = array(
      '#theme' => 'item_list',
      '#items' => $weather_details,
    );
    return $element;
  }

  public function withoutDependencyInjection() {
    // singletone design pattern.
    $aisW = new AisWeather();
    $weather_details = $aisW->getTodaysWeather();
    $element = array(
      '#theme' => 'item_list',
      '#items' => $weather_details,
    );
    return $element;
  }

   public function withDependencyInjection() {
    // singletone design pattern.
    $service = \Drupal::service('syn_weather.get_syn_weather');
    $weather_details = $service->getTodaysWeather();
    $element = array(
      '#theme' => 'item_list',
      '#items' => $weather_details,
    );
    return $element;
  }
  
}


