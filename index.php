<?php
$conn=mysqli_connect("localhost","root","","enroll");
if (isset ($_POST['submit'])) {

$un = $_POST['email'];
$pw = $_POST['password'];

$sql = "Select Password from faculty where Email='$un'";

$res=mysqli_query($conn, $sql);
if(mysqli_num_rows($res))
{  
$x=mysqli_fetch_assoc($res);
if($x["Password"]===$pw)
{    header("Location:Facultydisp.php");}
else{echo '<script type="text/javascript">alert("Wrong Password!")</script>';}
 }
else{ echo "no user found";}
}
?>   