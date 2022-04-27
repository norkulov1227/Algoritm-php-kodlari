<?php
if(!empty($_POST)){
    if($_POST['role'] == 'admin'){
        if($_POST['login'] == 'admin' && $_POST['password'] == '123456'){
            header('Location:admin.php');
        } else{
            echo 'Login yoki parol xato';
        }
    } else {
        header('Location:user.php');
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lesson 4</title>
</head>
<body>
    <div class="container">
        <h3>Yangiliklar</h3>
        <form class="form-group" action="<?=$_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
                <label for="">Login</label>
                <input class="form-control" type="text" name="login">
                <label for="">{Password}</label>
                <input class="form-control" type="password" name="password">
                <label for="">Role</label>
                <select class="form-control" name="role">
                    <option value="admin">admin</option>
                    <option value="user">user</option>
                </select>
                <input class="btn btn-primary"  type="submit" value="Kirish" >
            </form>

    </div>
</body>
</html>