<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Fixtures</title>
    <link rel = "stylesheet" href = "css/fixture.css">
</head>
<body>
    <form action = "home.php" class = "return">
        <input type = "submit" value = "Return Home">
    </form>
    
    <div style = "display:flex;flex-direction:row;">
        <div style = "display:flex;flex-direction:column;margin : 5px;">
        <!--football done-->
            <?php
                $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                $sql = "SELECT * FROM fixtures WHERE final_result IS NOT NULL";
                $result = $conn -> query($sql);
                if($result -> num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        ?>
                        <div class = "fixture">
                            <div class = "colleges">
                                    <div class="college">
                                        <td><?php echo $row["clg1"]; ?></td>
                                    </div>
                                        VS
                                    <div class="college">
                                        <td><?php echo $row["clg2"]; ?></td>
                                    </div>
                                </div>
                            <div class = "sport">
                            <td><?php echo $row["sport"]; ?></td>
                            </div>
                            <div class="time">
                                <div class="place">
                                    <td><?php echo $row["day_"] ?></td>
                                </div>
                                <div class="place">
                                    <td><?php echo $row["time_"] ?></td>
                                </div>
                                <div class="place">
                                    <td><?php echo $row["venue"] ?></td>
                                </div>
                            
                            </div>
                            <div class="result">
                                <?php if($row["final_result"] == "tie"){
                                    echo "Match Tied !<br>";
                                    echo "Score : ".$row["gc1"]."-".$row["gc2"];
                                }
                                ?>
                                
                                <?php
                                    if($row["final_result"] == "win"){
                                        if($row["gc1"] > $row["gc2"]){
                                            echo $row["clg1"]." Won<br>";
                                            echo "Score : ".$row["gc1"]."-".$row["gc2"];
                                        }
                                        else{
                                            echo $row["clg2"]." Won"; 
                                            echo "Score : ".$row["gc2"]."-".$row["gc1"];
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                }
                // else{
                //     echo"<center><p style = 'background-color : whitesmoke ; color : blue; font-size : 200px;'>No fixtures yet !<br>
                //     Visit sometime later :)</p></center>";
                // }
            ?>

            <!--football undone-->
            <?php
                $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                $sql = "SELECT * FROM fixtures WHERE final_result IS NULL";
                $result = $conn -> query($sql);
                if($result -> num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        ?>
                        <div class = "fixture">
                            <div class = "colleges">
                                    <div class="college">
                                        <td><?php $clg1 = $row["clg1"] ; echo $row["clg1"]; ?></td>
                                    </div>
                                        VS
                                    <div class="college">
                                        <td><?php $clg2=$row["clg2"] ; echo $row["clg2"]; ?></td>
                                    </div>
                                </div>
                            <div class = "sport">
                            <td><?php echo $row["sport"]; ?></td>
                            </div>
                            <div class="time">
                                <div class="place">
                                    <td><?php echo $row["day_"] ?></td>
                                </div>
                                <div class="place">
                                    <td><?php echo $row["time_"] ?></td>
                                </div>
                                <div class="place">
                                    <td><?php echo $row["venue"] ?></td>
                                </div>
                            
                            </div>
                                <?php
                                    //win probability
                                        $sqlk="SELECT * FROM past_fixtures
                                            WHERE (clg1 = '$clg1' AND clg2 = '$clg2')
                                            OR (clg1 = '$clg2' AND clg2 = '$clg1')
                                             LIMIT 1 ";
                                        $spo="football";
                                        $win1=0;
                                        $win2=0;
                                        $resultk = $conn->query($sqlk);
                                        if($resultk->num_rows > 0)
                                        {
                                            while($rowk = $resultk->fetch_assoc())
                                            {
                                                if($spo="football")
                                                {
                                                    // if($rowk['clg1']==$clg1)
                                                    $win1=$rowk['fwin1'];
                                                    $win2=$rowk['fwin2'];
                                                }
                                            }
                                        }
                                        $winprobability = 0 ; $winprobability2 = 0 ;
                                        if(($win1+$win2) != 0)
                                        {
                                            $winprobability=bcdiv($win1 , ($win1+$win2) , 4);
                                            $winprobability = $winprobability*100;
                                            $winprobability2=(100-$winprobability);
                                        }
                                        else
                                        {
                                            $winprobability = 50 ;
                                            $winprobability2 = 50 ;
                                        }
                                        ?>
                                        <div class="pro">
                                            <h5 style="margin : 0">Win Probability</h5>
                                            <div style = "text-align:center;">
                                                <?php echo $winprobability2."%"." ".$winprobability."%";?>
                                            </div>
                                        </div>
                        </div>
                        <?php
                    }
                }
            ?>
        </div>

        <div style = "display:flex;flex-direction:column;margin : 5px;">
        <!--cricket done-->
            <?php
                $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                $sql = "SELECT * FROM fixtures_cricket WHERE final_result IS NOT NULL";
                $result = $conn -> query($sql);
                if($result -> num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        ?>
                        <div class = "fixture">
                            <div class = "colleges">
                                    <div class="college">
                                        <td><?php echo $row["clg1"]; ?></td>
                                    </div>
                                        VS
                                    <div class="college">
                                        <td><?php echo $row["clg2"]; ?></td>
                                    </div>
                                </div>
                            <div class = "sport">
                            <td><?php echo $row["sport"]; ?></td>
                            </div>
                            <div class="time">
                                <div class="place">
                                    <td><?php echo $row["day_"] ?></td>
                                </div>
                                <div class="place">
                                    <td><?php echo $row["time_"] ?></td>
                                </div>
                                <div class="place">
                                    <td><?php echo $row["venue"] ?></td>
                                </div>
                            
                            </div>
                            <div class="result">
                                <?php if($row["final_result"] == "tie"){
                                    echo "Match Tied !<br>";
                                    echo "Score : ".$row["clg1"]." : ".$row["r1"]."/".$row["w1"]."<br>".$row["clg1"]." : ".$row["r1"]."/".$row["w1"];
                                }
                                ?>
                                
                                <?php
                                    if($row["final_result"] == "win"){
                                        if($row["r1"] > $row["r2"]){
                                            echo $row["clg1"]." Won<br>";
                                            echo "Score : ".$row["clg1"]." : ".$row["r1"]."/".$row["w1"]."<br>".$row["clg2"]." : ".$row["r2"]."/".$row["w2"];
                                        }
                                        else{
                                            echo $row["clg2"]." Won"; 
                                            echo "Score : ".$row["clg2"]." : ".$row["r2"]."/".$row["w2"]."<br>".$row["clg1"]." : ".$row["r1"]."/".$row["w1"];
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                }
                // else{
                //     echo"<center><p style = 'background-color : whitesmoke ; color : blue; font-size : 200px;'>No fixtures yet !<br>
                //     Visit sometime later :)</p></center>";
                // }
            ?>

            <!--cricket undone-->
            <?php
                $conn = new mysqli("localhost" , "root" , "" , "SSLPROJECT");
                $sql = "SELECT * FROM fixtures_cricket WHERE final_result IS NULL";
                $result = $conn -> query($sql);
                if($result -> num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        ?>
                        <div class = "fixture">
                            <div class = "colleges">
                                    <div class="college">
                                        <td><?php echo $row["clg1"]; ?></td>
                                    </div>
                                        VS
                                    <div class="college">
                                        <td><?php echo $row["clg2"]; ?></td>
                                    </div>
                                </div>
                            <div class = "sport">
                            <td><?php echo $row["sport"]; ?></td>
                            </div>
                            <div class="time">
                                <div class="place">
                                    <td><?php echo $row["day_"] ?></td>
                                </div>
                                <div class="place">
                                    <td><?php echo $row["time_"] ?></td>
                                </div>
                                <div class="place">
                                    <td><?php echo $row["venue"] ?></td>
                                </div>
                            
                            </div>
                                <?php
                                    $clg1=$row["clg1"];
                                    $clg2=$row["clg2"];
                                    //win probability
                                    $sqlk="SELECT * FROM past_fixtures
                                    WHERE ((clg1 = '$clg1' AND clg2 = '$clg2') OR (clg1 = '$clg2' AND clg2 = '$clg1'))
                                    LIMIT 1 ";
                                    $spo="cricket";
                                    $win1=0;
                                    $win2=0;
                                    $resultk = $conn->query($sqlk);
                                    if($resultk->num_rows > 0)
                                    {
                                        while($rowk = $resultk->fetch_assoc())
                                        {
                                            if($spo="cricket")
                                            {
                                                // if($rowk['clg1']==$clg1)
                                                $win1=$rowk['cwin1'];
                                                $win2=$rowk['cwin2'];
                                            }
                                        }
                                    }
                                    $winprobability = 0 ; $winprobability2 = 0 ;
                                    if(($win1+$win2) != 0){
                                        $winprobability=bcdiv($win1,$win1+$win2,4);
                                        $winprobability = $winprobability*100;
                                        $winprobability2=(100-$winprobability);
                                    }
                                    else{
                                        $winprobability = 50 ;
                                        $winprobability2 = 50 ;
                                    }
                                    // echo "<center>";
                                    // echo "<h5>Win Probability</h5><br>";
                                    // echo $winprobability."-".$winprobability2;
                                    // echo "</center>";
                                    ?>
                                    <div class="pro">
                                        <h5 style="margin : 0">Win Probability</h5>
                                        <div style = "text-align:center;">
                                            <?php echo $winprobability2."%"." ".$winprobability."%";?>
                                        </div>
                                    </div>
                        </div>
                        <?php
                    }
                }
                // else{
                //     echo"<center><p style = 'background-color : whitesmoke ; color : blue; font-size : 200px;'>No fixtures yet !<br>
                //     Visit sometime later :)</p></center>";
                // }
            ?>
        </div>
    </div>

    <form action = "home.php" class = "return">
        <input type = "submit" value = "Return Home">
    </form>

<?php

?>
</body>
</html>
