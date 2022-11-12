<?php
    session_start();    
    if(!isset($_POST['username_admin'])){
        if(!isset($_POST['passkey_admin'])){
            // header("Location :logout.php");
             echo "!!DIRECT UNAUTHORISED ACCESS!! ";
             echo "
             <html>
             <body>
             <form action = 'home.php'>
             <input class = 'button' type = 'Submit' value='homePage'>
             UNAUTHORISED ACESS!!
             click to navigate to home
             </form>
             </body></html>";
    }
    }
    else{
    $_SESSION['username_admin']=$_POST['username_admin'];
    $_SESSION['passkey_admin']=$_POST['passkey_admin'];
    $X=$_POST['username_admin'];
    $Y=$_POST['passkey_admin'];
    $_SESSION['passkey_admin_confirm']=$_POST['passkey_admin_confirm'];
    // echo $_POST['passkey_admin'];
    // echo $_POST['username_admin'];

            if($_SESSION['passkey_admin']==$_SESSION['passkey_admin_confirm']){
                //header("Location:omquery.php");
                // header("Location: admin_home_actual.php");
                $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                $sql= "INSERT INTO admin_data VALUES('$X','$Y')";
                    if($conn->query($sql)==TRUE){
                        echo "added successfully";
                    ?>
                    <!DOCTYPE html>
                    <head>
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
                    <html>
                    <body>
                        <form action = "home.php">
                            <input type = "submit" value = "Return Home" class = "button">
                        </form>
                    </body>
                    </html>
                <?php
                }
            }
            else{
                echo "passwords do not match";
                // echo <a href="enterdetails.php"><input type = "button" value="back"></a>
                echo '<a href="enterdetails.php"><input class = "button" value="back" type="submit"></a>';
            }
        }    ?>
<?php
unset($_SESSION['username_admin']);
unset($_SESSION['passkey_admin']);
?>
