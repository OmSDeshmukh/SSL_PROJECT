<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "css/style_admin.css">
</head>
<body>
    <form action = 'home.php'><input type = 'submit' value = 'Back to Home'></form>
    <div class = "box">
        
        <div class="admin">
        
            <h3>Add a Result :</h3><br>
            <form method = "post" action = "admin_home_actual.php">
                <input class = "data"  id = "textarea" type = "textarea" name = "announce" placeholder = "Type Here"><br>
                <input class = "button" type = "submit" value = "submit">
            </form>
        

            <?php
                $conn = new mysqli("localhost" , "root" , "" , "announcements");
                $text_add = $_POST["announce"];
                $sql = "INSERT INTO results (annouce) VALUES('$text_add')";
                if($conn->query($sql) === TRUE){
                    echo"
                    <p style = 'background-color:green;color:black;margin-bottom:10px;'>
                    Announcement successfully added !
                    </p>";
                }
                else{
                    echo"
                    <p style = 'background-color:yellow;color:red;margin-bottom:10px;'>
                    error adding a result , try again :(
                    </p>";
                }
            ?>
        </div>

        <div class = "admin">
            <h3>Add a Fixture :</h3><br>
            <div class = "inner_box">
                <h4>Select College 1 :</h4>
        <form method = "post" action = "admin_home_actual.php">
                    <select id = "clg1" name = "clg1">
                        <option value = "IIT Dharwad">IIT Dharwad</option>
                        <option value = "IIT Bombay">IIT Bombay</option>
                        <option value = "IIT Roorkee">IIT Roorkee</option>
                        <option value = "IIT Kharagpur">IIT Kharagpur</option>
                        <option value = "IIT Kanpur">IIT Kanpur</option>
                        <option value = "IIT Madras">IIT Madras</option>
                        <option value = "IIT Guhuwati">IIT Guhuwati</option>
                        <option value = "IIT Dhanbad">IIT Dhanbad</option>
                        <option value = "IIT Hyderabad">IIT Hyderabad</option>
                        <option value = "IIT Gandhinagar">IIT Gandhinagar</option>
                        <option value = "IIT Ropar">IIT Ropar</option>
                        <option value = "IIT Varanasi">IIT Varanasi</option>
                        <option value = "IIT Bhubneshwar">IIT Bhubneshwar</option>
                        <option value = "IIT Jodhpur">IIT Patna</option>
                        <option value = "IIT Indore">IIT Indore</option>
                        <option value = "IIT Tirupati">IIT Tirupati</option>
                        <option value = "IIT Goa">IIT Goa</option>
                        <option value = "IIT Pallakad">IIT Pallakad</option>
                        <option value = "IIT Bhilai">IIT Bhilai</option>
                        <option value = "IIT Jammu">IIT Jammu</option>
                    </select><br>

            </div>

            <div class = "inner_box">
                
                <h4>Select College 2 :</h4>
                    <select id = "clg2" name = "clg2">
                        <option value = "IIT Dharwad">IIT Dharwad</option>
                        <option value = "IIT Bombay">IIT Bombay</option>
                        <option value = "IIT Roorkee">IIT Roorkee</option>
                        <option value = "IIT Kharagpur">IIT Kharagpur</option>
                        <option value = "IIT Kanpur">IIT Kanpur</option>
                        <option value = "IIT Madras">IIT Madras</option>
                        <option value = "IIT Guhuwati">IIT Guhuwati</option>
                        <option value = "IIT Dhanbad">IIT Dhanbad</option>
                        <option value = "IIT Hyderabad">IIT Hyderabad</option>
                        <option value = "IIT Gandhinagar">IIT Gandhinagar</option>
                        <option value = "IIT Ropar">IIT Ropar</option>
                        <option value = "IIT Varanasi">IIT Varanasi</option>
                        <option value = "IIT Bhubneshwar">IIT Bhubneshwar</option>
                        <option value = "IIT Jodhpur">IIT Patna</option>
                        <option value = "IIT Indore">IIT Indore</option>
                        <option value = "IIT Tirupati">IIT Tirupati</option>
                        <option value = "IIT Goa">IIT Goa</option>
                        <option value = "IIT Pallakad">IIT Pallakad</option>
                        <option value = "IIT Bhilai">IIT Bhilai</option>
                        <option value = "IIT Jammu">IIT Jammu</option>
                    </select>
                
            </div>

                
            <div class = "inner_box">
                <h4>Select Sport :</h4>
                <select id = "sport" name = "sport">
                    <option value = "football">football</option>
                </select>
            </div>
            
            <div class="inner_box">
                <h4>Venue:</h4>
                <select id = "venue" name = "venue">
                    <option value = "Football Ground 1">Football Ground 1</option>
                    <option value = "Football Ground 2">Football Ground 2</option>
                </select>
            </div>

            <div class="inner_box">
                <h4>Time</h4>
                <select id = "time" name = "time">
                    <option value = "8:00AM">8:00AM</option>
                    <option value = "10:00AM">10:00AM</option>
                    <option value = "12:00PM">12:00PM</option>
                </select>
            </div>
            <input class = "button" type = "submit" value = "Submit">
        </form>    
        
            <?php
                if($_POST['clg1'] == $_POST['clg2']){
                    echo"
                    <p style = 'background-color:yellow ; color:red;padding-bottom:10px;'>
                    Cant have match with itself !
                    </p>
                    ";
                }  
                else{
                    $venue = $_POST['venue'] ; $time = $_POST['time'];
                    $conn = new mysqli("localhost" , "root" , "" , "db");
                    $sql = "SELECT venue , time_ FROM fixtures WHERE venue = '$venue' and time_ = '$time'";
                    $result = $conn->query($sql);
                    if($result -> num_rows > 0){
                        echo"
                        <p style = 'background-color:yellow ; color:red;padding-bottom:10px;'>
                        Venue and time already taken , try another one !
                        </p>
                        ";
                    }
                    else{
                        $clg1 = $_POST['clg1'] ; $clg2 = $_POST['clg2'];
                        $sport = $_POST['sport'];
                        $venue = $_POST['venue'] ; $time = $_POST['time'];
                        
                        $conn = new mysqli("localhost" , "root" , "" , "db");
                        $sql = "INSERT INTO fixtures (clg1 , clg2 , sport , venue , time_) VALUES('$clg1','$clg2','$sport','$venue','$time')";
                        if($conn->query($sql)===TRUE){
                            echo"
                            <p style = 'background-color : green ; color : black;'>
                                Fixture Successfully Added !<br>
                            </p>
                            ";
                        }
                    }
                }
            ?>
        </div>
            
        <div class="admin">
            <h3>Add Points</h3>
            <form action = "admin_home_actual.php" method="post">
                <div class="inner_box">
                    <h4>Select College</h4>
                    <select id = "abc" name = "clg">
                        <option value = "IIT Dharwad">IIT Dharwad</option>
                        <option value = "IIT Bombay">IIT Bombay</option>
                        <option value = "IIT Roorkee">IIT Roorkee</option>
                        <option value = "IIT Kharagpur">IIT Kharagpur</option>
                        <option value = "IIT Kanpur">IIT Kanpur</option>
                        <option value = "IIT Madras">IIT Madras</option>
                        <option value = "IIT Guhuwati">IIT Guhuwati</option>
                        <option value = "IIT Dhanbad">IIT Dhanbad</option>
                        <option value = "IIT Hyderabad">IIT Hyderabad</option>
                        <option value = "IIT Gandhinagar">IIT Gandhinagar</option>
                        <option value = "IIT Ropar">IIT Ropar</option>
                        <option value = "IIT Varanasi">IIT Varanasi</option>
                        <option value = "IIT Bhubneshwar">IIT Bhubneshwar</option>
                        <option value = "IIT Jodhpur">IIT Patna</option>
                        <option value = "IIT Indore">IIT Indore</option>
                        <option value = "IIT Tirupati">IIT Tirupati</option>
                        <option value = "IIT Goa">IIT Goa</option>
                        <option value = "IIT Pallakad">IIT Pallakad</option>
                        <option value = "IIT Bhilai">IIT Bhilai</option>
                        <option value = "IIT Jammu">IIT Jammu</option>
                    </select>

                </div>
                <div class="inner_box">
                    <h4>Points</h4>
                    <select id = "p" name = "p">
                    <option value = 0>0</option>
                        <option value = -1>-1</option>
                        <option value = 1>1</option>
                        <option value = 2>2</option>
                    </select>
                </div>
                <div class="inner_box">
                    <h4>Select sport</h4>
                    <select id = "s" name = "s">
                    <option value = "football">Football</option>
                        <option value = "cricket">Cricket</option>
                    </select>
                </div>
                <input class = "button" type = "submit" value = "Submit"> 
            </form>

            <?php
                $clg = $_POST['clg'];
                $poi = $_POST['p'];
                $spo = $_POST['s'];
                $conn = new mysqli("localhost" , "root" ,"" ,"db");
                if($spo = "football"){
                $sql = "SELECT college , football_points , total_points FROM points WHERE college = '$clg'";
                    $result1 = $conn->query($sql);
                    if($result1->num_rows >0){
                    while($result = $result1->fetch_assoc()){
                    // if($result->num_rows == 1){
                    $new = $result['football_points'] + $poi ;
                    $newt = $result['total_points'] + $poi ; 
                        $sql2 ="UPDATE points SET football_points = $new , total_points = $newt WHERE college = '$clg'";
                        if($conn->query($sql2) == TRUE){
                            echo"Points added successfully haha !<br>";
                        }
                        else{
                            echo"some error!";
                        }
                    }
                    }
                    // }
                    else{
                        echo"error in selection!<br>";
                    }
                }
                else{
                    $sql = "SELECT college , cricket_points , total_points FROM points WHERE college = '$clg'";
                    $result1 = $conn->query($sql);
                    $result = $result1->fetch_assoc();
                    // if(result->num_rows == 1){
                    $new = $result['cricket_points'] + $poi ;
                    $newt = $result['total_points'] + $poi ;
                        $sql2 ="UPDATE points SET cricket_points = $new , total_points = $newt WHERE college = '$clg'";
                        if($conn->query($sql2) == TRUE){
                            echo"Points added successfully !<br>";
                        }
                        else{
                            echo"some error!";
                        }
                    // }
                    // else{
                    //     echo"erroe2!<br>";
                    // }
                }
            ?>

        </div>
    </div>
</body></html>