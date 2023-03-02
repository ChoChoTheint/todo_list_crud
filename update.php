<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>


<?php
require('./db_connection.php');
// session_start();
$id = $_GET['id'];
$sql = "SELECT * FROM work WHERE id = $id";
$query = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($query); //get data
// var_dump($data);

if(isset($_GET['updateBtn'])){
    require('./db_connection.php');
    $taskId = $_GET['taskId'];
    $taskName = $_GET['taskName'];
    $updateSQL = "UPDATE work SET name='$taskName' WHERE id=$taskId";
        if(mysqli_query($conn,$updateSQL)){
            header('location:read.php');
        }else{               
            echo "Update error....." . mysqli_error($conn);
        }
// mysqli_close($conn);
}
?>
<form action="" method="GET">
    <h1>Tasks</h1>
    <input type="text" name="taskId" value="<?php echo $data['id'] ?>" required>
    <input type="text" name="taskName" value="<?php echo $data['name'] ?>" required> 
    <button name="updateBtn">Update</button>
</form>

</body>
</html>