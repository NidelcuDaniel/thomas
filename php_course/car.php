<?php
  class Car {
    private $total_fuel;
    private $crt_fuel;
    private $consum;
    static public $nr_roti = 4;

    static function nr_roti() {
      return $nr_roti;
    }

    function fill($quantity) {
      $this->crt_fuel += $quantity;
    }
    function go($distance) {
      $needed = $this->consum / 100 * $distance;
      if($this->crt_fuel > $needed) {
        $this->crt_fuel -= $needed;
      } else return "Nu ai suficienta benzina pentru a parcurge $distance km.";
    }
    function fuel_left() {
      return $this->crt_fuel * 100 / $this->total_fuel;
    }
    function __construct($total_fuel, $crt_fuel, $consum) {
      $this->total_fuel = $total_fuel;
      $this->crt_fuel = $crt_fuel;
      $this->consum = $consum;
    }
  }
?>
