

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="slotview.php" method="GET" >
       <label><h2>ENTER YOUR REGISTER NO/Employee Id</h2></label>
<input type="number" name="regno" value="
<?php 
if(isset($_GET['regno']))
{
    echo $_GET['regno'];
}
?>" class="fore-control"><br>
<button type="submit" class="btn btn-primary">SUBMIT</button>
</form>
    
</body>
</html>














