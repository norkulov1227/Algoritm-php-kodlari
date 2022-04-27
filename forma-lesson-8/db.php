<?php 

    $connect = new mysqli('127.0.0.1', 'root', '', 'university');
    if(!$connect->connect_error){
        // $connect->query("create table `students`(`id` int not null primary key auto_increment,
        // `name` varchar(255) not null, `group` float not null, `status` boolean default true
        // )");
        echo 'Bazaga ulandi';
    }else{
        echo 'Bazaga ulanishda xatolik:' . $connect->connect_error;
    }

?>