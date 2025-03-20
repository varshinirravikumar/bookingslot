<?php

$con=mysqli_connect("localhost","root","","bookingslot");


$query="select count(*) As total_users from booking WHERE date = curdate()";
$result=mysqli_query($con,$query);

if($result)
{
    $row=mysqli_fetch_assoc($result);
    echo "Total bookings at Today : "  .$row['total_users'];

}
else
{
    echo "error" .mysqli_error($con);
}
?>