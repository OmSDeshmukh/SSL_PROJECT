<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Points Table</title>
</head>
<body>
    <h1>Points Table</h1
    <table>
        <th>College</th>
        <th>Football</th>
        <th>Cricket</th>
        <th>Total</th><br>
    <?php
        $conn = new mysqli("localhost" , "root" , "" ,"db");
        $sql = "SELECT college , football_points , cricket_points , total_points FROM points LIMIT 23";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo"
                    <td>".$row["college"]."</td>
                    <td>".$row["football_points"]."</td>
                    <td>".$row["cricket_points"]."</td>
                    <td>".$row["total_points"]."</td><br>
                ";
            }
        }
    ?>
    </table>
</body>
</html>