<?php
session_start();
unset($_SESSION['passkey']);
unset($_SESSION['username']);
session_destroy();
// print_r($_SESSION);
// echo "loggedout";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged Out !</title>
    <style>
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
<form action = 'home.php'>
<h3>Logged Out Successfully !</h3>
<input class = 'button' type = 'Submit' value='Return Home'>
</form>
</center>    
</body>
</html>