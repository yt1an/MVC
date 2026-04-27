<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    
    <?php
        session_start(); // Starts sessions

        //Checks if meron current key sa session
        if(isset($_SESSION['username'])){
            echo "Hello, " . $_SESSION['username'] . "!";
        } else {
            header("Location: login.php"); // Redirect to login
            exit(); // Stops scripts
        }
    ?>

    <form action="../controllers/Logout.php" method="post">
        <input type="submit" value="Log out">
    </form>

</body>
</html>


