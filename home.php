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
        // echo"Connected to server successfully !<br>";
    }

    //connecting to database SSLPROJECT: 
    $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
    if(!($conn->error))
    {
        // echo"Connected to database of SSLPROJECT succesfully !<br>";
    }
    
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

        <div style = "height:30px;width:100px;margin-left:400px;padding-top:0px;">
            <h4>Ongoing day</h4>
            <div style = "text-align : center;padding-top:5px;">
                <?php
                    $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                    $sql = "SELECT day_going FROM ongoing_day ORDER BY day_going DESC LIMIT 1";
                    $result = $conn->query($sql);

                    if($result->num_rows == 1)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            echo $row["day_going"];
                        }    
                    }
                    else
                    {
                        echo"hello boi";
                    }
                ?>
            </div>
        </div>

        <!-- <form action = "search.php">
            <img id = "search" src = "images/search.png" alt = "">
            <input type = "text" name = "search_by_college" id = "search_by_college" placeholder= "seach by college">
        </form> -->
    </div>

    <div class="buttons">
        <a href = "https://iitdh.ac.in"><img id = "host_logo" src = "images/iitdhlogo.png" alt ="Inter IIT Host" target = "_blank" class = ""></a>
        
        <form action = "fixtures.php">
        <input class = "button" type = "submit" value = "Fixtures">
        </form>

        <form action = "points.php">
        <input class = "button" type = "submit" value = "Points">
        </form>
        
        <form action = "statistics.php">
        <input class = "button" type = "submit" value = "Statistics">
        </form>

        <form action = "contact.php">
        <input class = "button" type = "submit" value = "Contact Us">
        </form>
        
        <a href = "https://iitdh.ac.in"><img id = "host_logo" src = "images/khelo_india.png" alt ="Inter IIT Host" target = "_blank" class = ""></a>    
    </div>

    <div class = "content">
        <div class = "content1" id = "results">
            <h3 id = "a">Latest Announcements !</h3>
            <script>        
                var j = 0 ;
                function color_change(){
                    var head = document.getElementById("a");
                    var colors = ["whitesmoke" , "red" , "yellow"];
                    head.style.color = colors[j];
                    j = (j+1)%colors.length;
                }
                setInterval(color_change , 200);
            </script>
            <center>
                <?php
                    $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                    $sql = "SELECT DISTINCT annouce FROM results ORDER BY id DESC LIMIT 6";
                    $result = $conn->query($sql);
                    if($result -> num_rows > 0)
                    {
                        ?>
                        <div style = "overflow : auto;">
                            <?php
                                while($row = $result->fetch_assoc())
                                {
                                    ?>
                                    <div style = "overflow:auto; border : 2px solid brown; margin : 5px 0 5px 0 ; height : 10vh; font-size : 1.5rem;" >
                                    <?php echo"".$row["annouce"];?>   
                                    </div>
                                    <?php
                                }
                            ?>
                        </div>
                        <?php
                        
                    }
                    else
                    {
                        echo"No announcements yet !<hr>";
                    }
                         
                ?>
            </center>        
        </div>

        <div class = "content1" id = "events">
        <h3 id = "b">Upcoming Events!</h3>
        <script>        
                var k = 0 ;
                function color_change2(){
                    var head = document.getElementById("b");
                    var colors7 = ["whitesmoke" , "violet" , "blue" ,"cyan" , "green" , "yellow" , "orange" , "red"];
                    head.style.color = colors7[j];
                    k = (k+1)%colors7.length;
                }
                setInterval(color_change2 , 200);
        </script>
        <?php
            $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
            $sql =  "SELECT * FROM fixtures WHERE final_result IS NULL LIMIT 2";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
                ?>
                <div style = "height : 15vh;width : 30vw;margin:2vh 5vw 2vh 5vw;border : 2px solid darkred;">
                    <div style ="height : 5vh ; background-color : maroon;color:whitesmoke;text-align:center;padding-top:5px;">
                        <?php echo $row["clg1"]." VS ".$row["clg2"]; ?>
                    </div>
                    <div style ="height : 5vh ; text-align : center;font-size:2rem;">
                        <?php echo $row["sport"]; ?>
                    </div>
                    <div style = "border : 2px dashed darkred;font-size : 1.5rem;">
                    <?php echo $row["day_"]."  |  ".$row["time_"]."  |  ".$row["venue"]; ?>
                    </div>
                </div>
                <?php
            }
        ?>
        <?php
            $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
            $sql =  "SELECT * FROM fixtures_cricket WHERE final_result IS NULL LIMIT 2";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
                ?>
                <div style = "height : 15vh;width : 30vw;margin:2vh 5vw 2vh 5vw;border : 2px solid darkred;">
                    <div style ="height : 5vh ; background-color : maroon;color:whitesmoke;text-align:center;padding-top:5px;">
                        <?php echo $row["clg1"]." VS ".$row["clg2"]; ?>
                    </div>
                    <div style ="height : 5vh ; text-align : center;font-size:2rem;">
                        <?php echo $row["sport"]; ?>
                    </div>
                    <div style = "border : 2px dashed darkred;font-size:1.5rem;">
                    <?php echo $row["day_"]."  |  ".$row["time_"]."  |  ".$row["venue"]; ?>
                    </div>
                </div>
                <?php    
            }
        ?>
        </div>
    </div>

    <div class="center" style = "display:flex;flex-direction: column;align-items:center;justify-content:center;background-color : lightgray;padding-top:20px;padding-bottom:20px;margin : 20px;border-radius:50px;">
        
        <div class = "content">
            <h3>Previous Meets</h3>
    
        </div>

        <div class="slider" style = " width : 80vw ;height : 100vh;display : flex ;align-items: center;justify-content: center;overflow : auto;">
            <script>
                var i = 0 ;
                var images = []
                var time = 3000;

                images[0] = "football.jpg";
                images[1] = "cricket.jpg";
                images[2] = "swimming.jpg";
                images[3] = "hurdles.jpg";

                function slide(){
                    document.slide.src = images[i];
                    if(i < images.length - 1){
                        i++;
                    }
                    else{
                        i = 0 ;
                    }
                    setTimeout("slide()" , time);
                }

                window.onload = slide;            

            </script>
            <img name = "slide" id = "slide" width = "1100" height = "650" style="border : 5px solid black; border-radius : 3px;">

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
            <a href = "https://www.iitdelhi.ac.in/" target = "_blank"><input type="button" value = "IIT Delhi"></a>
        </div>
    </div>

</body>
</html>