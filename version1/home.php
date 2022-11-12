<?php
    if(session_status() === PHP_SESSION_ACTIVE){
        session_destroy();
    }
    session_start();
?>

<?php
    //connecting to server of phpmyadmin :
    $conn = new mysqli("localhost" , "root" , "");
    if(!($conn->error))
    {
        echo"Connected to server successfully !<br>";
    }

    //creating database for SSLPROJECT : 
    $sql = "CREATE DATABASE IF NOT EXISTS SSLPROJECT";
    if($conn->query($sql) === TRUE)
    {
        echo"Database created successfully !<br>";
    }
    else
    {
        echo"Database already exists ! <br>";
    }

    //connecting to database SSLPROJECT: 
    $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
    if(!($conn->error))
    {
        echo"Connected to database of SSLPROJECT succesfully !<br>";
    }

    //creating table for annoucements : 
    $sql = "CREATE TABLE IF NOT EXISTS results
    (
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        annouce VARCHAR(255)
    )";

    if($conn->query($sql) === TRUE)
    {
        echo"Created table for announcements successfully !<br>";
    }
    else
    {
        echo"Some error in creating table of announcements";
    }

     
    //$conn = new mysqli("localhost" , "root" , "");
    //$sql = "CREATE DATABASE IF NOT EXISTS admins";
    // if($conn->query($sql) === TRUE){
    //     echo"Created database for admins succesfully !<br>";
    // }
    // else{
    //     echo"Error creating database for admins <br>";
    // }
    //creating table for admin_data for login signup purpose : 
    // $conn = new mysqli("localhost" , "root" , "" , "admins");
    //creating table for admin data :
    $sql =  "CREATE TABLE IF NOT EXISTS admin_data
    (
        username VARCHAR(30) NOT NULL PRIMARY KEY,
        passkey VARCHAR(30) NOT NULL 
    )";
    if($conn->query($sql) === TRUE){
        echo"Created table of admin_data<br>";
    }
    else{
        echo"Error creating table for admin_data !<br>";
    }

    //adding main admin so that he can add more admins or not and he is the sole controller of the database:
    //username : admin_main
    //passkey : 123 
    // $conn = new mysqli("localhost" , "root" , "" , "admins");
    $sql = "SELECT username FROM admin_data WHERE username = 'admin_main'";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        echo"admin_main already exists !<br>";
    }
    else
    {
        $sql = "INSERT INTO admin_data(username , passkey) VALUES('admin_main','123')";
        if($conn->query($sql) === TRUE)
        {
            echo"admin_main added<br>";
        }
        else
        {
            echo"admin_main dosent exist and error in adding !<br>";
        }
    }

    //creating database for fixtures
    //$conn = new mysqli("localhost" , "root" , "");
    // $sql = "CREATE DATABASE IF NOT EXISTS db";
    // if($conn->query($sql) === TRUE){
    //     echo"Created database db!<br>";
    // }
    // else{
    //     echo"error creating database db<br>";
    // }

    // $conn = new mysqli("localhost","root","","db");
    //creating table for of fixtures
    $sql = "CREATE TABLE IF NOT EXISTS fixtures
            (
            clg1 VARCHAR(50) NOT NULL,
            clg2 VARCHAR(50) NOT NULL,
            sport VARCHAR(20) NOT NULL,
            venue VARCHAR(50) NOT NULL ,
            time_ VARCHAR(30) NOT NULL
            )";

    if($conn->query($sql) === TRUE){
        echo"Success in creating table of fixtures !<br>";
    }
    else{
        echo "error creating table of fixtues !!!!!<br>";
    }

    //making table for points in db :
    //$conn = new mysqli("localhost" , "root" , "" , "db");
    $sql = "CREATE TABLE IF NOT EXISTS points
        (
            college VARCHAR(30) NOT NULL ,
            football_points INT(6) DEFAULT 0 ,
            cricket_points INT(6) DEFAULT 0,
            total_points INT(6) DEFAULT 0
        )";

    if($conn->query($sql) === TRUE)
    {
        echo"Success in creating table of points<br>";
    }
    else
    {
        echo"ERROR !!! in creating table of points<br>";
    }

    //entering all iits with 0 points into the table
    $sql = "INSERT INTO points(college)VALUES('IIT-Kharagpur')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Bombay')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Madras')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Kanpur')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Delhi')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Guhuwati')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Roorkee')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Ropar')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Bhubneshwar')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Gandhinagar')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Hyderabad')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Jodhpur')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Patna')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Indore')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Mandi')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Varanasi')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Pallakkad')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Tirupati')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Dhanbad')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Bhilai')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Dharwad')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Jammu')";
    if($conn->query($sql) === TRUE){echo"Success !!<br>";}
    else{echo"ERROR<br>";}
    $sql = "INSERT INTO  points(college)VALUES('IIT-Goa')";
    if($conn->query($sql) === TRUE){echo"Success last!!<br>";}
    else{echo"ERROR<br>";}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "css/style.css">
