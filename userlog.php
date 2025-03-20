<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>

<div class="container2">
   <h2>Login</h2>
   <div class="user">
    <form action="userlog.php" method="post">
     
    <label for="name">Enter your name</label>
    <input type="text" name="name" id="name"><br>
    <br><br>
    <label for="password">Enter your password</label>
    <input type="password" name="password" id="password">
    <br>
    <div class="down">
    <button type="submit" id="down" name="submit">Login</button>
    <br><br>
    <a href="loginuser.php">Back</a></div>
</form>

</div>
</div></body>
</html>

<?php
// Check if form is submitted
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Connect to the database
    $con = mysqli_connect("localhost", "root", "", "bookingslot");

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query to check if the user exists with the entered username and password
    $query = "SELECT * FROM userlogin WHERE name='$name'";
    $result = mysqli_query($con, $query);

    

 if (mysqli_num_rows($result) > 0) {
        // Fetch the user record
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];  // Get the stored hashed password

        // Verify the entered password with the stored hashed password
        if (password_verify($password, $hashed_password)) {
            // If password is correct, redirect to slot11.php
            header("Location: slot11.php");
            exit(); // Make sure no further code is executed after the redirect
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No user found with that username!";
    }

    // Close connection
    mysqli_close($con);
}
?>
 
