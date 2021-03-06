<?php

    error_reporting(E_ALL);

    class City {
        public $name;
        public $population;
        public $is_capital = false;

        public function __construct($name, $population, $is_capital){
            $this -> name = $name;
            $this -> population = $population;
            $this -> is_capital = $is_capital;
        }

        /** Returns the properties that should be serialized and invoke before serialization of object */
        public function __sleep(){
            return ['name', 'population'];
        }

        /** Invoke before unserialization of object */
        public function __wakeup(){
            echo 'Unserialization';
        }

        public function __toString(){
            return 'City Name: '.$this -> name.'<br/> City Population: '.$this -> population;

        }
    }

//    $London = new City('London', 10000000, true);
//
//    $serialized = serialize($London);
//
//    echo "<pre>";
//    var_dump(unserialize($serialized));
//    echo "</pre>";
//
//    echo $London;
