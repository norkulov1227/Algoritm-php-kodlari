<?php 
    $connect = new mysqli('127.0.0.1', 'root', 'root', 'university');
    if(!$connect->connect_error){

        $connect->query('Insert into `students`');
        echo 'bazaga ulandi';
    }else
    {
        echo 'bazaga ulanmadi'. $connect->connect_error;
    }

?>