<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center;margin-top:80px;">
        View Already Booked Slot By Users</h1>
<?php


$con=mysqli_connect("localhost","root","","bookingslot");
$query="select date,systemno,labname,slot from booking";

$result=mysqli_query($con,$query);
$numrows=mysqli_num_rows($result);
if($numrows>0)
{
    echo '<table border="1" style="height: 180px; width: 1026px; text-align: center; font-size: large; margin: 124px auto;">';
    echo '<tr>';
    echo '<th>Date</th>';
    echo '<th>System no</th>';
    echo '<th>Labname</th>';
    echo '<th>Slot</th>';
    echo '</tr>';


while($row=mysqli_fetch_assoc($result))
{
    echo '<tr>';
    echo '<td>' .$row['date'] . '</td>';
    echo '<td>' .$row['systemno'] . '</td>';
    echo '<td>' .$row['labname'] . '</td>';
    echo '<td>' .$row['slot'] . '</td>';

    echo '</tr>';
}
    echo '</table>';
}
?>















</body>
</html>