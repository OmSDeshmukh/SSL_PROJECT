<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

$sql = file_get_contents('tournamentdata.sql');

if ($conn->multi_query($sql) === TRUE) 
{
  echo "New records created successfully";
}
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn = new mysqli($servername, $username, $password);
$sql = 'USE `SSLPROJECT`;';
$conn->query($sql);

$clg=array("IIT-Dharwad","IIT-Bombay","IIT-Roorkee","IIT-Kharagpur","IIT-Kanpur","IIT-Madras","IIT-Guwahati","IIT-Dhanbad","IIT-Hyderabad","IIT-Mandi","IIT-Gandhinagar","IIT-Ropar","IIT-Varanasi","IIT-Bhubneshwar","IIT-Patna","IIT-Jodhour","IIT-Indore","IIT-Tirupati","IIT-Goa","IIT-Pallakkad","IIT-Bhillai","IIT-Delhi","IIT-Jammu");


$sql='CREATE TABLE IF NOT EXISTS past_fixtures
    (
      clg1 VARCHAR(50) NOT NULL,
      clg2 VARCHAR(50) NOT NULL,
      cwin1 INT(6) DEFAULT 0,
      cwin2 INT(6) DEFAULT 0,
      fwin1 INT(6) DEFAULT 0,
      fwin2 INT(6) DEFAULT 0
    );';
$conn->query($sql);

$conn = new mysqli($servername, $username, $password);
$sql = 'USE `SSLPROJECT`;';
$conn->query($sql);
for($i=0;$i<count($clg);$i++)
{
  $clg1=$clg[$i];
  for($j=$i+1;$j<count($clg);$j++)
  {
    $clg2=$clg[$j];

    $cwin1=rand(0,5);
    $t=rand(0,5-$cwin1);
    $cwin2=5-$cwin1-$t;

    $fwin1=rand(0,5);
    $t=rand(0,5-$fwin1);
    $fwin2=5-$fwin1-$t;

    $sq1l="INSERT INTO past_fixtures(clg1,clg2,cwin1,cwin2,fwin1,fwin2) VALUES('$clg1','$clg2','$cwin1','$cwin2','$fwin1','$fwin2')";
    $conn->query($sq1l);
  }
}

$conn->close();
?>