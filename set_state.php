<?php

    require 'invoke.php';
    require 'sleep_wakeup.php';
    require 'to_string.php';

    class Country {

        public $cites = [];
        public $army = [];
        public $science;

        public function __construct(){
            //$this -> science = new Science();
            //$this -> addCity(new City('London', 10000, true));
            //$this -> addUnit(new Unit('settlers', 0, 1));
            //$this -> addUnit(new Unit('warrior', 1, 1));
        }

//        public function addCity(City $city){
//            $this -> cites[] = $city;
//        }
//
//        public function addUnit(Unit $unit){
//            $this -> army[] = $unit;
//        }

        public static function __set_state($array){

            return $array;
        }
    }

    $Ukraine = new Country();

    $exported_code = var_export($Ukraine, true);

    echo "<pre>";
    print_r($exported_code);
    echo "</pre>";

    echo "<pre>";
    eval('$b = '.$exported_code.';');
    echo "</pre>";

    echo "<pre>";
    print_r($b);
    echo "</pre>";
