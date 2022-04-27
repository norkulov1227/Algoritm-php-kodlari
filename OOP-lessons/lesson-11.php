<?php 
    class shakl{
        public $name;
        public $type = [];

       public function __construct($name, $type)
        {
            $this->name;
            $this->type = $type;
        }

      public  function perimetr(){
          $sum = 0;
    foreach($this->type as $key=>$value){
        $sum += $value;
    }
    return $sum;

        }

    }

    class uchburchak extends shakl{
        public function skidka(){
            
        }
        
    }

    $object = new uchburchak('uchburchak', [6,8,10]);
    echo $object->perimetr();
    echo '<pre>';
    var_dump($object->type);

?>