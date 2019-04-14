<?php
 $n= $_POST["comment"];
//echo "$n";
//  $p=$_POST["name"] ;
//  echo "$p";


 //echo $n; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO info (review) VALUES ('$n')";

if ($conn->query($sql) === TRUE) {
    $message = "Thank you for submitting your complaint!";
echo "<script type='text/javascript'>alert('$message');window.location.href = 'post.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
 ?>