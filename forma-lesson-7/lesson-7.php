<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formalar bn ishlash</title>
</head>
<body>
    <div class="form-group" style="background-color: #999;">
    <form class="form-control" action="header.php" method="POST" enctype="multipart/form-data">
        <label for="">Fullname:</label>
        <input  class="form-control" type="text" name="fullname">
        <label for="">Group:</label>
        <input  class="form-control" type="text" name="group">
        <select class="form-control" name="otm" >
            <option value="tatu">tatu</option>
            <option value="milliy">milliy</option>
        </select><br>
        <input class="btn btn-control" style="background-color: #e3e3; width: 200;" type="submit" value="sent">
    </form>
    </div>
    
</body>
</html>