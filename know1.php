<?php
error_reporting(0);
$id = $_GET['id'];
$conn= mysqli_connect("localhost", "root", "", "enroll");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "select * from fun where ID=$id"; 
$r=mysqli_query($conn, $sql);	
$q=$row['Name'];
$query="Select count(*) as x from event where InterestedEvent='$q' AND Partcipated=1";
$results= mysqli_query($conn,$query);
$rs = mysqli_fetch_assoc($results);    
?>
<html>
<head><title>Completed Events</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="sty.css"></link>
</head>
<style>
h3{
	margin-left:65%;
}
h2{
	margin-top:3%;
	margin-left:3%;
}
.box
  {
   height: auto;
   width: 55%;
   border:1px solid #ccc;
   background-color:#9e9e9e30;
   border-radius:5px;
   margin-left:20%;
   margin-top:5%;
  }
  p{
	  font-size:25px; 
	  margin-left:65%;
	  
  }
  
  input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 15px 30px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left:180px;
  font-size:20px;
}

input[type=submit]:hover {
  background-color: #45a049;
}
</style>
<body>
 <div class="box">
<?php ($row=mysqli_fetch_array($r)) ?>
<h2><?php echo $row['Name']?><br /></h2>
<img alt="image" class="img-responsive hello" style="float:left; margin-left:20px; width:300px; heigth: 100px;" src="Img/<?php echo $row["Image"]; ?> ">
<h3><u>Organisers</u> :</h3>
<p ><?php echo $row['Organisers']; ?></p>
<h3 ><u>Date</u> :</h3>
<p ><?php echo date("d-m-Y", strtotime($row['Date'])); ?></p>
<h3><u>Timings</u> :</h3>
<p ><?php echo date("g:i a", strtotime($row['stime'])).' - '.date("g:i a", strtotime($row['etime'])); ?></p>
<h3><u>Description</u> :</h3>
<p ><?php echo $row['Description']; ?></p>
<?php 
 $today = date("Y-m-d");						
 $day = $row['Date'];
 $Time = $row['etime'];
 $today = strtotime($today);						
 $expiration_date = strtotime($day);                        
 $f=$expiration_date - $today;
if($f<0){?>
<h3><u>No of participants</u> :</h3>
<p ><?php echo $rs['x']; ?></p>

 <?php } if($f ==0 ){
		if(time() > strtotime($Time)) {?>
		<h3><u>No of participants</u> :</h3>
<p ><?php echo $rs['x']; ?></p>
 <?php }}?>
<?php 
$q=$row['Name'];
$query="Select * from event where InterestedEvent='$q' and Winners=1 ";
$result = mysqli_query($conn,$query);
$c=mysqli_num_rows($result);
if($c>0){?>

<h2>WINNERS</h2>
<table id="t3">
<tr>
<th>Name</th>
<th>Branch</th>
<th>Year</th>
</tr>
<?php
while ($rows = mysqli_fetch_assoc($result)) {
echo " <tr>
<td>".$rows['Name']."</td>
<td>".$rows['Branch']."</td>
<td>".$rows['Year']."</td>
</tr> " ;
}}
?>
</table>
<?php  if ($f >0) {?>
<center>
<form action='Event_enroll_form.php' method="post">
<?php session_start();           //add session variable here
$_SESSION['name']=$row['Name'] 
 ?>
<input type="submit" name="submit" style="margin-top:5px;" class="btn btn-success" value="Enroll" />
</form>
 </center>
 <?php  } ?>
 <?php  if ($f ==0) {
	 if(time() < strtotime($Time)) {?>
<center>
<form action='Event_enroll_form.php' method="post">
<?php session_start();           //add session variable here
$_SESSION['name']=$row['Name'] 
 ?>
<input type="submit" name="submit" style="margin-top:5px;" class="btn btn-success" value="Enroll" />
</form>
 </center>
<?php  }} ?>
 </div>
</body>
</html>

