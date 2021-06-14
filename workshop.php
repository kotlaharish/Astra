<?php 
session_start();
?>


<html>
<head>
<title><?php echo $_SESSION['Branch']?> Workshops</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
<style type="text/css">

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


   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
.linkspart
{
width:full;
height:48px;
border-style:null;
margin-top:5px;
background-color:#ddd;
}


#Enroll
{
background-color:#2ecc71;
padding:5px;
color:white;
text-align:center;
height:45px;
width:auto;
font-size:25px;

border-radius:10px;
}




#Completed_Events
{
background-color:#3498db;
padding:5px;
color:white;
height:45px;
width:auto;
font-size:25px;

border-radius:10px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!--add this-->
<script>
$(document).ready(function(){
  $(".login-form").hide();
$(".login").click(function(){
  $(".signup-form").hide();
  $(".login-form").show();  
});

$(".signup").click(function(){
  $(".signup-form").show();
  $(".login-form").hide(); 
});
});
</script> <!-- until here-->
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
    
  
"><?php echo $_SESSION['Branch']?> Workshops</h1>
</div>
<div class="linkspart">

<center> 
  <input class="signup" type="submit" id="Enroll" value="Upcoming Events"/> &nbsp  <!--add class here and remove your link -->
  <input class="login" type="submit" id="Completed_Events" value="Completed Events"/>     <!--add class here and remove your link-->
</center>
</div>
<br>
<div class="signup-form"> <!--add this-->
<div class="container">
<div class="row">

<?php

$conn=mysqli_connect("localhost","root","","enroll"); //change database
$datex=date('Y-m-d');
$result = mysqli_query($conn, "SELECT * FROM workfun where Branch='".$_SESSION['Branch']."'");


if (mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
						 $today = date("Y-m-d");						
                        $day = $row['Date'];
						$Time = $row['etime'];
                        $today = strtotime($today);						
                        $expiration_date = strtotime($day);                        
                        $f=$expiration_date - $today;
                        						
                      if ($f >0) {
				?>
			<div class="col-md-4">
				
					<div style="border:1px solid #333; background-color:#ecf0f1; border-radius:5px; padding:16px;" align="center">
						<img src="Imgi/<?php echo $row["Image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["Name"]; ?></h4>

						<h4 class="text-danger"><?php echo $row["Description"]; ?></h4>

						
						<h4 class="text-info"><?php echo date("d-m-Y", strtotime($row["Date"])); ?></h4>


						<form action='workshop_know.php?id="<?php echo $row['ID']; ?>"' method="post">
						
                        <input type="submit" name="submit" style="margin-top:5px;" class="btn btn-success" value="Know more" />
                         </form>

					</div></div>
					  <?php } if($f == 0){
					      if(time() < strtotime($Time)) {?>
						  <div class="col-md-4">
						  <div style="border:1px solid #333; background-color:#ecf0f1; border-radius:5px; padding:16px;" align="center">
						<img src="Imgi/<?php echo $row["Image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["Name"]; ?></h4>

						<h4 class="text-danger"><?php echo $row["Description"]; ?></h4>

						
						<h4 class="text-info"><?php echo date("d-m-Y", strtotime($row["Date"])); ?></h4>


						<form action='workshop_know.php?id="<?php echo $row['ID']; ?>"' method="post">
						
                        <input type="submit" name="submit" style="margin-top:5px;" class="btn btn-success" value="Know more" />
                         </form>

					</div>
			</div>
					  <?php }}
					}
				}
			?>
			 </div></div>
</div>
<div class="login-form"> <!--add this--><!--I added completed events also here only-->
<div class="container">
<div class="row">
<?php
$conn=mysqli_connect("localhost","root","","enroll"); //change database

$datex=date('Y-m-d');
$result1 = mysqli_query($conn, "SELECT * FROM workfun where  Branch='".$_SESSION['Branch']."'");
if(mysqli_num_rows($result1) > 0)
				{
					while($row1 = mysqli_fetch_array($result1))
					{
						 $today = date("Y-m-d");						
                        $day = $row1['Date'];
						$Time = $row1['etime'];
                        $today = strtotime($today);						
                        $expiration_date = strtotime($day);                        
                        $f=$expiration_date - $today;
                        
                      if ($f <0) {
				?>
		
			
			<div class="col-md-4">
				
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="Imgi/<?php echo $row1["Image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row1["Name"]; ?></h4>

						<h4 class="text-danger"><?php echo $row1["Description"]; ?></h4>

						
						<h4 class="text-info"><?php echo date("d-m-Y", strtotime($row1["Date"])); ?></h4>

						
						 <form action='workshop_know.php?id="<?php echo $row1['ID']; ?>"' method="post"> <!--changed this from a to form and in know you don't have winners you have to add that -->
						
                        <input type="submit" name="submit" style="margin-top:5px;" class="btn btn-success" value="Know more" />
                         </form>

					</div></div>
					  <?php }
					  if($f ==0 ){
					      if(time() > strtotime($Time)) {?>
						  <div class="col-md-4">
						  <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="Imgi/<?php echo $row1["Image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row1["Name"]; ?></h4>

						<h4 class="text-danger"><?php echo $row1["Description"]; ?></h4>

						
						<h4 class="text-info"><?php echo date("d-m-Y", strtotime($row1["Date"])); ?></h4>

						
						 <form action='workshop_know.php?id="<?php echo $row1['ID']; ?>"' method="post"> <!--changed this from a to form and in know you don't have winners you have to add that -->
						
                        <input type="submit" name="submit" style="margin-top:5px;" class="btn btn-success" value="Know more" />
                         </form>

					</div>
				
			</div>
					  <?php }}
					}
				}
			?>

</div>

 </div></div>
</body>
</html>














