<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Previous clashes</title>
    <link rel = "stylesheet" href = "css/style_admin.css">
    <style>
    .stats{
        display : flex ; 
        flex-direction : column ; 
        justify-content : center ;
        align-items : center ;
        margin : 2px solid black ;
    }
    .info{
        padding : 25px;
        margin : 5px;
        font-size : 2rem;
        background-color : lightyellow ;
        border-radius : 5px;
        width : 60vw;
        border : 2px solid black ;
    }
    </style>
</head>

<body>
<div class="admin" style = "height : 120vh;">
        <form action = "previousclashes.php" method="post">
            <h3>Select College1</h3>
                <div class="inner_box">
                    <select id = "abc" name = "clg1">
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
                        <option value = "IIT-Jodhpur">IIT Patna</option>
                        <option value = "IIT-Indore">IIT Indore</option>
                        <option value = "IIT-Tirupati">IIT Tirupati</option>
                        <option value = "IIT-Goa">IIT Goa</option>
                        <option value = "IIT-Pallakkad">IIT Pallakad</option>
                        <option value = "IIT-Bhilai">IIT Bhilai</option>
                        <option value = "IIT-Jammu">IIT Jammu</option>
                        <option value = "IIT-Delhi">IIT Delhi</option>
                    </select>

                </div>

                <h3>Select College2</h3>
                <div class="inner_box">
                    <select id = "abc" name = "clg2">
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
                        <option value = "IIT-Jodhpur">IIT Patna</option>
                        <option value = "IIT-Indore">IIT Indore</option>
                        <option value = "IIT-Tirupati">IIT Tirupati</option>
                        <option value = "IIT-Goa">IIT Goa</option>
                        <option value = "IIT-Pallakkad">IIT Pallakad</option>
                        <option value = "IIT-Bhilai">IIT Bhilai</option>
                        <option value = "IIT-Jammu">IIT Jammu</option>
                        <option value = "IIT-Delhi">IIT Delhi</option>
                    </select>

                </div>

                <input class = "button" type = "submit" name="pstats" value = "Submit"> 
            </form>
        
            <?php
                if(isset($_POST["pstats"]))
                {
                    $clg1=$_POST["clg1"];
                    $clg2=$_POST["clg2"];
                    $conn=new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                    $sql="SELECT * FROM past_fixtures 
                        WHERE (clg1 = '$clg1' AND clg2 = '$clg2') 
                        OR (clg1 = '$clg2' AND clg2 = '$clg1')
                        LIMIT 1";
                    $result = $conn->query($sql);     
                    if($result->num_rows > 0)
                    {
                        ?>
            <div class="stats">
                <?php
                while($row = $result->fetch_assoc())
                {
                    if($row['clg1']==$clg1)
                    {
                    ?>
                    <div class="info">
                    <?php echo $clg1." has won ".$row['fwin1']." football matches against ".$clg2."\n";?>
                    </div>
                    <div class="info">
                    <?php echo $clg1." has lost ".$row['fwin2']." football matches against ".$clg2."\n"; ?>
                    </div>
                    <div class="info">
                    <?php echo $clg1." has tied ".(5-($row['fwin1']+$row['fwin2']))." football matches against ".$clg2."\n"; ?>
                    </div>
                    <div class="info">   
                    <?php echo $clg1." has won  ".$row['cwin1']." cricket matches against ".$clg2."\n";?>
                    </div>
                    <div class="info">
                    <?php echo $clg1." has lost  ".$row['cwin2']." cricket matches against ".$clg2."\n";?>
                    </div>
                    <div class="info">
                    <?php echo $clg1." has tied ".(5-($row['cwin1']+$row['cwin2']))." cricket matches against ".$clg2."\n";?>
                    </div>
                    <?php
                    }
                    if($row['clg1']==$clg2)
                    {
                    ?>
                    <div class="info">
                    <?php echo $clg1." has won ".$row['fwin2']." football matches against ".$clg2."\n"; ?>
                    </div>
                    <div class="info">
                    <?php echo $clg1." has lost ".$row['fwin1']." football matches against ".$clg2."\n";?>
                    </div>
                    <div class="info">
                    <?php echo $clg1." has tied ".(5-($row['fwin1']+$row['fwin2']))." football matches against ".$clg2."\n";?>
                    </div>
                    <div class="info">
                    <?php echo $clg1." has won  ".$row['cwin2']." cricket matches against ".$clg2."\n";?>
                    </div>
                    <div class="info">
                    <?php echo $clg1." has lost  ".$row['cwin1']." cricket matches against ".$clg2."\n";?>
                    </div>
                    <div class="info">
                    <?php echo $clg1." has tied ".(5-($row['cwin1']+$row['cwin2']))." cricket matches against ".$clg2."\n";?>
                    </div>
                    <?php
                            }
                        }
                    }
                }
            ?>
            </div>
</div>
<center>
    <form action = "home.php">
        <input type = "submit" value = "Return Home" style = "background-color : skyblue ; font-size : 2rem; padding : 30px;margin-bottom : 50px;;">
    </form>
</center>
</body>
