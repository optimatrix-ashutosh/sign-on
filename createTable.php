<?php
    $servername = "localhost";
    $username = "";  // Add your database username here
    $password = "";  // Add your database password here
    $dbname = "trainee01";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "CREATE TABLE users (
        firstName VARCHAR(15),
        lastName VARCHAR(15),
        username VARCHAR(20),
        email VARCHAR(30),
        passwd VARCHAR(30),
        contactNumber INT(10),
        dob DATE
    );";

    if (mysqli_query($conn, $sql)) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
