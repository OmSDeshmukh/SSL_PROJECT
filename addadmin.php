<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <!-- <link rel = "stylesheet" href = "style_admin.css"> -->
    <style>
        .inner_box{
            display : flex ; 
            flex-direction : row ; 
            margin : 20px;
        }
        .inner_box h4{
            background-color : lightblue ; 
            color : black ;
            font-size : 1.5rem;
        }
        .inner_box input[type="text"] , input[type = "password"]{
            background-color : lightyellow;
        }
        .button{
        text-decoration: none;
        font-family :Georgia, 'Times New Roman', Times, serif;
        padding : 10px;
        background-color :#F6C604;
        color : black; 
        margin-left : 40px;
        margin-right : 40px;
        font-size : 1.5rem;
        border-color : brown ;
        border-radius : 10px;
        margin : 5px;
        }
    </style>
</head>
<body>
    <center>
    <div style = "display : flex ; flex-direction : column; width : 60vw ; justify-content : center;align-items : center;background-color : lightgray;border-radius : 25px;overflow : hidden;">
        <h3 style = "background-color : black ; color : whitesmoke; padding : 5px ; font-size : 1.5rem; margin-top:20px; width : 60vw;">sign in with authorised credentials</h3> 
        <form action = "hereadmindetails.php" method = "post">
            <div class="inner_box">
            <h4>Admin Name</h4><input class = "data" type = "text" name = "username_new" required placeholder = "Enter Admin Name"><br>
            </div>
            <div class="inner_box">
            <h4>Admin Password</h4><input class = "data" type = "password" name = "passkey_new" required placeholder = "Enter password"><br>
            </div>
            <input class = "button" type = "submit" value = "Login"><br><br><br>
        </form>
    </div>
    </center>
</body>
</html>

