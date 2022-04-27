<?php 
    class student{
        public $name;
        public $phone;
        public $adres;

        function __construct($name, $phone, $adres)
        {
            $this->name = $name;
            $this->phone = $phone;
            $this->adres = $adres;
        }
        function data(){

        }
    }

    $student1 = new student('Norqulov Ramazon', '+9989997481227', 'Qashqadaryo');
    $student2 = new student('Amirqulov Amirqul', '+998934621004', 'Buxoro');
    $student3 = new student("Toshpo'latov Samandarbek", '+998881235656', "Farg'ona"); 
    $student4 = new student("Abdullayev Behruzbek", '+998990007364', "Qashqadaryo"); 
      

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Table of students</h4>
    <div>
        <table border="5" >
            <thead style="background-color: greenyellow;">
                <tr>
                    <td>Fullname</td>
                    <td>Telefon raqami</td>
                    <td>Yashash manzili</td>
                </tr>
            </thead>
            <tbody style="background-color: hotpink;">
                <tr>
                    <td><?=$student1->name?></td>
                    <td><?=$student1->phone?></td>
                    <td><?=$student1->adres?></td>
                </tr>
                <tr> 
                    <td><?=$student2->name?></td>
                    <td><?=$student2->phone?></td>
                    <td><?=$student2->adres?></td> 
                </tr>
                <tr> 
                    <td><?=$student3->name?></td>
                    <td><?=$student3->phone?></td>
                    <td><?=$student3->adres?></td> 
                </tr>
                <tr> 
                    <td><?=$student4->name?></td>
                    <td><?=$student4->phone?></td>
                    <td><?=$student4->adres?></td> 
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>