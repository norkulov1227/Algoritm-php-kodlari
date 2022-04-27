<?php 

    class cars{
        public $name;
        public $years;

        function __construct($name, $years)
        {
            $this->name = $name;
            $this->years = $years;
        }

        function view($color){
            
            return $color . ' ' . $this->name . ' mashinasi ' . $this->years . ' - yili ishlab chiqarilgan'; 
        }
           
        
    }

    $object = new cars('BMW', 1970);
    echo $object->view('Qizil');


?>