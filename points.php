<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Points Table</title>
    <!-- <link rel = "stylesheet" href = "css/points.css"> -->
    <style>
        body{background-color : lightgray; margin : 20px;}
        .content{
            margin : 50px;
            display:flex ;
            justify-content : center ;
            align-items : center ;
            flex-direction : column;
            background-color : rgb(229, 201, 165);
            border-radius : 50px;
            overflow : hidden;
        }
        .content h1{
            text-align : center;
            width : 100%;
            background-color : darkred ;
            color : whitesmoke;
            margin-top : 0px;
            padding : 20px;
        }

        .content table{
            margin-bottom : 50px;
            width : 65vw;
            text-align : center ;
            border-spacing : 2px;
        }

        .content table , th , td {
            border : 2px solid black ;
            border-collapse : collapse;
            height : 30px;
        }

       .content tr:nth-child(even){
            background-color : beige;
        }

        .content tr:nth-child(odd){
            background-color : lightgoldenrodyellow;
        }

        .content th{
            background-color : maroon;
            border : 3px solid darkred ;
            border-radius : 2px;
            color : whitesmoke;
            font-size : 40px;
            padding-top : 5px ;
            padding-bottom : 5px;
        }

        .content input[type = submit]{
            width : 200px;
            margin-bottom : 50px;
            height : 75px;
            font-size : 25px;
            border : 0px ;
            border-radius : 3px;
        }

         
        .content tr:nth-child(2){
            background-color : gold;
        }

        .content tr:nth-child(3){
            background-color : silver;
        }

        
        .content tr:nth-child(4){
            background-color : #CD7F32;
        }

    </style>
</head>
<body>

<div class="content">
    
    <h1>Points Table</h1>
    <table>
        <tr>
            <th>College</th>
            <th>Football</th>
            <th>Cricket</th>
            <th>Total</th>
        </tr>
    <?php
        $conn = new mysqli("localhost" , "root" , "" ,"SSLPROJECT");
        $sql = "SELECT college , football_points , cricket_points , total_points FROM points ORDER BY total_points DESC";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $row['college'] ?> </td>
                    <td><?php echo $row['football_points'] ?></td>
                    <td><?php echo $row['cricket_points'] ?></td>
                    <td><?php echo $row['total_points'] ?></td>
                </tr>
            <?php
            }
        }
    ?>
    </table>
        <form action = "home.php">
            <input type = "submit" value = "Return Home">
        </form>
</div>
</body>
</html>