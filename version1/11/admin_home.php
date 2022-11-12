<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link rel = "stylesheet" href = "style_admin.css">
</head>
<body>
    <?php
        $conn = new mysqli("localhost" , "root" , "" , "admins");
        $username = $_POST['username'];
        $passkey = $_POST['passkey'];
        
        $sql = "SELECT username , passkey FROM admin_data WHERE username = '$username' AND passkey = '$passkey'";
        $result = $conn->query($sql);
        if($result->num_rows > 0 ){
            // echo"Welcome".$username ;
            header("Location: admin_home_actual.php");
        }
        else{
            
            echo"<html><body>
            <div class = 'admin'>
                <h3>Unauthorised Access !</h3>
                <form action = 'admin_login.php'>
                    <input class = 'button' type = 'submit' value ='Back to login page'>
                </form>
            </div>
            </body></html>
            ";
        }
    ?>    
</body>
</html>


