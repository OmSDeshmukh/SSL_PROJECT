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
        $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
        $counter=0;
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['passkey'] = $_POST['passkey'];
        $sql="SELECT * FROM admin_data ";
        $result=$conn->query($sql);
        if($result->num_rows>0)//query
        {
            while($row =$result->fetch_assoc())
            {
                if($row['username']==$_SESSION['username'] && $row['passkey']==$_SESSION['passkey'])
                {
                    $counter =$counter + 1;
                }
            }
        }
        if($counter==0){
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
        else
        {    
            header("Location: admin_home_actual.php");
        }
    ?>    
</body>
</html>


