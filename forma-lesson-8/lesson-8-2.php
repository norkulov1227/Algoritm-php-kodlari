<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Students Forma</title>
</head>
<body>
    <div class="container" style="background-color: #9998;">
        <h3>Input student data</h3>
        <form class="form-group" action="lesson-8.php" method="post" enctype="multipart/form-data">
        <label for="">Name:</label>
        <input class="form-control" type="text" name="name" >
        <label for="">Group:</label>
        <input class="form-control" type="number" name="group">
        <label for="">Status:</label>
        <select class="form-control" name="status" id="">
            <option value="1">Active</option>
            <option value="2">No active</option>
        </select><br>
        <input class="btn btn-success" type="submit" value="Save">
    </form>
    </div>
</body>
</html>