<?php

    class Unit {

        public $type;
        public $attack;
        public $defense;

        public function __construct($type, $attack, $defense){
            $this -> type = $type;
            $this -> attack = $attack;
            $this -> defense = $defense;
        }

        public function __toString(){
            return 'Unit Type: '.$this -> type.'<br/> Unit Attack Level: '.$this -> attack.'<br/> Unit Defense: '.$this -> defense;

        }

    }

//    $panzer = new Unit('panzer', 10, 5);
//    print($panzer);