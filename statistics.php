<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics Page</title>
    <link rel = "stylesheet" href = "css/style_admin.css">
    <style>
    .stats{
        display : flex ; 
        flex-direction : column;
        justify-content : center ;
        align-items : center;
        font-size : 20px;
    }
    .info{
        display : flex ; 
        flex-direction : row;
        margin : 5px;
        background-color : lightyellow;
        width : 35vw;
        text-align : center;
        justify-content : center;
        border : 2px solid black;   
    }
    .head{
        width : 40vw;
        text-align : center ;
        background-color : lightblue;
    }
    </style>
</head>

<body>
    <form action = "home.php">
        <input type = "submit" value = "Return Home">
    </form>
    <div class="admin">
        <form action = "statistics.php" method="post">
            <h3>Select College</h3>
                <div class="inner_box">
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
                <input class = "button" type = "submit" name="stats" value = "Submit"> 
            </form>
        

                <?php
                    if(isset($_POST["stats"]))
                    {
                        $conn=new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                        global $clg;
                        $clg=$_POST['clg'];
                        ?>
                        <div class="stats">
                        <div class="head">
                        <?php echo $clg; ?>
                        </div>
                        <?php
                        $sql1="SELECT * FROM fixtures WHERE clg1='$clg' OR clg2='$clg' ";
                        $sql2="SELECT * FROM fixtures_cricket WHERE clg1='$clg' OR clg2='$clg' ";
                        
                        $result1=$conn->query($sql1);
                        $result2=$conn->query($sql2);
                        $gscored=0;
                        $gconceded=0;
                        $runscored=0;
                        $wicketstaken=0;
                        $no_of_football_matches=0;
                        $no_of_football_matches_win=0;
                        $no_of_football_matches_tie=0;
                        $no_of_cricket_matches=0;
                        $no_of_cricket_matches_win=0;
                        $no_of_cricket_matches_tie=0;
                        $no_of_total_matches=0;
                        $no_of_total_matches_win=0;
                        $no_of_total_matches_tie=0;
                        $nrr=0;

                        if($result1->num_rows > 0 )
                        {
                            while($row = $result1->fetch_assoc())
                            {
                                $no_of_football_matches=$no_of_football_matches+1;
                                $clg1=$row['clg1'];
                                $clg2=$row['clg2'];
                                $gc1=$row['gc1'];
                                $gc2=$row['gc2'];

                                if($clg == $clg1)
                                {
                                    $gscored=$gscored+$gc1;
                                    $gconceded=$gconceded+$gc2;
                                    if($gc1 > $gc2)
                                        $no_of_football_matches_win=$no_of_football_matches_win+1;
                                    if($gc1 == $gc2)
                                        $no_of_football_matches_tie=$no_of_football_matches_tie+1;
                                }
                                if($clg == $clg2)
                                {
                                    $gscored=$gscored+$gc2;
                                    $gconceded=$gconceded+$gc1;
                                    if($gc2 > $gc1)
                                        $no_of_football_matches_win=$no_of_football_matches_win+1;
                                    if($gc1 == $gc2)
                                        $no_of_football_matches_tie=$no_of_football_matches_tie+1;
                                }
                            } 
                        }
                        if( $result2->num_rows > 0)
                        {
                            // echo "fvjvhjhbhj\n";
                            while($row=$result2->fetch_assoc())
                            {
                                $no_of_cricket_matches=$no_of_cricket_matches+1;
                                $clg1=$row['clg1'];
                                $clg2=$row['clg2'];
                                $r1=$row['r1'];
                                $r2=$row['r2'];
                                $w1=$row['w1'];
                                $w2=$row['w2'];

                                if($clg==$clg1)
                                {
                                    $runscored=$runscored+$r1;
                                    $wicketstaken=$wicketstaken+$w2;
                                    if($r1 > $r2)
                                            $no_of_cricket_matches_win=$no_of_cricket_matches_win+1;
            
                                    if($r1 == $r2)
                                        $no_of_cricket_matches_tie=$no_of_cricket_matches_tie+1;

                                    $nrr=$nrr+($r1 - $r2)/10;
                                    
                                }
                                if($clg==$clg2)
                                {
                                    $runscored=$runscored+$r2;
                                    $wicketstaken=$wicketstaken+$w1;
                                    if($r1 < $r2)
                                        $no_of_cricket_matches_win=$no_of_cricket_matches_win+1;
                                    if($r1 == $r2)
                                        $no_of_cricket_matches_tie=$no_of_cricket_matches_tie+1;
                                    
                                    $nrr=$nrr+($r2 - $r1)/10;
                                }
                            }
                        }
                        $no_of_total_matches=$no_of_cricket_matches+$no_of_football_matches;
                        $no_of_total_matches_win=$no_of_football_matches_win+$no_of_cricket_matches_win;
                        $no_of_total_matches_tie=$no_of_cricket_matches_tie+$no_of_football_matches_tie;
                        ?>
                            <div class="info">
                            <?php
                            //goal percentage
                            if($gscored==0 && $gconceded==0 )
                                echo "no football matches yet";
                            else
                                {
                                    $goal_percentage=($gscored/($gscored+$gconceded))*100;
                                    echo "this year's goal percentage is".$goal_percentage;
                                }

                            //net run rate
                            ?>
                            </div>
                            <div class="info">
                                <?php echo "net run rate =".$nrr;?>
                            </div>
                            <div class="info">
                            <?php
                                //football win percentage
                                if($no_of_football_matches == 0)
                                    echo "no football matches yet";
                                else
                                {
                                    $football_win_percentage=($no_of_football_matches_win/$no_of_football_matches)*100;
                                    echo "football win percentage=".$football_win_percentage;
                                }
                            ?>
                            </div>
                            <div class="info">
                            <?php
                            //cricket win percentage
                            if($no_of_cricket_matches == 0)
                                echo "no cricket matches yet";
                            else
                            {
                                $cricket_win_percentage=($no_of_cricket_matches_win/$no_of_cricket_matches)*100;
                                echo "cricket win percentage=".$cricket_win_percentage;
                            }
                            ?>
                            </div>
                            <div class="info">
                            <?php
                            //total win percentage
                            if($no_of_total_matches == 0)
                                echo "no matches yet";
                            else
                            {
                                $total_win_percentage=($no_of_total_matches_win/$no_of_total_matches)*100;
                                echo "total win percentage is".$total_win_percentage;
                            }
                            ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?> 
    </div>

<div class="admin">
        <form action = "previousclashes.php" method="post">
            <h3>SEE PREVIOUS CLASHES</h3>
                <input class = "button" type = "submit" name="pstats" value = "CLICK HERE"> 
            </form>
        </div>

        <?php
        if(isset($_POST["pstats"]))
        {
            echo $GLOBALS[$clg];
            echo "hi";
            
            // $sql="SELECT * FROM past_fixtures WHERE $clg";

        }
        ?>
</body>