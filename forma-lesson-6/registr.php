<?php

        if(!empty(trim($_POST['login']) && trim($_POST['password']) && trim($_POST['gender']))){
        echo "Siz quyidagi ma'lmotlar orqali ro'yxatdan o'tdingiz" . '<br>';
        echo 'Login: ' . $_POST['login'] . '<br>';
        echo 'Password: ' . $_POST['password'] . '<br>';
        echo 'Gender: ' . $_POST['gender'] . '<br>';
    }else{
        header('Location:lesson-6.php');
    }


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
   
    <form class="form-group" action="lesson-6.php" method="POST">
        <input class="btn btn-primary" style="background-color: yellow;" type="submit" value="Ma'lumotlarni qayta kiritish uchun bosing">
    </form>
</body>
</html>
