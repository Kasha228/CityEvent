<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    // Redirect the user to the login page if not logged in
    header("Location: registration.php");
    exit();
}

// Get the username from the session
$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Events</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <header>
 <img src="turtle.png" alt="Cityscape" class="header-image">
        <h1>City Events</h1>
<a href="registration.php" class="lg">login</a>
<?php echo htmlspecialchars($username); ?>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#events">Events</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
   
    </header>
    <main>
        <section id="home" class="fade-in">
            <h2>Welcome to City Events!</h2>
            <p>Stay updated with the latest events happening in our city.</p>
        </section>
        <section id="events" class="fade-in">
            <h2>Upcoming Events</h2>
            <div class="event">
                <h3>Concert in the Park</h3>
                <p>Date: May 1, 2024</p>
                <p>Time: 7:00 PM</p>
                <p>Location: Panfilov Park</p>
            </div>

            <div class="event">
                <h3>Stand Up</h3>
                <p>Date: May 1, 2024</p>
                <p>Time: 8:00 PM</p>
                <p>Location: Almaty Central Stand up club</p>
            </div>

            <div class="event">
                <h3>Footbal Match</h3>
                <p>Date: May 2, 2024</p>
                <p>Time: 5:00 PM</p>
                <p>Location: Central Stadium</p>
            </div>

            <div class="event">
                <h3>Military march</h3>
                <p>Date: May 7-8, 2024</p>
                <p>Location: Abay street</p>
            </div>

            <div class="event">
                <h3>Live concert</h3>
                <p>Date: May 15, 2024</p>
                <p>Time: 6:00 PM</p>
                <p>Location: Arbat</p>
            </div>

            <div class="event">
                <h3>Concert</h3>
                <p>Date: May 31, 2024</p>
                <p>Time: 1:00 PM</p>
                <p>Location: Muhtar Auezov theatre</p>
            </div>
            <!-- Add more events here -->
        </section>
        <section id="about" class="fade-in">
            <h2>About creator</h2>
            <p>Kasha228</p>
        </section>
        <section id="contact" class="fade-in">
            <h2>Contact Us</h2>
            <p>Email: info@cityevents.com</p>
            <p>Phone: 123-456-7890</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 City Events</p>
    </footer>
   
</body>
</html>
