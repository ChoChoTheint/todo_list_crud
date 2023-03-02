<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Task List</h1>
    <a href="./create.php">Create</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once('./db_connection.php');

                $sql = "SELECT * FROM work ";
                $query = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($query)){
                    $time = date('Y-m-d',strtotime($row['created_at']));
                    echo "
                        <tr>
                            <td>{$row['id']}</td> 
                            <td>{$row['name']}</td>
                            <td>$time</td> 
                            <td> 
                                <a href='./update.php?id={$row['id']}'>Update</a>
                                <a href='./delete.php?id={$row['id']}'>Delete</a>
                            </td>
                        </tr>
                    ";
                }

            ?>
        </tbody>
    </table>
</body>
</html>