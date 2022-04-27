<?php 

    if($_POST['otm'] == 'tatu'){
        if($_POST['fullname'] == 'Ramazon' && $_POST['group'] == '31220'){
            header('Location:tatu.php');
        }else{
            echo 'Ism yoki group notugri'. '<br>';
            
          
        }
    }
    else if($_POST['otm'] == 'milliy'){
        header('Location:milliy.php');
    }


?>