<?php

$conn = mysqli_connect('localhost','root','','todo_list');
if(!$conn){
    echo "db fail" . mysqli_connect_error();
}


?>