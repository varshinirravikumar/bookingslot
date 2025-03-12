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
        height: 475px;
  width: 491px;
  background: linear-gradient(#80ee80,#2c00ff);
  text-align: center;
  align-items: center;
  flex-direction: column;
  display: flex;
  border-radius: 30px;
    }
   h2,h3
   {
    font-size:22px;
    font-weight:bold;
   }
    a
    {
        text-decoration: none;
  display: block;
  color: black;
  font-size: 21px;
  font-weight: bold;
  background-color: white;
  border-radius: 7px;
  margin: 33px;
  transition: transform 0.4s ease, filter 0.3s ease;
  height: 44px;
  width: 208px;
  align-content: center;
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
        <h2>SRM LAB SLOT BOOKING</h2>
        <h3>Admin View</h3><br>
        <a href="slot11.php">Book Slot</a><br>
        
        <a href="deleteslot1.php">Delete and view Slot</a><br>
    </div>
    </div>
</body>
</html>