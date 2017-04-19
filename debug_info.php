<?php

    class Terrain
    {

        private $type;

        public function __construct($type)
        {
            $this -> type = $type;
        }

        public function __debugInfo()
        {
            echo 'This is debug of Terrain class';
        }


    }

    $plain = new Terrain('plain');

    echo "<pre>";
    var_dump($plain);
    echo "</pre>";

    echo "<pre>";
    print_r($plain);
    echo "</pre>";