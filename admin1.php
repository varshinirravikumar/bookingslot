<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
     
     .first
     {
        display:flex;
        margin-top:205px;
        justify-content:center;
        align-items:center;
        margin:0;
        height:100vh;
     }
    .firstpage
    {
        height: 550px;
        width: 650px;
        background:linear-gradient(green,yellow);
        text-align:center;
        align-items:center;
        flex-direction:column;
        display:flex;
        
        border-radius:10px;
    }

    a
    {
        text-decoration:none;
        display:block;
        color:black;
        font-size:20px;
        font-weight:bold;
        background-color:white;
        border-radius:7px;
        bottom: 2px;
        margin:20px;
        transition:transform 0.4s ease,  filter 0.3s ease;
    }
    a:hover
    {
        color:white;
        background-color:black;
        transform:scale(1.3);
        filter:grayscale(0%);
    }  
        </style>
</head>
<body>



    <div class="first">
        <div class="firstpage">
        <h2> SRM LAB SLOT BOOKING</h2>
        <h3>Admin View</h3><br>
        <a href="slot1.php">Book Slot</a><br>
        <a href="slotview.php">View User Booked Slot</a><br>
        <a href="deleteslot.php">Delete Slot</a><br>
    </div>
    </div>
</body>
</html>