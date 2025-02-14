<!DOCTYPE html>
<html>
<head>
    <title>Johnson's Mix - Reservation</title>
    <link rel="stylesheet" type="text/css" href="Res.css">
</head>
<body>
    <div id="nav-bar">
        <ul class="bars">
        <h1>JOHNSON'S MIX</h1>
            <p><a href="JohnsonMix.html">Home</a></p>
            <p><a href="location.html">Location</a></p>
            <p><a href="aboutus.html">About us</a></p>
            <p><a href="menu.html">Menu</a></p>
            <p><a href="specials.html">Specials</a></p>
            <p><a href="Order.html">Order Now</a></p>
            <p><a href="Reservation.php">Reservations</a></p>
        </ul>
    </div>
    <div id="background"></div>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    
    if (empty($name) || empty($email) || empty($phone) || empty($date) || empty($time)) {
        die("Please fill out all fields");
    }

    // Display the reservation information
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<div id='user-info'>";
        echo "<h2>User Information</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Date</th><th>Time</th></tr>";
        echo "<tr>";
        echo "<td>" . $_POST["name"] . "</td>";
        echo "<td>" . $_POST["email"] . "</td>";
        echo "<td>" . $_POST["phone"] . "</td>";
        echo "<td>" . $_POST["date"] . "</td>";
        echo "<td>" . $_POST["time"] . "</td>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
    }

    
} else {
    // If someone tries to access this page directly without submitting the form
    header("Location: JohnsonMix.html");
    exit();
}
?>
<div id="banner">
        <div class="bottom">
            <img src="Screenshot 2023-11-24 203813.png">
            <img src="tik.png">
            <img src="x.png">
        </div>
        <h1 class="header">COPYRIGHT © 2023  JOHNSON'S MIX - ALL RIGHTS RESERVED.</h1>
    </div>
</body>
</html>
