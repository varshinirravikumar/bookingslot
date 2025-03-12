<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="stylesheetslot.css">

<style>
body
{
   justify-content: center;
   align-items: center;
   
    display: flex;
    margin: 0;
    height: 100vh;
}

.container
{
    
    background:linear-gradient(#d72443,#0000ff4f);
    padding: 30px;
    

    border-radius:15px;
    
}
#name,#regno,#labname,#slot,#date
{
    height: 40px;
    border:2px solid blue;
    width: 250px;

}



#center>input
{
    
    border-radius:7px;
    
   
    color:black;
    margin-left: 131px;
    font-size: 20px;
    padding: 8px;
}
#center>a
{
    border-radius:7px;
    
    background-color:white;
    color:black;
    font-size: 20px;
    text-decoration:none;
    padding: 8px;
}
label
{
    display:inline-block;
    width: 250px;
    font-size:25px;
    font-weight:bold;
    text-align:left;
}
h1
{
    text-align:center;
    color:black;
}
.con
{
    font-size:20px;
}
</style>




</head>
<body>
    <div class="container">
    
    <h1> SRM BLOOMBERG LAB</h1>
    <br>
<form class=" action=" method="post" autocomplete="off">
<label for ="name">Name</label>
<input type="text" name="name" placeholder="Enter your name" id="name"><BR><BR>
<label for ="regno"> Regno/Employee ID</label>
<input type="number" name="regno" placeholder="Enter your Regno/Employee ID" id="regno"><BR><BR>
<label for ="date">Date</label>
<input type="date" name="date" id="date"><BR><BR>
<label for ="systemno">Choose System No</label><br><br>
<div class="con">
<input type ="radio" id="systemno" name="systemno" value="system01">system01
<input type ="radio" id="systemno" name="systemno" value="system02">system02
<input type ="radio" id="systemno" name="systemno" value="system03">system03
<input type ="radio" id="systemno" name="systemno" value="system04">system04<BR>
<input type ="radio" id="systemno" name="systemno" value="system05">system05
<input type ="radio" id="systemno" name="systemno" value="system06">system06
<input type ="radio" id="systemno" name="systemno" value="system07">system07
<input type ="radio" id="systemno" name="systemno" value="system08">system08<BR>
<input type ="radio" id="systemno" name="systemno" value="system09">system09
<input type ="radio" id="systemno" name="systemno" value="system10">system10
<input type ="radio" id="systemno" name="systemno" value="system11">system11
<input type ="radio" id="systemno" name="systemno" value="system12">system12<BR><BR><BR></div>
<label for ="labname">Choose Lab</label>
<select id="labname" name="labname">
    <option value="Finech">Fintech</option>
    <option value="Bloomberg">Bloomberg</option>
</select>
<BR><BR><BR>
<label for ="slot">Choose Time Slot</label> 
<select id="slot" name="slot">
<option value="8.45" >08.45</option>
<option value="9.45">09.45</option>
<option value="10.45">10.45</option>
<option value="11.45">11.45</option>
<option value="01.45">01.45</option>
<option value="02.45">02.45</option>
<option value="03.45">03.45</option>
</select>
<br>    

<BR>
<div id="center">
<input type="submit" value="submit" name="submit" >


<a href="viewslot.php">View Your Slot</a>

</div>




</div>



</form>
</body>
</html>


<?php



if(isset($_POST['submit']))
{

$name=$_POST["name"];
$regno=$_POST["regno"];
$date=$_POST["date"];
if(isset($_POST["systemno"]))
{
$systemno=$_POST["systemno"];
}
else
{
    $systemno='';
}

$labname=$_POST["labname"];
$slot=$_POST["slot"];




$con=mysqli_connect("localhost","root","","bookingslot");
if(!$con)
{

    die("connection failed:".mysqli_connect_error());
}

$checkquery ="select * from booking where systemno='$systemno' AND date='$date' AND SLOT='$slot'";
$value=mysqli_query($con,$checkquery);


if(mysqli_num_rows($value)>0)
{
    echo "sorry, this slot is already booked. please select different slot.";
}
else
{


if($name!=""&&$regno!=""&&$date!=""&&$systemno!=""&&$labname!=""&&$slot!="")
{
$result=mysqli_query($con,"insert into booking(name,regno,date,systemno,labname,slot)values('$name','$regno','$date','$systemno','$labname','$slot')");
if($result)
{
    echo '<br>';
    echo "Successfully Booked";
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

}
?>










