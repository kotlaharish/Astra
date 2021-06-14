<?php 
error_reporting(0);
session_start();

    $conn= mysqli_connect("localhost", "root", "", "enroll");
    
   
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $club ?> Members</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>

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
  font-size: 90px;
  height:100px;
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


/*  styling for vertical menu bar::: starts here */

ul.form {
		position:relative;
		background:#fff;
		width:150px;
		background:#333;
		padding:0;
		list-style: none;
		overflow:hidden;
		
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;	
		
		-webkit-box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1);
		-moz-box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1);
		box-shadow:  1px 1px 10px rgba(0, 0, 0, 0.1);	
	}

	.form li a {
		width:225px;
		padding-left:20px;
		height:50px;
		line-height:50px;
		display:block;
		overflow:hidden;
		position:relative;
		text-decoration:none;
		text-transform:uppercase;
		font-size:14px;
		color:white;
		
		-webkit-transition:all 0.2s linear;
		-moz-transition:all 0.2s linear;
		-o-transition:all 0.2s linear;
		transition:all 0.2s linear;			
	}

	.form li a:hover {
    background: crimson;
    width:100%;
    border-left: 5px solid #B31131;
    border-color: transparent #EEE transparent transparent ;
    border-style: solid;
    right: 0;
	}

	.form li a.profile {
		border-left:5px solid #008747;
	}

	.form li a.messages {
			border-left:5px solid #fecf54;
	}
		
	.form li a.settings {
			border-left:5px solid #cf2130;
	}

	.form li a.logout {
			border-left:5px solid #dde2d5;
	}	

	.form li:first-child a:hover, .form li:first-child a {
		-webkit-border-radius: 5px 5px 0 0;
		-moz-border-radius: 5px 5px 0 0;
		border-radius: 5px 5px 0 0;
	}

	.form li:last-child a:hover, .form li:last-child a {
		-webkit-border-radius: 0 0 5px 5px;
		-moz-border-radius: 0 0 5px 5px;
		border-radius: 0 0 5px 5px;
	}

	.form li a:hover i {
		color:black;
    width:100%;
    border-style: solid;
	}

	.form i {
		margin-right:15px;
		
		-webkit-transition:all 0.2s linear;
		-moz-transition:all 0.2s linear;
		-o-transition:all 0.2s linear;
		transition:all 0.2s linear;	
	}

	
	.form li.selected a {
    background: crimson;
    width:100%;
    border-left: 5px solid #B31131;
	}

  a, li {  
  transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
}
a {color:white; text-decoration:none;}
/* styling for vertical bar menu ends here */

