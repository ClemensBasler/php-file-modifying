<?php
/**
 * @Entity @Table(name="weather_data")
 **/

class WeatherData
{
  /**
  * @Id @GeneratedValue @Column(type="integer")
  * @var int
  **/
  protected $id;
/**
* @Column(type="float")
* @var float
**/
protected $wind_speed_ms
; 
/**
* @Column(type="float")
* @var float
**/
protected $wind_direction_deg
; 
/**
* @Column(type="float")
* @var float
**/
protected $temp_sonic_degc
; 
/**
* @Column(type="float")
* @var float
**/
protected $air_temp_degc
; 
/**
* @Column(type="float")
* @var float
**/
protected $air_temp_ventilated_degc
; 

public function getId()
  {
      return $this->id;
  }

  public function __get($property)
  {
    return $this->$property;
  }

  public function __set($property,$value)
  {
    $this->$property = $value;
  }
}
