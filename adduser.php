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
   <h2>Create an Account</h2>
   <div class="user">
   
   <form class="action" method="post" autocomplete="off">
  
   <label for="name">Name</label>
   <input type="text" name="name" placeholder="Enter your name"  id="name">
   <br><br><br>
   <label for="password">Password</label>
   <input type="password" name="password" placeholder="Enter your password"  id="password">
   <div class="button">
  <input type="submit" name="submit" value="submit">
  <a href="userlog.php"> Sign in</a>

</div>
  
  </div>
</div>


    </form>
</body>
</html>
<?php

if(isset($_POST['submit']))
{
    
    $name=$_POST['name'];
    $password=$_POST['password'];



$con=mysqli_connect("localhost","root","","bookingslot");

if($name!=""&&$password!="")
{
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$result=mysqli_query($con,"insert into userlogin (name,password) values('$name','$hashed_password')");
if($result)
{
    

    echo '<br>';
    echo "Successfully created an Account";
    echo '<br>';
    echo '<br>';
}
}
else
{
    echo "please enter all fields";
    echo '<br>';
    echo '<br>';


}





}

?>
  