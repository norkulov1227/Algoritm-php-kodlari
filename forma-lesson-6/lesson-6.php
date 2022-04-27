<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registratsiya</title>
    <style type="text/css">
    .qizil{color: red;}
    </style>
  
</head>
<body>
    <h3>Ro'yxatdan o'tish</h3>
    <div  >
    <p><span class="qizil">*</span>
        To'ldirilishi majburiy bo'lgan maydonlar
    </p>
    <div class="div"  >
    <form  action="registr.php" method="POST">
        <table>
            <tr>
                <td>Login:</td>
                <td>
            <input  type="text" name="login">
            <span class="qizil"> *</span>
            </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>
                <input  type="password" name="password">
            <span class="qizil" >*</span>
            </td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
            <input type="radio" name="gender" value="male">Erkak
            <input type="radio" name="gender" value="female">Ayol
            <span class="qizil">*</span>
            </td>
            </tr>
        </table>
   
    <input class="btn btn-primary" type="reset" value="clear">
        <input class="btn btn-primary   "  type="submit" value="send">
    </div>
    </div>
    
    </form>
    </body>
</html>