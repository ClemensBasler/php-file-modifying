<?php

class Test
{
  protected $id;
protected $wind_speed_ms
;protected $wind_direction_deg
;protected $sonic_temp_degC
;protected $air_temp_degc
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
