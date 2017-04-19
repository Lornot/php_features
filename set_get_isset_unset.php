<?php

    class Map
    {

        public $size;
        public $type;
//        public $coordinates = [
//            [[], [], []]
//
//
//        ];

        public function __set($name, $value)
        {
            echo 'This property is not available for setting <br>';
        }

        public function __get($name)
        {
            echo 'This property is not available for getting';
        }

        public function __isset($name)
        {
            echo 'Sorry, you couldnt check this propery';
        }

        public function __unset($name)
        {
            echo 'You cant delete this property';
        }

    public function generateNewMap(){

        }

    }

    $Map = new Map();
    $Map -> prefered_terrain = 'mountains';
    echo $Map -> prefered_terrain;

    isset($Map -> preferred_terrain);
    echo "<pre>";
    var_dump(isset($Map -> type));
    echo "</pre>";

    unset($Map -> preferred_terrain);
