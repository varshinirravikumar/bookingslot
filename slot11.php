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
 
}

.container
{
    
    background:linear-gradient(#d00a2d,#ca52ec);
    padding: 16px;
   
    border-radius:15px;
    
}
#name,#regno,#labname,#slot,#date
{
    height: 23px;
  border: 2px solid blue;
  width: 241px;
  font-size: 12px;
}



#center>input
{
    
    border-radius:7px;
    margin-left: 193px;
   
    color:black;
    
    font-size: 20px;
    
}
#center>a
{
    border-radius: 5px;
  text-align: center;
  background-color: white;
  color: #1281c6;
  font-size: 17px;
  text-decoration: none;
  margin-left: 27px;
}
label
{
    display:inline-block;
    width: 244px;
    font-size:19px;
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
    font-size:18px;
}

@media (max-width:800px)
{
    .container
    {
        width:100%;
    }
    #name,#regno,#labname,#slot,#date
    {
        height: 23px;
    border: 2px solid blue;
    width: 153px;
    font-size: 9px;
    }
    label
    {
        width: 160px;
    font-size: 17px;
    }
    .con
    {
        font-size:14px;
    }
    #center a
    {
        font-size: 12px;
        padding: 3px;
    }
    #center input
    {
        margin-left: 127px;
    }

}
</style>




</head>
<body>
    <div class="container">
    
    <h1>Lab Slot Booking</h1>
    <br>
<form class=" action=" method="post" autocomplete="off" style ="margin-top:-10px";>
<label for ="name">Name</label>
<input type="text" name="name" placeholder="Enter your name" id="name"><BR><BR>
<label for ="regno"> Regno/Employee ID</label>
<input type="number" name="regno" placeholder="Enter your Regno/Employee ID" id="regno"><BR><BR>
<label for ="date">Date</label>
<input type="date" name="date" id="date"><BR><BR>
<label for ="systemno">Choose System No</label><br><br>
<div class="con">
<input type ="radio" id="systemno" name="systemno" value="system01">System 01
<input type ="radio" id="systemno" name="systemno" value="system02">System 02
<input type ="radio" id="systemno" name="systemno" value="system03">System 03
<input type ="radio" id="systemno" name="systemno" value="system04">System 04<BR><BR>
<input type ="radio" id="systemno" name="systemno" value="system05">System 05
<input type ="radio" id="systemno" name="systemno" value="system06">System 06
<input type ="radio" id="systemno" name="systemno" value="system07">System 07
<input type ="radio" id="systemno" name="systemno" value="system08">System 08<BR><BR>
<input type ="radio" id="systemno" name="systemno" value="system09">System 09
<input type ="radio" id="systemno" name="systemno" value="system10">System 10
<input type ="radio" id="systemno" name="systemno" value="system11">System 11
<input type ="radio" id="systemno" name="systemno" value="system12">System 12<BR><BR><BR></div>
<!-- <label for ="labname">Choose Lab</label> -->
<!-- <select id="labname" name="labname">
    <option value="Finech">Fintech</option>
    <option value="Bloomberg">Bloomberg</option>
</select> -->
<label for ="labname"> Lab Name</label>
<input type="text" value="Bloomberg" readonly id="labname" name="labname">

<BR><BR><BR>
<label for ="slot">Choose Time Slot</label> 
<select id="slot" name="slot">
<option value="08.45">08.45am</option>
<option value="09.45">09.45am</option>
<option value="10.45">10.45am</option>
<option value="11.45">11.45am</option>
<option value="01.45">01.45pm</option>
<option value="02.45">02.45pm</option>
<option value="03.45">03.45pm</option>
</select>
<br>    

<BR>
<div id="center">
<input type="submit" value="Book Slot" name="submit" >

<br><br>
<a href="viewslot1.php">View Your Slot</a>

<a href="fetchonlyslot.php">View User Booked Slot to check Availability</a>
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










