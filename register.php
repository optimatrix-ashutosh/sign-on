<?php

    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "trainee01";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Connection failed!".$conn->connect_error);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $passwd = $_POST["passwd"];
        $contactNumber = $_POST["contactNumber"];
        $dob = $_POST["dob"];

        $sql = "insert into
        users(firstName, lastName, username, email, passwd, contactNumber, dob)
        value('$firstName', '$lastName', '$username', '$email', '$passwd', '$contactNumber', '$dob')";

        if($conn -> query($sql) === TRUE){
            echo "Welcome" .$username ."Your registration is completed!";
            echo "<a href='index.php'>Click here to Log-In</a>";
        }
        else{
            echo "Error: ".$sql."<br>".$conn->error;
        }
    }

    $conn -> close();

?>
