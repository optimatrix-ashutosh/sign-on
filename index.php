<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Registration Form</title>
    <script src="jQuery.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "";
        $password = "";
        $dbname = "trainee01";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if($conn->connect_error){
            die("Connection failed!" .$conn->connect_error);
        }

        echo "<script>
            console.log('Database connected successfully!');
        </script>"
    ?>
    <div class="reg-container">
        <form action="register.php" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="firstName">First Name:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="firstName" name="firstName">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lastName">Last Name:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lastName" name="lastName">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="username">Username:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="username" name="username">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email">Email:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="email" name="email">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="passwd">Password:</label>
                </div>
                <div class="col-75">
                    <input type="password" id="passwd" name="passwd">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="passwd">Confirm Password:</label>
                </div>
                <div class="col-75">
                    <input type="password" id="passwd" name="passwd">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="contactNumber">
                        Contact:
                    </label>
                </div>
                <div class="col-75">
                    <input type="tel" id="contactNumber" name="contactNumber">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="dob">Date of Birth: </label>
                </div>
                <div class="col-75">
                    <input type="date" id="dob" name="dob">
                </div>
            </div>
            <div class="row">
                <input type="submit" name="signup" value="Sign Up" id="signup">
            </div>
        </form>
    </div>
    <div class="login-container">
        <form action="login.php" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="email">Enter your e-mail: </label>
                </div>
                <div class="col-75">
                    <input type="email" id="email" name="email" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="passwd">
                        Enter your password: 
                    </label>
                </div>
                <div class="col-75">
                    <input type="password" id="passwd" name="passwd" required>
                </div>
            </div>
            <div class="row">
                <input type="submit" id="login" name="login" value="Log In">
            </div>
        </form>
    </div>
    <script src="register.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>