<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>

   
<div class="context">
    
    <form action="slotview1.php" method="GET" >
    
       <label><h2>Enter Your Register No/Employee Id</h2></label>
       <input type="number" name="regno" value=" "placeholder="Enter your Reg no/Employee Id" id="name"
<?php 
if(isset($_GET['regno']))
{
    echo $_GET['regno'];
}
?>" class="fore-control">
<br>
<br>
<br>
<br>
<br>
<button type="submit" class="btn btn-primary" >SUBMIT</button>

</form>
</div>
</body>
</html>














