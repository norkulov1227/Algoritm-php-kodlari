<?php 
    class Products{
        public $name;
        public $price;
        public $chegirma;

        function __construct($name, $price,$chegirma)
        {
            $this->name = $name;
            $this->price = $price;
            $this->chegirma = $chegirma;
        }
    }
           $arr =[  new Products('Olma', 15000,10),
            new Products('Banan', 23000,22),
            new Products('nok', 30000,20),
            new Products('non', 3000,0),
            new Products('Anor', 12000,25)];
    echo '<pre>';
    var_dump($arr);

    function getSum($massiv){

        $sum = 0;
        if(sizeof($massiv) > 0){
            foreach($massiv as $key=>$value){
                $sum += $value->price;
            }
            return $sum;
        }
        return 'Massiv bosh';
    }
    function getSaleSum($massiv){
        $sum = 0;
        if(sizeof($massiv) > 0){
            foreach($massiv as $key=>$value){
                $sum += ((100-$value->chegirma)/100)*$value->price;
            }
            return $sum;
        }
        return 'Massiv bosh';
    }
    function getMax($massiv){
        $max = 0;
        if(sizeof($massiv) > 0){
            foreach($massiv as $key=>$value){
               if($max < $value->price){
                $max = $value->price;
               }                
            }
            return $max;
        }
    }
    echo getSum($arr);
    echo '<br>' .getSaleSum($arr);
    echo '<br>' .getMax($arr);

?>