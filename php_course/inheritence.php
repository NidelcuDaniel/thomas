<?php
  class Vehicle {
    private $is_started = false;
    private $gas = 0;

    function start() {
      if($this->gas > 0) $this->is_started = true;
      else echo "Nu ai benzina suficienta.";
    }

    function __construct(int $gas = 0) {
      $this->gas = $gas;
    }

    function __get($name) {
      switch($name) {
        case 'is_started':
          return $this->is_started;
        case 'gas':
          return $this->gas;
        default:
          return null;
      }
    }

    function __set($name, $value) {
      switch($name) {
        case 'gas':
          if(is_numeric($value)) $this->gas = $value;
          else throw new Exception("gas tre sa fie numeric");
          break;
      }
    }

    function __toString() {
      return "Class=Car{\$is_started=$this->is_started, \$gas=$this->gas}";
    }
  }

    class Truck extends Vehicle{
      private $is_trailer_attached = false;
      function start() {
        if($this->is_trailer_attached) parent::start();
        else echo "Trailer-ul nu este atasat.";
      }

      function __get($name) {
        if($name == 'is_trailer_attached') return $this->is_trailer_attached;
        else return parent::__get($name);
      }

      function attachTrailer() {
        $this->is_trailer_attached = true;
      }
    }

    class Bike extends Vehicle {
      private $is_sidestand_raised = false;

      function start() {
        if($this->is_sidestand_raised) parent::start();
        else echo "Cricul nu este ridicat.";
      }

      function __get($name) {
        if($name == 'is_sidestand_raised') return $this->is_sidestand_raised;
        else return parent::__get($name);
      }

      function raiseSidestand() {
        $this->is_sidestand_raised = true;
      }

    }


    $truck = new Truck();
    if($truck->gas <= 0) $truck->gas = 50;
    if(!$truck->is_trailer_attached) $truck->attachTrailer();
    $truck->start();
    var_dump($truck->is_started);
    echo "<br>";

    $bike = new Bike();
    if($bike->gas <= 0) $bike->gas = 50;
    if(!$bike->is_sidestand_raised) $bike->raiseSidestand();
    $bike->start();
    var_dump($bike->is_started);
    echo "<br>";



?>
