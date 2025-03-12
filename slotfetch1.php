<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php
$con=mysqli_connect("localhost","root","","bookingslot");
if(isset($_GET['regno']))
{
$regno=$_GET['regno'];

$query="SELECT * from booking where regno = '$regno'  ";

$result=mysqli_query($con,$query);
$rows=mysqli_num_rows($result);


if(mysqli_num_rows($result)>0)
{
    
foreach($result as $row)
{
    
echo  "Name:" .$row['name'];
echo   "Reg No:".$row['regno'];

echo  "Date:" .$row['date'] ;
echo   "System N0:".$row['systemno'] ; 
echo "LAB Name:" ." "." " .$row['labname']   ; 
echo "SLOT:" ." "." " .$row['slot']   ; 



}

}


else
{
    echo "no record found";
}

}

?>

</body>
</html>

