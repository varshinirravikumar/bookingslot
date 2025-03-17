<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>

<div class="container1">
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
    <button type="submit" id="down">Login</button>
    <br><br>
    <a href="loginuser.php">Back</a></div>
</form>

</div>
</div>
<?php
session_start(); // Start the session

// Database connection
$con = mysqli_connect("localhost", "root", "", "bookingslot");

// Check for connection errors
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process the form when it's submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $password = $_POST['password'];

    // Prevent SQL injection by using prepared statements
    $stmt = $con->prepare("SELECT name, password FROM userlogin where name=?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt->store_result();

    // Check if the user exists
    if ($stmt->num_rows > 0) {
        // Bind the result to variables
        $stmt->bind_result($db_name, $db_password);

        // Fetch the data
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $db_password)) {
            // If password is correct, store user information in session and redirect
            $_SESSION['username'] = $db_name;

            // Redirect to another page (e.g., slot11.php)
            header("Location: slot11.php");
            exit();
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No user found with that username!";
    }

    $stmt->close();
}

// Close the database connection
$con->close();
?>


 
</body>
</html>