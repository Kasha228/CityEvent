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
<br>
   
    </header>
    <main>
        <section id="home" class="fade-in">
            <h2>Welcome to City Events!</h2>
            <p>Stay updated with the latest events happening in our city.</p>
         </section>
          <section id="register" class="fade-in">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br>
                <button type="submit">Login</button>
            </form>
        </section>
<br>
<h2>Do not have account yet? <a href="registration1.php"> Registration</a></h2>



    </main>
   
   
</body>
</html>