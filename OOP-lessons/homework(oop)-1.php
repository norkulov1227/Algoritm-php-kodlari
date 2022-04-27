<?php
    class Uchburchak{
        public $a;
        public $b;
        public $c;

        function __construct($a,$b,$c)
        {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }
        function Area(){
            $p = ($this->a + $this->b + $this->c)/2;
            $s = sqrt($p*($p-$this->a)*($p-$this->b)*($p-$this->c));
            return $s;
        }
        function Perimetr(){
            $p = $this->a + $this->b +$this->c;
            return  $p ;
        }

    }

        $object = new Uchburchak(6,8,10);
        echo "Uchburchak yuzasi: S=". $object->Area();
        echo '<br>'."Uchburchakning perimetri: P=" .  $object->Perimetr();


   /* class Phones{

    public $name;
    public $years;
    public $price;
    public $storage;

    function __construct($name,$years,$price,$storage)
    {
        $this->name = $name;
        $this->years = $years;
        $this->price = $price;
        $this->storage = $storage;
    }
     function redmi(){
    

    }

    }
    $redmi = new Phones('Note 8 PRO',2021,2450000,64);
    $redmi1 = new Phones('Note 9 PRO',2021,3250000,128);
    $redmi2 = new Phones('Note 10 PRO',2021,3450000,64);
    $samsung = new Phones('Samsung Galaxy A21s',2021,2100000,64);
    $samsung1 = new Phones('Samsung Galaxy A12',2021,1750000,32);
    $samsung2 = new Phones('Samsung Galaxy A10s',2021,1500000,32);
    
    echo $redmi->redmi();
    echo $redmi1->redmi();
    echo $redmi2->redmi();
    echo $samsung->redmi();
    echo $samsung1->redmi();
    echo $samsung2->redmi();*/
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <title>OOP</title>
</head>
<body>
    <div >
        <h3>Redmi:</h3>
    <table border='5' >
        <thead style="background-color: #000; color: white;">
            <tr>
                <td>Telefon nomi</td>
                <td>Telefon yili</td>
                <td>Telefon narxi</td>
                <td>Telefon xotirasi</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$redmi2->name?></td>
                <td><?=$redmi2->years?></td>
                <td><?=$redmi2->price?></td>
                <td><?=$redmi2->storage?></td> </tr>
                <td><?=$redmi->name?></td>
                <td><?=$redmi->years?></td>
                <td><?=$redmi->price?></td>
                <td><?=$redmi->storage?></td> </tr>
                <td><?=$redmi1->name?></td>
                <td><?=$redmi1->years?></td>
                <td><?=$redmi1->price?></td>
                <td><?=$redmi1->storage?></td>
            </tr>
        </tbody>
    </table>
    </div>
    <div >
        <h3>Samsung:</h3>
    <table border='5' >
        <thead style="background-color: #000; color: white;">
            <tr>
                <td>Telefon nomi</td>
                <td>Telefon yili</td>
                <td>Telefon narxi</td>
                <td>Telefon xotirasi</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$samsung->name?></td>
                <td><?=$samsung->years?></td>
                <td><?=$samsung->price?></td>
                <td><?=$samsung->storage?></td> </tr>
                <td><?=$samsung1->name?></td>
                <td><?=$samsung1->years?></td>
                <td><?=$samsung1->price?></td>
                <td><?=$samsung1->storage?></td> </tr>
                <td><?=$samsung2->name?></td>
                <td><?=$samsung2->years?></td>
                <td><?=$samsung2->price?></td>
                <td><?=$samsung2->storage?></td>
            </tr>
        </tbody>
    </table>
    </div>
    
</body>
</html> -->