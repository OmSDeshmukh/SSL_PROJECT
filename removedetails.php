<?php
    session_start();
    // echo $_SESSION['passkey_new'];
    if(!isset($_SESSION['passkey_new'])){
        header("Location:logout.php");//database mese koi bhi//destory bhi karnai
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Admin Details</title>
    <style>
        .admin{
    margin : 100px;    
    text-align: center;
    width : 80% ;
    height : 50vh ;
    background-color: grey;
    overflow : auto;
    border-radius : 25px;
}

.admin h3{
    margin-bottom: 0;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    padding-top : 20px;
    height : 50px;
    background-color: black;
    color : whitesmoke ;
}

.inner_box{
    display : flex ;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    margin : 10px;
}

.inner_box h4{
    margin : 10px;
    padding: 2px;
    background-color: aliceblue;  
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

.data{
    font-size : 2rem;
}

    </style>
</head>
<body>
    <div class="admin">
        <h3>ENTER TO REMOVE DETAILS</h3>
        <form action ="databasemairemove.php"  method="POST">
            <div class="inner_box">
                <input class = "data" type = "text" name = "username_admin" required placeholder = "Enter New Admin Name"><br>
            </div>

            <div class="inner_box">
                <input class = "data" type = "password" name = "passkey_admin" required placeholder = "Enter password"><br>
            </div>

            <div class="inner_box">
                <input class ="data" type="password" name="passkey_admin_confirm" required placeholder ="Reconfirm Password"><br>
            </div>
            <input class = "button" type = "submit" value = "SUBMIT"><br><br><br>
        </form>
    </div>
    
</body>
</html>
<?php
// session_start();
unset($_SESSION['passkey_new']);
unset($_SESSION['username_new']);
session_destroy();
// print_r($_SESSION);
// echo "loggedout";
?>