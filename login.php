<?php
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "trainee01";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Connection failed!");
    }
    
    if($_SERVER['REQUEST_METHOD'] == TRUE){
        $email = $_POST['email'];
        $passwd = $_POST['passwd'];
    }

    
?>