</head>
<body>

    <div class="header">
        <form action = "admin_login.php">
        <input id = "admin_login" type="submit" value = "Admin Login">
        </form>
        <p id = "title">INTER IIT SPORTS MEET</p>
        <form action = "search.php">
            <img id = "search" src = "images/search.png" alt = "">
            <input type = "text" name = "search_by_college" id = "search_by_college" placeholder= "seach by college">
        </form>
    </div>

    <div class="buttons">
        <a href = "https://iitdh.ac.in"><img id = "host_logo" src = "images/iitdhlogo.png" alt ="Inter IIT Host" target = "_blank" class = ""></a>
        
        <input class = "button" type = "submit" value = "Fixtures">

        <form action = "points.php">
        <input class = "button" type = "submit" value = "Points">
        </form>

        <input class = "button" type = "submit" value = "Statistics">
        
        <form action = "contact.php">
        <input class = "button" type = "submit" value = "Contact Us">
        </form>
        
        <a href = "https://iitdh.ac.in"><img id = "host_logo" src = "images/khelo_india.png" alt ="Inter IIT Host" target = "_blank" class = ""></a>    
    </div>

    <div class = "content">
        <div class = "content1" id = "results">
            <h3>Latest Results !</h3>
            <center>
                <?php
                    $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                    $sql = "SELECT DISTINCT annouce FROM results ORDER BY id DESC";
                    $result = $conn->query($sql);
                    if($result -> num_rows > 0)
                    {
                        echo"<ul style = 'font-size : 1.2rem; overflow : scroll;width : 40vw;
                        height : 70vh; '>";
                        while($row = $result->fetch_assoc())
                        {
                            echo"<li style='list-style-type:none ;
                                            padding-top :10px;
                                            padding-bottom:10px;  
                                            text-align:center;
                                            margin-top : 5px;margin-bottom : 5px;
                                            border : 2px solid brown;'>";
                            echo"".$row["annouce"];
                            echo"</li><hr>";
                        }
                        echo"</ul>";
                    }
                    else
                    {
                        echo"No announcements yet !<hr>";
                    }
                         
                ?>
            </center>        
        </div>

        <div class = "content1" id = "events">
        <h3>Upcoming Events!</h3>
        </div>
    </div>

    <div class = "participants">
        <div>
            <h3>Participants List</h3>
            <a href = "https://www.iitdh.ac.in" alt ="IIT DHARWAD"><input type = "button" value = "IIT Dharwad"></a>
            <a href = "https://www.iitb.ac.in/" target = "_blank"><input type="button" value = "IIT Bombay"></a>
            <a href = "https://www.iitr.ac.in/" target = "_blank"><input type="button" value = "IIT Roorkee"></a>
            <a href = "https://www.iitkgp.ac.in/" target = "_blank"><input type="button" value = "IIT Kharagpur"></a>
            <a href = "https://www.iitk.ac.in/" target = "_blank"><input type="button" value = "IIT Kanpur"></a>
            <a href = "https://www.iitm.ac.in/" target = "_blank"><input type="button" value = "IIT Madras"></a>
            <a href = "https://www.iitg.ac.in/" target = "_blank"><input type="button" value = "IIT Guhuwati"></a>
            <a href = "https://www.iitism.ac.in/" target = "_blank"><input type="button" value = "IIT Dhanbad"></a>
            <a href = "https://www.iith.ac.in/" target = "_blank"><input type="button" value = "IIT Hyderabad"></a>
            <a href = "https://www.iitmandi.ac.in/" target = "_blank"><input type="button" value = "IIT Mandi"></a>
            <a href = "https://www.iitgn.ac.in/" target = "_blank"><input type="button" value = "IIT Gandhinagar"></a>
            <a href = "https://www.iitrpr.ac.in/" target = "_blank"><input type="button" value = "IIT Ropar"></a>
            <a href = "https://www.iitbhu.ac.in/" target = "_blank"><input type="button" value = "IIT Varanasi"></a>
            <a href = "https://www.iitbbs.ac.in/" target = "_blank"><input type="button" value = "IIT Bhubneshwar"></a>
            <a href = "https://www.iitp.ac.in/" target = "_blank"><input type="button" value = "IIT Patna"></a>
            <a href = "https://www.iitj.ac.in/" target = "_blank"><input type="button" value = "IIT Jodhpur"></a>
            <a href = "https://www.iiti.ac.in/" target = "_blank"><input type="button" value = "IIT Indore"></a>
            <a href = "https://www.iittp.ac.in/" target = "_blank"><input type="button" value = "IIT Tirupati"></a>
            <a href = "https://www.iitgoa.ac.in/" target = "_blank"><input type="button" value = "IIT Goa"></a>
            <a href = "https://www.iitpkd.ac.in/" target = "_blank"><input type="button" value = "IIT Pallakkad"></a>
            <a href = "https://www.iitbhilai.ac.in/" target = "_blank"><input type="button" value = "IIT Bhilai"></a>
            <a href = "https://www.iitjammu.ac.in/" target = "_blank"><input type="button" value = "IIT Jammu"></a>
        </div>
    </div>

</body>
</html>