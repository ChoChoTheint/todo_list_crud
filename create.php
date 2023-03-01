<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align:center">
    <h1>Todo List</h1>


    <form action="" method="POST">
        <div class="form-group">
            <label for="name">Your Tasks</label>
            <input type="text" id="name" name="taskName" placeholder="Enter Your Task....">
            <button name="addBtn">Add</button><br/>
        </div>
        
    </form>


    <?php

    require_once("./db_connection.php");

    if(isset($_POST['addBtn'])){
        $taskName = $_POST['taskName'];
        if($taskName == "" || $taskName == null){
            echo "<br/>";
            echo "<small style= 'color:red'>Message is required</small>";
        }else{
            $sql = "INSERT INTO work (name) VALUES ('$taskName')";
            if(mysqli_query($conn,$sql)){
                echo "Insert Success .....";
            }else{
                echo "Query Fail..." . mysqli_error($conn);
            }
        }
    }

    ?>
</body>
</html>