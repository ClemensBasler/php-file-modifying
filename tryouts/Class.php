<?php

class Test
{
  protected $id;
  protected $attributeOne;
  protected $attributeTwo;
  protected $attributeThree;

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
