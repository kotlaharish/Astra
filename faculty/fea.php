<?php 
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $club ?> Workshops</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}


/* Header/logo Title */
.header {
  padding: 15px;
  text-align: center;
  background: #2d837b;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

h2{
text-align: center;
font-size : 30px;
color: chocolate;
}

* {
  box-sizing: border-box;
}

input[type=text] {
  width: 80%;
  margin-bottom: 10px;
  padding: 6px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

label {
  margin-bottom: 10px;
  display: block;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 70%;
  position:relative;
  left: 130px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}

/* Footer */
.footer {
  padding: 5px;
  text-align: center;
  background: #ddd;
  font-size:25px;
}

p{
	font-size: 20px;
	font-family:Gill Sans;
}

@media (max-width: 800px) {
  .row {
  flex-direction: column;}
}
</style>
</head>
<body>
<div class="header">
  <h1 style="


  text-align:center;
  font-size:50px;
  color:white;

  left:0;
  text-shadow:
    -1px 1px 0px #c4dbe2,
    -2px 2px 0px #b4d1d9,
    -3px 3px 0px #a6c6cf,
    -4px 4px 0px #94b8c3,
    -5px 5px 0px #87aeb9,
    -6px 6px 0px #7aa3af,
    -7px 7px 0px #6d97a3,
    -8px 8px 0px #618b98,
    -9px 9px 0px #56818e,
    -10px 10px 0px #4c7683,
    -15px 15px 25px rgba(0,0,0,.9);
      ">Faculty Portal</h1>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="navbar">
   <a href="fma.php" >Member Applications</a>
   <a href="wa.php" >Workshop Enrollments</a>
  <a href="#" class="active">Event Enrollments</a>
  <a href="fae.php" >Add Events</a>
  <a href="faw.php">Add Workshops</a>
  <a href="form2.php" >Messages</a>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
   <a  href="mainpage.php">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
  
</div><br />

<h2>RESPONSES FOR UPCOMING EVENTS</h2>
<center>
<form id="myform" method="POST">
  
    <select id="s"  style="padding:5px;width:100px;border-radius:5px;" class="">
        <option value="CSE">CSE</option>
        <option value="ECE">ECE</option>
        <option value="EEE">EEE</option>
        <option value="mech">MECH</option>
        <option value="chem">chem</option>
        <option value="civil">civil</option>
        <option value="Biotech">Biotech</option>
        <option value="MME">MME</option>
        </select>
    

     
        <select id="s1" style="padding:5px;width:100px;border-radius:5px;" class="">
        <option value="1">I</option>
        <option value="2">II</option>
        <option value="3">III</option>
        <option value="4">IV</option>
        </select>
        
 <input type="hidden" name="first" id="f1" value="" >
 <input type="hidden" name="second" id="f2" value=" " >
 <input style="padding:5px;width:200px;" type="text" name="third" id="s2" class="" value="" placeholder="Event Name" >
 <input style="width:100px;height:auto;padding:5px;background-color:#009688 ;color:white;border-radius:5px;" type="submit" class=" bg-success" onclick="c()" name="bt" value="Submit">
 
</form>
</center>

<script type="text/javascript">
function c(){
var x=document.getElementById("s").value;
var y=document.getElementById("s1").value;

document.getElementById("f1").value=x;
document.getElementById("f2").value=y;
//document.getElementById("myform").submit();
};
</script>

<script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
<div class="table">

<table class="sortable" id="customers">
  <tr class="col">
    <th>S.No</th>
    <th>Roll_No</th>
	<th>Name</th>
	<th>Branch</th>
	<th>Year</th>
	<th>Email_ID</th>
	<th>InterestedEvent</th>

  </tr>
 <tbody>
<?php
        $conn=mysqli_connect("localhost","root","","enroll");
	 
	$x= $_POST['first'];
	$y= $_POST['second'];
	$z= $_POST['third'];
 $query="SELECT * FROM event where InterestedEvent in(Select Name from fun where Branch='".$_SESSION['Branch']."')";
if (isset($_POST['bt']))
 {
    $query="select * from event where branch='$x' and Year='$y' and InterestedEvent='$z'";

 }
 
	
	$result = mysqli_query($conn,$query);
	$count=1;
    while($row = mysqli_fetch_assoc($result)) {  ?>
        <tr>
		<td align="center"><?php echo $count; ?></td>
        <td align="center"><?php echo $row["Roll_No"]; ?></td>
        <td align="center"><?php echo $row["Name"]; ?></td>
        <td align="center"><?php echo $row["branch"]; ?></td>
        <td align="center"><?php echo $row["Year"]; ?></td>
        <td align="center"><?php echo $row["Email_ID"]; ?></td>
        <td align="center"><?php echo $row["InterestedEvent"]; ?></td>

        </tr>
<?php $count++ ;} ?>
  </tbody>
</table><br>

</div>


</body>
</html>