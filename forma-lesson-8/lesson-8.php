<?php
    require('db.php');
    $name = $_POST['name'];
    $group = $_POST['group'];
    $status = $_POST['status'];

    $search = $_POST['search'];
    $delete_id = $_POST['delete_id'];
    
   
   if($name ){
    
    if(!$connect->query("Insert into `students`(`name`, `group`, `status`) values 
    (
     '$name', $group, $status 
    )
    ")){
        echo "Ma'lumot kiritlmadi. error: " . $connect->error;
    }else{
        echo "Ma'lumot kiritildi.";
    }
}
    if($search){
        $student = $connect->query("Select * from `students` where `name` like '%$search%'");
    }else{
        $student = $connect->query("Select * from `students`");
    }
   
    if($delete_id){
        if($connect->query("delete from `students` where id = $delete_id")){
            echo '<br>ochirildi';
        } else{
            echo '<br> error: '. $connect->error;
        }
    }
     
        if($student->num_rows>0){
            while($rows = $student->fetch_object()){
                $new_student[] = $rows;
                
            }
        }else{
            echo 'Jadvalda ma\'lumot yo\'q';
        }
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Students data</title>
</head>
<body>
    <div class="container">
        <h3>Students table</h3>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    <input class="form-control" type="text" name="search">
    <input class="btn btn-primary" type="submit" value="search">
        </form>
        <table class="table table-dark">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Group</td>
                    <td>Status</td>
                    <td>Delete</td>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($new_student as $value):?>
                    <tr>
                         <td><?=$value->id?></td> 
                         <td><?=$value->name?></td> 
                         <td><?=$value->group?></td> 
                         <td><?=$value->status == 1 ? 'active' : 'no active'?></td>
                         
                         
                         <td><form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            <input class="form-control" type="text" name="delete_id" value="<?=$value->id?>" hidden>
            <input class="btn btn-danger" type="submit" value="delete">
        </form></td>
                    </tr>   
                    <?php endforeach?>
                
            </tbody>
        </table>

    </div>
</body>
</html>