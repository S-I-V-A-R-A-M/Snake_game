<?php

$name=$_POST['p_name'];

$con=mysqli_connect("localhost","root","","snake");

$sql="INSERT INTO scoreboard (n) VALUES ('$name')";

$result=mysqli_query($con,$sql);

header("Location:website.php");

?>
