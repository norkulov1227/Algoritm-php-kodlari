<?php 
    interface Cars {
        public function goRun($speed);

        public function goBack($time);

    }
    trait otkuchi{
        public function strong($ot){
            return '<br>' . $this->name .' mashinasinining dvigatel quvvati: '. $ot * 746 . 'Watt';
        }
    }
    class car implements Cars{
        use otkuchi;
        public $name;
        public function __construct($name)
        {
            $this->name = $name;
        }

        public function goRun($speed)
        {
            return '<br>' . $this->name .' mashinasining max tezligi : ' . $speed . '<br>';
        }
        public function goBack($time)
        {
            return '<br> ' . $this->name .' mashinasi tormozlaganda tormozlanish vaqti : '. $time . ' sekund <br>';
        }        
    }
    $cars = new car('Tayota');
    echo $cars->goRun(240);
    echo $cars->goBack(30);
    echo $cars->strong(15);

?>