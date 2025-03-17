 <!-- in this  only user with the particular regno can view and delete their own slot -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    th
    {
      font-size:23px;
      font-weight:bold;
      text-align:center;
      background-color:white; 
    }

    td
    {
        font-size:20px;
      font-weight:bold;
      text-align:center;
    }
    table
    {
        width: 820px;
  align-items: center;
  display: flex;
  justify-content: center;
  text-align: center;
  margin-top: 123px;
  margin-left: 543px;
    }

</style>
</head>

<body bgcolor=pink>
    

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
echo '<td><a href="slotview1.php?regno=' . $regno . '&delete=true" onclick="return confirm(\'Are you sure you want to delete this slot?\')">delete</a></td>';
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
if(isset($_GET['regno'])&& isset($_GET['delete']) && $_GET['delete'] == 'true')
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

</body>
</html>