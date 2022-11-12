<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel = "stylesheet" href = "css/style_admin.css">
</head>
<body>
    <div class="admin">
        <h3>Admin Login</h3>
        <form action = "admin_home.php" method = "post">
            <input class = "data" type = "text" name = "username" required placeholder = "Enter Admin Name"><br>
            <input class = "data" type = "password" name = "passkey" required placeholder = "Enter password"><br>
            <input class = "button" type = "submit" value = "Login"><br>
        </form>
    </div>
</body>
</html>