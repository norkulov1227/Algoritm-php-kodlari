<?php  
    class Supermarket{
        public $name;
        public $type;
        public $price;
        public $hajm;
        public $sale;

       public function __construct($name, $type, $price, $hajm, $sale)
        {
            $this->name = $name;
            $this->type = $type;
            $this->price = $price;
            $this->hajm = $hajm;
            $this->sale = $sale;
        }
        public function Allprice(){
            $allprice = $this->price * $this->hajm;
            return $allprice;
        }
        public function skidka(){
            $salePrice = $this->price - ($this->price*$this->sale/100);
            return  $salePrice;
        }
        public function Prosent(){
            $prosent = $this->skidka()*100/$this->Allprice();
            return 'Prosenti : '. $prosent;
        }
       
    }
    class Apple extends Supermarket{
          
    }
    class nok extends Supermarket{
          
    }
    class pepsi extends Supermarket{
          
    }
    $apple = new Apple('Olma', 'Meva', 15000, 10,15);
    echo '<br>'.$apple->Allprice();
    echo '<br>' . $apple->skidka();
    echo '<br>'.$apple->Prosent(12000);
    
?>