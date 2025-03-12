 <!-- in this  only user with the particular regno can view and delete their own slot -->


 <?php
$con=mysqli_connect("localhost","root","","bookingslot");


if(isset($_GET['regno']))
{
$regno=$_GET['regno'];

$query="SELECT * from booking where regno = '$regno' ";
$result=mysqli_query($con,$query);
$numrow=mysqli_num_rows($result);
if($numrow>0)
{

echo '<table border=1>';
echo '<tr>';

echo '<th>DELETE</th>';

echo '<th>NAME</th>';
echo '<th>REG NO</th>';

echo '<th>DATE </th>';
echo '<th>SYSTEM NO</th>';
echo '<th>LAB NAME</th>';
echo '<th>SLOT TIMING</th>';

echo '</tr>';
while($row=mysqli_fetch_assoc($result))
{
$regno=$row['regno'];



echo '<tr>';
echo '<td><a href="slotview.php?regno=' .$regno.'">delete</a></td>';

echo '<td>' . $row['name'] . '</td>';
echo '<td>' . $row['regno'] . '</td>';
echo '<td>' . $row['date'] .'</td>';
echo '<td>' . $row['systemno'] .'</td>';
echo '<td>' . $row['labname'] . '</td>';
echo '<td>' . $row['slot'] . '</td>';


echo '</tr>';
}
echo '</table>';
}
}
?>


</body></html>
<?php
if(isset($_GET['regno']))
{
$regno=$_GET['regno'];
$link=mysqli_connect("localhost","root","","bookingslot");
if(!$link)
{
die('connection error' . mysqli_connect_error());
}
$query="delete from booking where regno=$regno";
$result = mysqli_query($link,$query);
if($result)
{
echo 'successfully deleted';
}
else
{
echo 'error';
}
}
else
{
echo '';
}

?>

