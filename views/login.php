<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <form action="../controllers/AuthController.php" method="post">
        User ID: <input type="text" name="id" id="">
        Password: <input type="password" name="password" id="">
        <input type="submit" value="Submit">
    </form>
</body>
</html>