.content {
  border: 1px solid rgba(0, 0, 0, 0.15);
  display: -webkit-box;
  display: flex;
  flex-wrap: wrap;
  -webkit-box-flex: 1;
          flex-grow: 1;
  margin-left: 20px;
  border-radius: 7.5px;
  overflow: hidden;
}
.content .header {
  width: 100%;
  min-height: 50px;
  display: -webkit-box;
  display: flex;
  flex-wrap: wrap;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: justify;
          justify-content: space-between;
  border-bottom: 1px solid rgba(255, 255, 255, 0.5);
  padding: 10px 20px;
  background: -webkit-linear-gradient(-45deg, rgba(0, 0, 0, 0.01) 0%, rgba(0, 0, 0, 0.1) 100%);
}
.content .header p, .content .header a {
  margin: 5px 0;
  color: #dc2430;
}
.content .header p {
  margin-right: 10px;
}
.content .header a {
  color: #dc2430;
}
.content .body2 {
  padding: 20px;
  display: -webkit-box;
  display: flex;
  width: 100%;
  background: -webkit-linear-gradient(-45deg, rgba(0, 0, 0, 0.01) 0%, rgba(0, 0, 0, 0.1) 100%);
  height: 100%;
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
      ">HIGHER OFFICIAL PORTAL</h1>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="navbar">
 <a href="#" class="active">Workshop Enrollments</a>
  <a href="workshop.php">Workshops</a>

  <a href="hea.php" >Event Enrollments</a>
    <a href="events.php">Events</a>
 
  <a href="Hodmsgs.php" >Messages</a>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <a  href="mainpage.php">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
  
</div><br />



<div style="display:flex;">
<!-- vertical bar menu -->
<div class="nav">
<ul class="form">
  <!-- href consisits of id of the element whichi is to be shown class of the element ahould be  named as tab content-->
    
   <!-- default selected first one-->
  <li class="selected"><a class="profile" href="#section-london">CSE</a></li>
		<li ><a class="messages" href="#section-paris"></i>ECE</a></li>
		<li><a class="settings" href="#section-hybd">EEE</a></li>
    <li><a class="logout" href="#section-sdpt">MECH</a>
      
  
  </li>
	</ul>
  
</div>
         
     <!-- This is the content panel on right -->
     <div class="content" style="display:inline-block;">
	
	    


		<!--All content must be placed inside of this body2 -->
	   <div class="body2">


    <!-- On selecting tab1  this form is shown -->  
<?php
session_start();
?>
<div id="section-london" class="tab-content">
<?php 
$_SESSION['Branch']='CSE';
?>
<center><h2 style="text-align: center;
font-size : 30px;
color: chocolate;">RESPONSES FOR UPCOMING WORKSHOPS</h2></center>

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

<table class="sortable" id="customers" >
  <tr class="col">
    <th>S.No</th>
    

<th>Roll_No</th>
<th>Name</th>
<th>Branch</th>
<th>Year</th>
<th>Email_ID</th>
<th>InterestedWorkshop</th>

  </tr>
 <tbody>
<?php
          $conn=mysqli_connect("localhost","root","","enroll");
	 
	$x= $_POST['first'];
	$y= $_POST['second'];
	$z= $_POST['third'];
 $query="SELECT * FROM workshop where InterestedWorkshop in(Select Name from workfun where Branch='".$_SESSION['Branch']."')";
if (isset($_POST['bt']))
 {
    $query="select * from workshop where branch='$x' and Year='$y' and InterestedWorkshop='$z'";

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
        <td align="center"><?php echo $row["InterestedWorkshop"]; ?></td>

        </tr>
<?php $count++ ;} ?>
  </tbody>
</table><br>

</div>


</div>
 <!-- On selecting tab2  this div is shown -->
<div id="section-paris" class="tab-content">
<?php 
$_SESSION['Branch']='ECE';
?>
<center> <h2>RESPONSES FOR UPCOMING WORKSHOPS</h2>
</center>
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

<table class="sortable" id="customers" >
  <tr class="col">
    <th>S.No</th>
    

<th>Roll_No</th>
<th>Name</th>
<th>Branch</th>
<th>Year</th>
<th>Email_ID</th>
<th>InterestedWorkshop</th>

  </tr>
 <tbody>
<?php
          $conn=mysqli_connect("localhost","root","","enroll");
	 
	$x= $_POST['first'];
	$y= $_POST['second'];
	$z= $_POST['third'];
 $query="SELECT * FROM workshop where InterestedWorkshop in(Select Name from workfun where Branch='".$_SESSION['Branch']."')";
if (isset($_POST['bt']))
 {
    $query="select * from workshop where branch='$x' and Year='$y' and InterestedWorkshop='$z'";

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
        <td align="center"><?php echo $row["InterestedWorkshop"]; ?></td>

        </tr>
<?php $count++ ;} ?>
  </tbody>
</table><br>

</div>


</div>
 


<div id="section-hybd" class="tab-content">
<?php 
$_SESSION['Branch']='EEE';
?>
<center> <h2>RESPONSES FOR UPCOMING WORKSHOPS</h2>
</center>
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

<table class="sortable" id="customers" >
  <tr class="col">
    <th>S.No</th>
    

<th>Roll_No</th>
<th>Name</th>
<th>Branch</th>
<th>Year</th>
<th>Email_ID</th>
<th>InterestedWorkshop</th>

  </tr>
 <tbody>
<?php
          $conn=mysqli_connect("localhost","root","","enroll");
	 
	$x= $_POST['first'];
	$y= $_POST['second'];
	$z= $_POST['third'];
 $query="SELECT * FROM workshop where InterestedWorkshop in(Select Name from workfun where Branch='".$_SESSION['Branch']."')";
if (isset($_POST['bt']))
 {
    $query="select * from workshop where branch='$x' and Year='$y' and InterestedWorkshop='$z'";

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
        <td align="center"><?php echo $row["InterestedWorkshop"]; ?></td>

        </tr>
<?php $count++ ;} ?>
  </tbody>
</table><br>

</div>
</div>
        

		 
</div>

</div>
  






<script>
// script to add corresponding tab-content on to screen
$(document).ready(function() {

  $('.ul.form li:first').addClass('selected');
    $('.tab-content').not('#section-london').hide();
		$('ul.form li a').click(
			function(e) {
				e.preventDefault(); // prevent the default action
				e.stopPropagation; // stop the click from bubbling
        $(this).parent().siblings().removeClass('selected');
				$(this).parent().addClass('selected');
        var content = $(this).attr('href');
        showone(content);
        
			});
	});

function showone(content){
  $('.tab-content').not(content).hide();
  $(content).show();
}
  
</script>

</body>
</html>