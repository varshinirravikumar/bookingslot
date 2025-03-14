

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
     
     body
     {
        display:flex;
        justify-content:center;
        align-items:center;
        text-align:center;
        margin-top: 182px;
     }
     .context
     {
        background-color:green;
        width: 583px;
        height: 373px;
        border-radius: 18px;

     }
        </style>





</head>
<body>

    <div class="context">

    
    <form action="slotview1.php" method="GET" >
       <label><h2>Enter Your Register No/Employee Id</h2></label>
<input type="number" name="regno" value=" "style="height: 43px;width: 296px;margin-top: 60px;font-size: large;"placeholder="Enter your Reg no/Employee Id"
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
<button type="submit" class="btn btn-primary" style="width: 142px;height: 40px;font-size: 20px;font-weight: bold;">SUBMIT</button>

</form>
</div>
</body>
</html>














