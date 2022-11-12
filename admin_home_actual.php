<?php
    session_start();
    // echo $_SESSION['passkey'];
    if(!isset($_SESSION['passkey'])){
        header("Location:logout.php");//database mese koi bhi
    }
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
    <form action = 'logout.php'><input type = 'submit' value = 'Back to Home'></form>
    <div class = "box">
        
        <div class="admin" >
            <h3>Select ongoing day</h3>
            <form action = "admin_home_actual.php" method = "post">
                <div class="inner_box">
                    <h4>Day</h4>
                    <select id = "day" name = "day_">
                        <option value = "Day 1">Day 1</option>
                        <option value = "Day 2">Day 2</option>
                        <option value = "Day 3">Day 3</option>
                        <option value = "Day 4">Day 4</option>
                        <option value = "Day 5">Day 5</option>
                    </select>
                </div>
                <input class = "button" type = "submit" name="DAY" value = "Submit">
            </form>

            <?php
            if(isset($_POST['DAY']))
            {
            $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
            $dayx = $_POST['day_'];
            $sql =  "INSERT INTO ongoing_day VALUES('$dayx')";

            if($conn->query($sql) == TRUE)
            {
                echo"Success in updating current day";
            }
            else
            {
                echo"error in adding current day";
            }
            
            }
        ?>
        </div>

        <div class="admin">
        
            <h3>Add an Announcement :</h3><br>
            <form method = "post" action = "admin_home_actual.php">
                <input class = "data"  id = "textarea" type = "textarea" name = "announce" placeholder = "Type Here"><br>
                <input class = "button" type = "submit" name="addresult" value = "submit">
            </form>
        

            <?php
            if(isset($_POST['addresult']))
            {
                $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                $text_add = $_POST["announce"];
                $sql = "INSERT INTO results (annouce) VALUES('$text_add')";
                if($conn->query($sql) === TRUE)
                {
                    echo"
                    <p style = 'background-color:green;color:black;margin-bottom:10px;'>
                    Announcement successfully added !
                    </p>";
                }
                else
                {
                    echo"
                    <p style = 'background-color:yellow;color:red;margin-bottom:10px;'>
                    error adding a result , try again :(
                    </p>";
                }
            }
            // }
            // else{echo"raju"}
            // 
            ?>
        </div>

        <div class = "admin">
            <h3>Add a Football Fixture :</h3><br>
            <div class = "inner_box">
                <h4>Select College 1 :</h4>
        <form method = "post" action = "admin_home_actual.php">
                    <select id = "clg1" name = "clg1">
                        <option value = "IIT-Dharwad">IIT Dharwad</option>
                        <option value = "IIT-Bombay">IIT Bombay</option>
                        <option value = "IIT-Roorkee">IIT Roorkee</option>
                        <option value = "IIT-Kharagpur">IIT Kharagpur</option>
                        <option value = "IIT-Kanpur">IIT Kanpur</option>
                        <option value = "IIT-Madras">IIT Madras</option>
                        <option value = "IIT-Guhuwati">IIT Guhuwati</option>
                        <option value = "IIT-Dhanbad">IIT Dhanbad</option>
                        <option value = "IIT-Hyderabad">IIT Hyderabad</option>
                        <option value = "IIT-Gandhinagar">IIT Gandhinagar</option>
                        <option value = "IIT-Ropar">IIT Ropar</option>
                        <option value = "IIT-Varanasi">IIT Varanasi</option>
                        <option value = "IIT-Bhubneshwar">IIT Bhubneshwar</option>
                        <option value = "IIT-Patna">IIT Patna</option>
                        <option value = "IIT-Jodhpur">IIT Jodhpur</option>
                        <option value = "IIT-Indore">IIT Indore</option>
                        <option value = "IIT-Tirupati">IIT Tirupati</option>
                        <option value = "IIT-Goa">IIT Goa</option>
                        <option value = "IIT-Pallakad">IIT Pallakad</option>
                        <option value = "IIT-Bhilai">IIT Bhilai</option>
                        <option value = "IIT-Jammu">IIT Jammu</option>
                        <option value = "IIT-Delhi">IIT Delhi</option>
                        <option value = "IIT-Mandi">IIT Mandi</option>
                    </select><br>

            </div>

            <div class = "inner_box">
                
                <h4>Select College 2 :</h4>
                    <select id = "clg2" name = "clg2">
                        <option value = "IIT-Dharwad">IIT Dharwad</option>
                        <option value = "IIT-Bombay">IIT Bombay</option>
                        <option value = "IIT-Roorkee">IIT Roorkee</option>
                        <option value = "IIT-Kharagpur">IIT Kharagpur</option>
                        <option value = "IIT-Kanpur">IIT Kanpur</option>
                        <option value = "IIT-Madras">IIT Madras</option>
                        <option value = "IIT-Guhuwati">IIT Guhuwati</option>
                        <option value = "IIT-Dhanbad">IIT Dhanbad</option>
                        <option value = "IIT-Hyderabad">IIT Hyderabad</option>
                        <option value = "IIT-Gandhinagar">IIT Gandhinagar</option>
                        <option value = "IIT-Ropar">IIT Ropar</option>
                        <option value = "IIT-Varanasi">IIT Varanasi</option>
                        <option value = "IIT-Bhubneshwar">IIT Bhubneshwar</option>
                        <option value = "IIT-Patna">IIT Patna</option>
                        <option value = "IIT-Jodhpur">IIT Jodhpur</option>
                        <option value = "IIT-Indore">IIT Indore</option>
                        <option value = "IIT-Tirupati">IIT Tirupati</option>
                        <option value = "IIT-Goa">IIT Goa</option>
                        <option value = "IIT-Pallakad">IIT Pallakad</option>
                        <option value = "IIT-Bhilai">IIT Bhilai</option>
                        <option value = "IIT-Jammu">IIT Jammu</option>
                        <option value = "IIT-Delhi">IIT Delhi</option>
                        <option value = "IIT-Mandi">IIT Mandi</option>
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
                    <option value = "12:00AM">12:00AM</option>
                </select>
            </div>

            <div class="inner_box">
                <h4>Day</h4>
                <select id = "day" name = "day_">
                    <option value = "Day 1">Day 1</option>
                    <option value = "Day 2">Day 2</option>
                    <option value = "Day 3">Day 3</option>
                    <option value = "Day 4">Day 4</option>
                    <option value = "Day 5">Day 5</option>
                </select>
            </div>

            <input class = "button" type = "submit" name="changefix" value = "Submit">
        </form>
        
            <?php
            if(isset($_POST['changefix']))
            {
                if($_POST['clg1'] == $_POST['clg2'])
                {
                    echo"
                    <p style = 'background-color:yellow ; color:red;padding-bottom:10px;'>
                    Cannot have match with itself !
                    </p>
                    ";
                }  
                else
                {
                    $venue = $_POST['venue'] ; 
                    $time = $_POST['time'];
                    $day=$_POST['day'];
                    $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                    $sql = "SELECT venue , time_ FROM fixtures WHERE venue = '$venue' and time_ = '$time' and day_ = '$day' " ;
                    $result = $conn->query($sql);
                    if($result -> num_rows > 0)
                    {
                        echo"
                        <p style = 'background-color:yellow ; color:red;padding-bottom:10px;'>
                        Venue and time already taken , try another one !
                        </p>
                        ";
                    }
                    else
                    {
                        $clg1 = $_POST['clg1'] ; 
                        $clg2 = $_POST['clg2'];
                        $sport = $_POST['sport'];
                        $venue = $_POST['venue'] ;
                        $time = $_POST['time'];
                        $day=$_POST['day'];
                        $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                        $sql = "INSERT INTO fixtures (clg1 , clg2 , sport , venue , time_, day_) VALUES('$clg1','$clg2','$sport','$venue','$time','$day')";
                        if($conn->query($sql)===TRUE)
                        {
                            echo"
                            <p style = 'background-color : green ; color : black;'>
                                Fixture Successfully Added !<br>
                            </p>
                            ";
                        }
                    }
                }
            }
            ?>
        </div>

        <div class = "admin">
            <h3>Delete a Football Fixture :</h3><br>
            <div class = "inner_box">
                <h4>Select College 1 :</h4>
        <form method = "post" action = "admin_home_actual.php">
                    <select id = "clg1" name = "clg1">
                        <option value = "IIT-Dharwad">IIT Dharwad</option>
                        <option value = "IIT-Bombay">IIT Bombay</option>
                        <option value = "IIT-Roorkee">IIT Roorkee</option>
                        <option value = "IIT-Kharagpur">IIT Kharagpur</option>
                        <option value = "IIT-Kanpur">IIT Kanpur</option>
                        <option value = "IIT-Madras">IIT Madras</option>
                        <option value = "IIT-Guhuwati">IIT Guhuwati</option>
                        <option value = "IIT-Dhanbad">IIT Dhanbad</option>
                        <option value = "IIT-Hyderabad">IIT Hyderabad</option>
                        <option value = "IIT-Gandhinagar">IIT Gandhinagar</option>
                        <option value = "IIT-Ropar">IIT Ropar</option>
                        <option value = "IIT-Varanasi">IIT Varanasi</option>
                        <option value = "IIT-Bhubneshwar">IIT Bhubneshwar</option>
                        <option value = "IIT-Patna">IIT Patna</option>
                        <option value = "IIT-Jodhpur">IIT Jodhpur</option>
                        <option value = "IIT-Indore">IIT Indore</option>
                        <option value = "IIT-Tirupati">IIT Tirupati</option>
                        <option value = "IIT-Goa">IIT Goa</option>
                        <option value = "IIT-Pallakad">IIT Pallakad</option>
                        <option value = "IIT-Bhilai">IIT Bhilai</option>
                        <option value = "IIT-Jammu">IIT Jammu</option>
                        <option value = "IIT-Delhi">IIT Delhi</option>
                        <option value = "IIT-Mandi">IIT Mandi</option>
                    </select><br>

            </div>

            <div class = "inner_box">
                
                <h4>Select College 2 :</h4>
                    <select id = "clg2" name = "clg2">
                        <option value = "IIT-Dharwad">IIT Dharwad</option>
                        <option value = "IIT-Bombay">IIT Bombay</option>
                        <option value = "IIT-Roorkee">IIT Roorkee</option>
                        <option value = "IIT-Kharagpur">IIT Kharagpur</option>
                        <option value = "IIT-Kanpur">IIT Kanpur</option>
                        <option value = "IIT-Madras">IIT Madras</option>
                        <option value = "IIT-Guhuwati">IIT Guhuwati</option>
                        <option value = "IIT-Dhanbad">IIT Dhanbad</option>
                        <option value = "IIT-Hyderabad">IIT Hyderabad</option>
                        <option value = "IIT-Gandhinagar">IIT Gandhinagar</option>
                        <option value = "IIT-Ropar">IIT Ropar</option>
                        <option value = "IIT-Varanasi">IIT Varanasi</option>
                        <option value = "IIT-Bhubneshwar">IIT Bhubneshwar</option>
                        <option value = "IIT-Patna">IIT Patna</option>
                        <option value = "IIT-Jodhpur">IIT Jodhpur</option>
                        <option value = "IIT-Indore">IIT Indore</option>
                        <option value = "IIT-Tirupati">IIT Tirupati</option>
                        <option value = "IIT-Goa">IIT Goa</option>
                        <option value = "IIT-Pallakad">IIT Pallakad</option>
                        <option value = "IIT-Bhilai">IIT Bhilai</option>
                        <option value = "IIT-Jammu">IIT Jammu</option>
                        <option value = "IIT-Delhi">IIT Delhi</option>
                        <option value = "IIT-Mandi">IIT Mandi</option>
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
                    <option value = "12:00AM">12:00AM</option>
                </select>
            </div>

            <div class="inner_box">
                <h4>Day</h4>
                <select id = "day" name = "day_">
                    <option value = "Day 1">Day 1</option>
                    <option value = "Day 2">Day 2</option>
                    <option value = "Day 3">Day 3</option>
                    <option value = "Day 4">Day 4</option>
                    <option value = "Day 5">Day 5</option>
                </select>
            </div>

            <input class = "button" type = "submit" name="deletefixf" value = "Submit">
        </form>
        
            <?php
            if(isset($_POST['deletefixf']))
            {
                if($_POST['clg1'] == $_POST['clg2'])
                {
                    echo"
                    <p style = 'background-color:yellow ; color:red;padding-bottom:10px;'>
                    such a fixture can't exist
                    </p>
                    ";
                }  
                else
                {
                    $clg1=$_POST["clg1"];
                    $clg2=$_POST["clg2"];
                    $venue = $_POST['venue'] ; 
                    $time = $_POST['time'];
                    
                    $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                    $sql="SELECT * FROM fixtures ";
                    $result=$conn->query($sql);
                    $rowcount1=mysqli_num_rows($result);
                    

                    $day = $_POST['day_'];
                    $sql = "DELETE  FROM fixtures WHERE venue = '$venue' and time_ = '$time' and day_ = '$day' and (( clg1='$clg1' and clg2='$clg2') or ( clg1='$clg2' and clg2='$clg1'))  " ;
                    $conn->query($sql);

                    $sql="SELECT * FROM fixtures ";
                    $result=$conn->query($sql);
                    $rowcount2=mysqli_num_rows($result);
                    
                    if($rowcount1 != $rowcount2)
                    {
                            echo"
                                <p style = 'background-color:yellow ; color:red;padding-bottom:10px;'>
                                Fixture Successfully DELETED !<br>
                                </p>
                                ";
                    }
                    else
                    {
                            echo"
                            <p style = 'background-color:yellow ; color:red;padding-bottom:10px;'>
                            Fixture DOES NOT EXIST !<br>
                            </p>
                            ";
                    }
                }
            }
            ?>
        </div>


            
        <div class = "admin">
            <h3>Delete a Cricket Fixture :</h3><br>
            <div class = "inner_box">
                <h4>Select College 1 :</h4>
        <form method = "post" action = "admin_home_actual.php">
                    <select id = "clg1" name = "clg1">
                        <option value = "IIT-Dharwad">IIT Dharwad</option>
                        <option value = "IIT-Bombay">IIT Bombay</option>
                        <option value = "IIT-Roorkee">IIT Roorkee</option>
                        <option value = "IIT-Kharagpur">IIT Kharagpur</option>
                        <option value = "IIT-Kanpur">IIT Kanpur</option>
                        <option value = "IIT-Madras">IIT Madras</option>
                        <option value = "IIT-Guhuwati">IIT Guhuwati</option>
                        <option value = "IIT-Dhanbad">IIT Dhanbad</option>
                        <option value = "IIT-Hyderabad">IIT Hyderabad</option>
                        <option value = "IIT-Gandhinagar">IIT Gandhinagar</option>
                        <option value = "IIT-Ropar">IIT Ropar</option>
                        <option value = "IIT-Varanasi">IIT Varanasi</option>
                        <option value = "IIT-Bhubneshwar">IIT Bhubneshwar</option>
                        <option value = "IIT-Patna">IIT Patna</option>
                        <option value = "IIT-Jodhpur">IIT Jodhpur</option>
                        <option value = "IIT-Indore">IIT Indore</option>
                        <option value = "IIT-Tirupati">IIT Tirupati</option>
                        <option value = "IIT-Goa">IIT Goa</option>
                        <option value = "IIT-Pallakad">IIT Pallakad</option>
                        <option value = "IIT-Bhilai">IIT Bhilai</option>
                        <option value = "IIT-Jammu">IIT Jammu</option>
                        <option value = "IIT-Delhi">IIT Delhi</option>
                        <option value = "IIT-Mandi">IIT Mandi</option>
                    </select><br>

            </div>

            <div class = "inner_box">
                
                <h4>Select College 2 :</h4>
                    <select id = "clg2" name = "clg2">
                        <option value = "IIT-Dharwad">IIT Dharwad</option>
                        <option value = "IIT-Bombay">IIT Bombay</option>
                        <option value = "IIT-Roorkee">IIT Roorkee</option>
                        <option value = "IIT-Kharagpur">IIT Kharagpur</option>
                        <option value = "IIT-Kanpur">IIT Kanpur</option>
                        <option value = "IIT-Madras">IIT Madras</option>
                        <option value = "IIT-Guhuwati">IIT Guhuwati</option>
                        <option value = "IIT-Dhanbad">IIT Dhanbad</option>
                        <option value = "IIT-Hyderabad">IIT Hyderabad</option>
                        <option value = "IIT-Gandhinagar">IIT Gandhinagar</option>
                        <option value = "IIT-Ropar">IIT Ropar</option>
                        <option value = "IIT-Varanasi">IIT Varanasi</option>
                        <option value = "IIT-Bhubneshwar">IIT Bhubneshwar</option>
                        <option value = "IIT-Patna">IIT Patna</option>
                        <option value = "IIT-Jodhpur">IIT Jodhpur</option>
                        <option value = "IIT-Indore">IIT Indore</option>
                        <option value = "IIT-Tirupati">IIT Tirupati</option>
                        <option value = "IIT-Goa">IIT Goa</option>
                        <option value = "IIT-Pallakad">IIT Pallakad</option>
                        <option value = "IIT-Bhilai">IIT Bhilai</option>
                        <option value = "IIT-Jammu">IIT Jammu</option>
                        <option value = "IIT-Delhi">IIT Delhi</option>
                        <option value = "IIT-Mandi">IIT Mandi</option>
                    </select>
                
            </div>

                
            <div class = "inner_box">
                <h4>Select Sport :</h4>
                <select id = "sport" name = "sport">
                    <option value = "cricket">cricket</option>
                </select>
            </div>
            
            <div class="inner_box">
                <h4>Venue:</h4>
                <select id = "venue" name = "venue">
                    <option value = "Cricket Ground 1">Cricket Ground 1</option>
                    <option value = "Cricket Ground 2">Cricket Ground 2</option>
                </select>
            </div>

            <div class="inner_box">
                <h4>Time</h4>
                <select id = "time" name = "time">
                    <option value = "8:00AM">8:00AM</option>
                    <option value = "10:00AM">10:00AM</option>
                    <option value = "12:00AM">12:00AM</option>
                </select>
            </div>

            <div class="inner_box">
                <h4>Day</h4>
                <select id = "day" name = "day_">
                    <option value = "Day 1">Day 1</option>
                    <option value = "Day 2">Day 2</option>
                    <option value = "Day 3">Day 3</option>
                    <option value = "Day 4">Day 4</option>
                    <option value = "Day 5">Day 5</option>
                </select>
            </div>

            <input class = "button" type = "submit" name="deletefixc" value = "Submit">
        </form>
        
            <?php
            if(isset($_POST['deletefixc']))
            {
                if($_POST['clg1'] == $_POST['clg2'])
                {
                    echo"
                    <p style = 'background-color:yellow ; color:red;padding-bottom:10px;'>
                    Such a fixture cannot exist
                    </p>
                    ";
                }  
                else
                {
                    $clg1=$_POST["clg1"];
                    $clg2=$_POST["clg2"];
                    $venue = $_POST['venue'] ; 
                    $time = $_POST['time'];
                    
                    $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                    $sql="SELECT * FROM fixtures_cricket ";
                    $result=$conn->query($sql);
                    $rowcount1=mysqli_num_rows($result);
                    

                    $day = $_POST['day_'];
                    $sql = "DELETE  FROM fixtures_cricket WHERE venue = '$venue' and time_ = '$time' and day_ = '$day' and (( clg1='$clg1' and clg2='$clg2') or ( clg1='$clg2' and clg2='$clg1'))  " ;
                    $conn->query($sql);

                    $sql="SELECT * FROM fixtures_cricket ";
                    $result=$conn->query($sql);
                    $rowcount2=mysqli_num_rows($result);
                    
                    if($rowcount1 != $rowcount2)
                    {
                            echo"
                                <p style = 'background-color:yellow ; color:red;padding-bottom:10px;'>
                                Fixture Successfully DELETED !<br>
                                </p>
                                ";
                    }
                    else
                    {
                            echo"
                            <p style = 'background-color:yellow ; color:red;padding-bottom:10px;'>
                            Fixture DOES NOT EXIST !<br>
                            </p>
                            ";
                    }
                    
                }
            }
            ?>
        </div>


        <div class = "admin">
            <h3>Add a Cricket Fixture :</h3><br>
            <div class = "inner_box">
                <h4>Select College 1 :</h4>
        <form method = "post" action = "admin_home_actual.php">
                    <select id = "clg1" name = "clg1">
                        <option value = "IIT-Dharwad">IIT Dharwad</option>
                        <option value = "IIT-Bombay">IIT Bombay</option>
                        <option value = "IIT-Roorkee">IIT Roorkee</option>
                        <option value = "IIT-Kharagpur">IIT Kharagpur</option>
                        <option value = "IIT-Kanpur">IIT Kanpur</option>
                        <option value = "IIT-Madras">IIT Madras</option>
                        <option value = "IIT-Guhuwati">IIT Guhuwati</option>
                        <option value = "IIT-Dhanbad">IIT Dhanbad</option>
                        <option value = "IIT-Hyderabad">IIT Hyderabad</option>
                        <option value = "IIT-Gandhinagar">IIT Gandhinagar</option>
                        <option value = "IIT-Ropar">IIT Ropar</option>
                        <option value = "IIT-Varanasi">IIT Varanasi</option>
                        <option value = "IIT-Bhubneshwar">IIT Bhubneshwar</option>
                        <option value = "IIT-Patna">IIT Patna</option>
                        <option value = "IIT-Jodhpur">IIT Jodhpur</option>
                        <option value = "IIT-Indore">IIT Indore</option>
                        <option value = "IIT-Tirupati">IIT Tirupati</option>
                        <option value = "IIT-Goa">IIT Goa</option>
                        <option value = "IIT-Pallakad">IIT Pallakad</option>
                        <option value = "IIT-Bhilai">IIT Bhilai</option>
                        <option value = "IIT-Jammu">IIT Jammu</option>
                        <option value = "IIT-Delhi">IIT Delhi</option>
                        <option value = "IIT-Mandi">IIT Mandi</option>
                    </select><br>

            </div>

            <div class = "inner_box">
                
                <h4>Select College 2 :</h4>
                    <select id = "clg2" name = "clg2">
                        <option value = "IIT-Dharwad">IIT Dharwad</option>
                        <option value = "IIT-Bombay">IIT Bombay</option>
                        <option value = "IIT-Roorkee">IIT Roorkee</option>
                        <option value = "IIT-Kharagpur">IIT Kharagpur</option>
                        <option value = "IIT-Kanpur">IIT Kanpur</option>
                        <option value = "IIT-Madras">IIT Madras</option>
                        <option value = "IIT-Guhuwati">IIT Guhuwati</option>
                        <option value = "IIT-Dhanbad">IIT Dhanbad</option>
                        <option value = "IIT-Hyderabad">IIT Hyderabad</option>
                        <option value = "IIT-Gandhinagar">IIT Gandhinagar</option>
                        <option value = "IIT-Ropar">IIT Ropar</option>
                        <option value = "IIT-Varanasi">IIT Varanasi</option>
                        <option value = "IIT-Bhubneshwar">IIT Bhubneshwar</option>
                        <option value = "IIT-Patna">IIT Patna</option>
                        <option value = "IIT-Jodhpur">IIT Jodhpur</option>
                        <option value = "IIT-Indore">IIT Indore</option>
                        <option value = "IIT-Tirupati">IIT Tirupati</option>
                        <option value = "IIT-Goa">IIT Goa</option>
                        <option value = "IIT-Pallakad">IIT Pallakad</option>
                        <option value = "IIT-Bhilai">IIT Bhilai</option>
                        <option value = "IIT-Jammu">IIT Jammu</option>
                        <option value = "IIT-Delhi">IIT Delhi</option>
                        <option value = "IIT-Mandi">IIT Mandi</option>
                    </select>
                
            </div>

                
            <div class = "inner_box">
                <h4>Select Sport :</h4>
                <select id = "sport" name = "sport">
                    <option value = "cricket">cricket</option>
                </select>
            </div>
            
            <div class="inner_box">
                <h4>Venue:</h4>
                <select id = "venue" name = "venue">
                    <option value = "Cricket Ground 1">Cricket Ground 1</option>
                    <option value = "Cricket Ground 2">Cricket Ground 2</option>
                </select>
            </div>

            <div class="inner_box">
                <h4>Time</h4>
                <select id = "time" name = "time">
                    <option value = "8:00AM">8:00AM</option>
                    <option value = "10:00AM">10:00AM</option>
                    <option value = "12:00AM">12:00AM</option>
                </select>
            </div>

            <div class="inner_box">
                <h4>Day</h4>
                <select id = "day" name = "day_">
                    <option value = "Day 1">Day 1</option>
                    <option value = "Day 2">Day 2</option>
                    <option value = "Day 3">Day 3</option>
                    <option value = "Day 4">Day 4</option>
                    <option value = "Day 5">Day 5</option>
                </select>
            </div>

            <input class = "button" type = "submit" name="changefixc" value = "Submit">
        </form>
        
            <?php
            if(isset($_POST['changefixc']))
            {
                if($_POST['clg1'] == $_POST['clg2'])
                {
                    echo"
                    <p style = 'background-color:yellow ; color:red;padding-bottom:10px;'>
                    Cannot have match with itself !
                    </p>
                    ";
                }  
                else
                {
                    $venue = $_POST['venue'] ; 
                    $time = $_POST['time'];
                    $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                    $day=$_POST['day_'];
                    $sql = "SELECT venue , time_ FROM fixtures_cricket WHERE venue = '$venue' and time_ = '$time' and day_ = '$day' " ;
                    $result = $conn->query($sql);
                    if($result -> num_rows > 0)
                    {
                        echo"
                        <p style = 'background-color:yellow ; color:red;padding-bottom:10px;'>
                        Venue and time already taken , try another one !
                        </p>
                        ";
                    }
                    else
                    {
                        $clg1 = $_POST['clg1'] ; 
                        $clg2 = $_POST['clg2'];
                        $sport = $_POST['sport'];
                        $venue = $_POST['venue'] ;
                        $time = $_POST['time'];
                        
                        $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                        $sql = "INSERT INTO fixtures_cricket (clg1 , clg2 , sport , venue , time_, day_) VALUES('$clg1','$clg2','$sport','$venue','$time','$day')";
                        if($conn->query($sql)===TRUE)
                        {
                            echo"
                            <p style = 'background-color : green ; color : black;'>
                                Fixture Successfully Added !<br>
                            </p>
                            ";
                        }
                    }
                }
            }
            ?>
        </div>



        <div class = "admin">
            <h3>Add Football Match Result :</h3><br>
            <div class = "inner_box">
                <h4>Select College 1 :</h4>
        <form method = "post" action = "admin_home_actual.php">
                    <select id = "clg1" name = "clg1">
                        <option value = "IIT-Dharwad">IIT Dharwad</option>
                        <option value = "IIT-Bombay">IIT Bombay</option>
                        <option value = "IIT-Roorkee">IIT Roorkee</option>
                        <option value = "IIT-Kharagpur">IIT Kharagpur</option>
                        <option value = "IIT-Kanpur">IIT Kanpur</option>
                        <option value = "IIT-Madras">IIT Madras</option>
                        <option value = "IIT-Guhuwati">IIT Guhuwati</option>
                        <option value = "IIT-Dhanbad">IIT Dhanbad</option>
                        <option value = "IIT-Hyderabad">IIT Hyderabad</option>
                        <option value = "IIT-Gandhinagar">IIT Gandhinagar</option>
                        <option value = "IIT-Ropar">IIT Ropar</option>
                        <option value = "IIT-Varanasi">IIT Varanasi</option>
                        <option value = "IIT-Bhubneshwar">IIT Bhubneshwar</option>
                        <option value = "IIT-Patna">IIT Patna</option>
                        <option value = "IIT-Jodhpur">IIT Jodhpur</option>
                        <option value = "IIT-Indore">IIT Indore</option>
                        <option value = "IIT-Tirupati">IIT Tirupati</option>
                        <option value = "IIT-Goa">IIT Goa</option>
                        <option value = "IIT-Pallakad">IIT Pallakad</option>
                        <option value = "IIT-Bhilai">IIT Bhilai</option>
                        <option value = "IIT-Jammu">IIT Jammu</option>
                        <option value = "IIT-Delhi">IIT Delhi</option>
                        <option value = "IIT-Mandi">IIT Mandi</option>
                    </select><br>
            </div>

            <div class = "inner_box">
                
                <h4>Select College 2 :</h4>
                    <select id = "clg2" name = "clg2">
                        <option value = "IIT-Dharwad">IIT Dharwad</option>
                        <option value = "IIT-Bombay">IIT Bombay</option>
                        <option value = "IIT-Roorkee">IIT Roorkee</option>
                        <option value = "IIT-Kharagpur">IIT Kharagpur</option>
                        <option value = "IIT-Kanpur">IIT Kanpur</option>
                        <option value = "IIT-Madras">IIT Madras</option>
                        <option value = "IIT-Guhuwati">IIT Guhuwati</option>
                        <option value = "IIT-Dhanbad">IIT Dhanbad</option>
                        <option value = "IIT-Hyderabad">IIT Hyderabad</option>
                        <option value = "IIT-Gandhinagar">IIT Gandhinagar</option>
                        <option value = "IIT-Ropar">IIT Ropar</option>
                        <option value = "IIT-Varanasi">IIT Varanasi</option>
                        <option value = "IIT-Bhubneshwar">IIT Bhubneshwar</option>
                        <option value = "IIT-Patna">IIT Patna</option>
                        <option value = "IIT-Jodhpur">IIT Jodhpur</option>
                        <option value = "IIT-Indore">IIT Indore</option>
                        <option value = "IIT-Tirupati">IIT Tirupati</option>
                        <option value = "IIT-Goa">IIT Goa</option>
                        <option value = "IIT-Pallakad">IIT Pallakad</option>
                        <option value = "IIT-Bhilai">IIT Bhilai</option>
                        <option value = "IIT-Jammu">IIT Jammu</option>
                        <option value = "IIT-Delhi">IIT Delhi</option>
                        <option value = "IIT-Mandi">IIT Mandi</option>
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
                    <option value = "12:00AM">12:00AM</option>
                </select>
            </div>

            <div class="inner_box">
                <h4>Day</h4>
                <select id = "day" name = "day_">
                    <option value = "Day 1">Day 1</option>
                    <option value = "Day 2">Day 2</option>
                    <option value = "Day 3">Day 3</option>
                    <option value = "Day 4">Day 4</option>
                    <option value = "Day 5">Day 5</option>
                </select>
            </div>

            <div class="inner_box">
                <h4>Win/Lose/tie</h4>
                <select id = "final_result" name = "final_result">
                    <option value = "win">win</option>
                    <option value = "tie">tie</option>
                </select>
            </div>

            <div class="inner_box">
            <h4>Goal1</h4><br>
                <input class = "data"  id = "textarea2" type = "number" name = "gc1" placeholder = "Enter goal scored by college 1"><br>
            </div>

            <div class="inner_box">
            <h4>Goal2</h4><br>
                <input class = "data"  id = "textarea3" type = "number" name = "gc2" placeholder = "Enter goal scored by college 2"><br>
            </div>


            <input class = "button" type = "submit" name="actualresult" value = "Submit">
        </form>    
        
            <?php
            if(isset($_POST['actualresult']))
            {
                if($_POST['clg1'] == $_POST['clg2'])
                {
                    echo"
                    <p style = 'background-color:yellow ; color:red;padding-bottom:10px;'>
                    Can't match with itself!
                    </p>
                    ";
                }  
                else
                {
                    $venue = $_POST['venue'] ; 
                    $time = $_POST['time'];
                    $goalsc1=$_POST['gc1'];
                    $goalsc2=$_POST['gc2'];
                    $day=$_POST['day_'];
                    $final_result=$_POST['final_result'];
                    $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                    $sql = "SELECT venue , time_ FROM fixtures WHERE venue = '$venue' and time_ = '$time' and day_ = '$day' " ;
                    $result = $conn->query($sql);
                
                    if($result->num_rows > 0)
                    { 
                        $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                        while($result1 = $result->fetch_assoc())
                        {
                        $sql = "UPDATE fixtures
                                SET gc1 = '$goalsc1', gc2 = '$goalsc2',final_result='$final_result'
                                WHERE venue = '$venue' and time_ = '$time' and day_ = '$day' ";

                        if($conn->query($sql)==TRUE)
                        {
                            echo"
                            <p style = 'background-color : green ; color : black;'>
                                Result Successfully Added !<br>
                            </p>
                            ";
                        }
                        else
                        {
                            echo "Wrong data input";
                        }

                        }
                    }
                    else
                    {
                        echo "fixture not present";
                    }
                }
            }
            ?>
        </div>

        <div class = "admin">
            <h3>Add Cricket Match Result :</h3><br>
            <div class = "inner_box">
                <h4>Select College 1 :</h4>
        <form method = "post" action = "admin_home_actual.php">
                    <select id = "clg1" name = "clg1">
                        <option value = "IIT-Dharwad">IIT Dharwad</option>
                        <option value = "IIT-Bombay">IIT Bombay</option>
                        <option value = "IIT-Roorkee">IIT Roorkee</option>
                        <option value = "IIT-Kharagpur">IIT Kharagpur</option>
                        <option value = "IIT-Kanpur">IIT Kanpur</option>
                        <option value = "IIT-Madras">IIT Madras</option>
                        <option value = "IIT-Guhuwati">IIT Guhuwati</option>
                        <option value = "IIT-Dhanbad">IIT Dhanbad</option>
                        <option value = "IIT-Hyderabad">IIT Hyderabad</option>
                        <option value = "IIT-Gandhinagar">IIT Gandhinagar</option>
                        <option value = "IIT-Ropar">IIT Ropar</option>
                        <option value = "IIT-Varanasi">IIT Varanasi</option>
                        <option value = "IIT-Bhubneshwar">IIT Bhubneshwar</option>
                        <option value = "IIT-Patna">IIT Patna</option>
                        <option value = "IIT-Jodhpur">IIT Jodhpur</option>
                        <option value = "IIT-Indore">IIT Indore</option>
                        <option value = "IIT-Tirupati">IIT Tirupati</option>
                        <option value = "IIT-Goa">IIT Goa</option>
                        <option value = "IIT-Pallakad">IIT Pallakad</option>
                        <option value = "IIT-Bhilai">IIT Bhilai</option>
                        <option value = "IIT-Jammu">IIT Jammu</option>
                        <option value = "IIT-Mandi">IIT Mandi</option>
                        <option value = "IIT-Delhi">IIT Delhi</option>
                    </select><br>
            </div>

            <div class = "inner_box">
                
                <h4>Select College 2 :</h4>
                    <select id = "clg2" name = "clg2">
                        <option value = "IIT-Dharwad">IIT Dharwad</option>
                        <option value = "IIT-Bombay">IIT Bombay</option>
                        <option value = "IIT-Roorkee">IIT Roorkee</option>
                        <option value = "IIT-Kharagpur">IIT Kharagpur</option>
                        <option value = "IIT-Kanpur">IIT Kanpur</option>
                        <option value = "IIT-Madras">IIT Madras</option>
                        <option value = "IIT-Guhuwati">IIT Guhuwati</option>
                        <option value = "IIT-Dhanbad">IIT Dhanbad</option>
                        <option value = "IIT-Hyderabad">IIT Hyderabad</option>
                        <option value = "IIT-Gandhinagar">IIT Gandhinagar</option>
                        <option value = "IIT-Ropar">IIT Ropar</option>
                        <option value = "IIT-Varanasi">IIT Varanasi</option>
                        <option value = "IIT-Bhubneshwar">IIT Bhubneshwar</option>
                        <option value = "IIT-Patna">IIT Patna</option>
                        <option value = "IIT-Jodhpur">IIT Jodhpur</option>
                        <option value = "IIT-Indore">IIT Indore</option>
                        <option value = "IIT-Tirupati">IIT Tirupati</option>
                        <option value = "IIT-Goa">IIT Goa</option>
                        <option value = "IIT-Pallakad">IIT Pallakad</option>
                        <option value = "IIT-Bhilai">IIT Bhilai</option>
                        <option value = "IIT-Jammu">IIT Jammu</option>
                        <option value = "IIT-Delhi">IIT Delhi</option>
                        <option value = "IIT-Mandi">IIT Mandi</option>
                    </select>
                
            </div>

                
            <div class = "inner_box">
                <h4>Select Sport :</h4>
                <select id = "sport" name = "sport">
                    <option value = "cricket">cricket</option>
                </select>
            </div>
            
            <div class="inner_box">
                <h4>Venue:</h4>
                <select id = "venue" name = "venue">
                    <option value = "Cricket Ground 1">Cricket Ground 1</option>
                    <option value = "Cricket Ground 2">Cricket Ground 2</option>
                </select>
            </div>

            <div class="inner_box">
                <h4>Time</h4>
                <select id = "time" name = "time">
                    <option value = "8:00AM">8:00AM</option>
                    <option value = "10:00AM">10:00AM</option>
                    <option value = "12:00AM">12:00AM</option>
                </select>
            </div>

            <div class="inner_box">
                <h4>Day</h4>
                <select id = "day" name = "day_">
                    <option value = "Day 1">Day 1</option>
                    <option value = "Day 2">Day 2</option>
                    <option value = "Day 3">Day 3</option>
                    <option value = "Day 4">Day 4</option>
                    <option value = "Day 5">Day 5</option>
                </select>
            </div>

            <div class="inner_box">
                <h4>Win/tie</h4>
                <select id = "final_result" name = "final_result">
                    <option value = "win">win</option>
                    <option value = "tie">tie</option>
                </select>
            </div>

            <div class="inner_box">
            <h4>Runs1</h4><br>
                <input class = "data"  id = "run1" type = "number" name = "r1" placeholder = "Enter runs scored by college 1"><br>
            </div>

            <div class="inner_box">
            <h4>Runs2</h4><br>
                <input class = "data"  id = "run2" type = "number" name = "r2" placeholder = "Enter runs scored by college 1"><br>
            </div>

            <div class="inner_box">
            <h4>Wickets 1</h4><br>
                <input class = "data"  id = "wicket1" type = "number" name = "w1" placeholder = "Enter wickets taken by college 2"><br>
            </div>

            <div class="inner_box">
            <h4>Wickets 2</h4><br>
                <input class = "data"  id = "wicket2" type = "number" name = "w2" placeholder = "Enter wickets taken by college 1"><br>
            </div>

            <input class = "button" type = "submit" name="actualresult_cricket" value = "Submit">
        </form>    
        
            <?php
            if(isset($_POST['actualresult_cricket']))
            {
                if($_POST['clg1'] == $_POST['clg2'])
                {
                    echo"
                    <p style = 'background-color:yellow ; color:red;padding-bottom:10px;'>
                    Can't match with itself!
                    </p>
                    ";
                }  
                else
                {
                    $venue = $_POST['venue'] ; 
                    $time = $_POST['time'];
                    $runs1=$_POST['r1'];
                    $runs2=$_POST['r2'];
                    $w1=$_POST['w1'];
                    $w1=$_POST['w2'];
                    $day=$_POST['day_'];
                    $final_result=$_POST['final_result'];
                    $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                    $sql = "SELECT venue , time_ FROM fixtures WHERE venue = '$venue' and time_ = '$time' and day_ = '$day' " ;
                    $result = $conn->query($sql);
                
                    if($result->num_rows > 0)
                    { 
                        $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                        while($result1 = $result->fetch_assoc())
                        {
                        $sql = "UPDATE fixtures
                                SET r1 = '$runs1', r2 = '$runs2',w1 = '$w1', w2 = '$w2' , final_result='$final_result'
                                WHERE venue = '$venue' and time_ = '$time' and day_ = '$day' ";

                        if($conn->query($sql)==TRUE)
                        {
                            echo"
                            <p style = 'background-color : green ; color : black;'>
                                Result Successfully Added !<br>
                            </p>
                            ";
                        }
                        else
                        {
                            echo "Wrong data input";
                        }

                        }
                    }
                    else
                    {
                        echo "fixture not present";
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
                        <option value = "IIT-Dharwad">IIT Dharwad</option>
                        <option value = "IIT-Bombay">IIT Bombay</option>
                        <option value = "IIT-Roorkee">IIT Roorkee</option>
                        <option value = "IIT-Kharagpur">IIT Kharagpur</option>
                        <option value = "IIT-Kanpur">IIT Kanpur</option>
                        <option value = "IIT-Madras">IIT Madras</option>
                        <option value = "IIT-Guhuwati">IIT Guhuwati</option>
                        <option value = "IIT-Dhanbad">IIT Dhanbad</option>
                        <option value = "IIT-Hyderabad">IIT Hyderabad</option>
                        <option value = "IIT-Gandhinagar">IIT Gandhinagar</option>
                        <option value = "IIT-Ropar">IIT Ropar</option>
                        <option value = "IIT-Varanasi">IIT Varanasi</option>
                        <option value = "IIT-Bhubneshwar">IIT Bhubneshwar</option>
                        <option value = "IIT-Jodhpur">IIT Jodhpur</option>
                        <option value = "IIT-Patna">IIT Patna</option>
                        <option value = "IIT-Indore">IIT Indore</option>
                        <option value = "IIT-Tirupati">IIT Tirupati</option>
                        <option value = "IIT-Goa">IIT Goa</option>
                        <option value = "IIT-Pallakkad">IIT Pallakad</option>
                        <option value = "IIT-Bhilai">IIT Bhilai</option>
                        <option value = "IIT-Jammu">IIT Jammu</option>
                        <option value = "IIT-Delhi">IIT Delhi</option>
                        <option value = "IIT-Mandi">IIT Mandi</option>
                    </select>

                </div>
                <div class="inner_box">
                    <h4>Points</h4>
                    <select id = "p" name = "p">
                    <option value = 0>0</option>
                        <option type ="number" value = -1>-1</option>
                        <option type ="number" value = 1>1</option>
                        <option type ="number" value = 2>2</option>
                    </select>
                </div>
                <div class="inner_box">
                    <h4>Select sport</h4>
                    <select id = "s" name = "ps">
                    <option value = "football">Football</option>
                    <option value = "cricket">Cricket</option>
                    </select>
                </div>
                <input class = "button" type = "submit" name="ptso" value = "Submit"> 
            </form>

            <?php
            if(isset($_POST['ptso']))
            {
                $clg = $_POST['clg'];
                $poi = $_POST['p'];
                $spo = $_POST['ps'];
                $conn = new mysqli("localhost" , "root" ,"" ,"SSLPROJECT");

                if($spo == "football")
                {
                    $sql = "SELECT college , football_points , total_points FROM points WHERE college = '$clg'";
                    $result1 = $conn->query($sql);
                    if($result1->num_rows >0)
                    {
                        while($result = $result1->fetch_assoc())
                        {
                    // if($result->num_rows == 1){
                        $new = $result['football_points'] + $poi ;
                        $newt = $result['total_points'] + $poi ; 
                        $sql2 ="UPDATE points SET football_points = $new , total_points = $newt WHERE college = '$clg'";
                        if($conn->query($sql2) == TRUE)
                        {
                            echo"Points Football added successfully haha !<br>";
                        }
                        else
                        {
                            echo"some error!";
                        }
                        }
                    }
                    // }
                    else
                    {
                        echo"error in selection!<br>";
                    }
                }

                if($spo == "cricket")
                {
                    $sql = "SELECT college , cricket_points , total_points FROM points WHERE college = '$clg'";
                    $result1 = $conn->query($sql);
                    if($result1->num_rows >0)
                    {
                        while($result = $result1->fetch_assoc())
                        {
                    // if($result->num_rows == 1){
                        $new = $result['cricket_points'] + $poi ;
                        $newt = $result['total_points'] + $poi ; 
                        $sql2 ="UPDATE points SET cricket_points = $new , total_points = $newt WHERE college = '$clg'";
                        if($conn->query($sql2) == TRUE)
                        {
                            echo"Points Criket added successfully ha !<br>";
                        }
                        else
                        {
                            echo"some error!";
                        }
                        }
                    }
                    // }
                    else
                    {
                        echo"error in selection!<br>";
                    }
                }
            }
            ?>

        </div>
    </div>
</body></html>