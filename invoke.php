<?php

    class Science {

        public $current_exploring_technology = 'Pottery';
        public $explored_technologies = [];

        /** The invoke method is called when a script tries to call an object as a function */
        public function __invoke(){
            echo $this -> current_exploring_technology;
        }

    }

    $Science = new Science();
//
//    $Science();