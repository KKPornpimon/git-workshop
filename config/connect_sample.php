<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "hello_world";

    $sql = mysqli_connect($host,$user,$pass,$db);

    echo "connecting success";

?>