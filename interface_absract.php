<?php

    include_once 'interface.php';


    abstract class ParentAbstract {

        abstract function firstAbstractMethod();

    }

    abstract class FirstAbstract extends ParentAbstract {

        function firstAbstractMethod(){

        }
        
        abstract function secondAbstractMethod();

    }


    class MyClass extends FirstAbstract implements SuperInterface, OtherInterface {

        public function testMethod()
        {
            
        }

        public function firstAbstractMethod()
        {
            // TODO: Implement firstAbstractMethod() method.
        }

        public function secondAbstractMethod()
        {
            // TODO: Implement secondAbstractMethod() method.
        }

        public function testMethod2()
        {
            // TODO: Implement testMethod2() method.
        }

    }


    $class = new MyClass();

    

