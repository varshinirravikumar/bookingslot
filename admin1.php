<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style8.css">
</head>
<body>
  <div class="first">
    <div class="firstpage">
      <h2> LAB SLOT BOOKING</h2>
      <h3>Admin View</h3><br>
      <div class="container">
        <a href="slot11.php">Book Slot</a>
        <a href="fetchonlyslot.php">View Booked Slot to see Availability</a>
      </div>
      <div class="container1">
        <a href="deleteslot1.php">Delete and <br>
          view Slot</a>
      </div>
      <h1>
        <?php
        include 'totalbooking.php'; ?>
      </h1>
    </div>
  </div>
</body>
</html>