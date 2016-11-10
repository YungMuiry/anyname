<!DOCTYPE html>
<html>
<head>
    <title>My bookings</title>

</head>
<body>
    <h1>My Restaurant</h1>
    <!--this is the booking form-->
    <form method="POST" action="book.php">
        <label>name</label>
        <input type="text" name="namebox">
        <label>Date</label>
        <input type="date" name="datebox"/>
        <label>Time</label>
        <input type="time" name="timebox"/>
        <!--this allows us to check which type of form was used-->
        <input type="hidden" value="book" name="book">
        <input type="submit" value="book">
    
    
    
    <h2>Search for booking</h2>
    <!--this searches for a booking-->
    
    
    

</body>
</html>

<?php