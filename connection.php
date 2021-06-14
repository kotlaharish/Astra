<?php
$dbservername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="enroll";
$conn=mysqli_connect("localhost","root","","jobrecur");
if($conn)
{ echo "connection established";}
else 
{ echo "failed";}
?>