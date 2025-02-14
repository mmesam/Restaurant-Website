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

    <div id="reservation-form">
        <h2>Reservation Form</h2>
        <form action="process_reservation.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" required><br>

            <label for="phone">Phone:</label>
            <input type="tel" name="phone" required><br>

            <label for="date">Reservation Date:</label>
            <input type="date" name="date" required><br>

            <label for="time">Reservation Time:</label>
            <input type="time" name="time" required><br>

            <input type="submit" value="Submit">
        </form>
    </div>

   

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
