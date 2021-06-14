<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","enroll");
function error() {
  if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['Submit']))  echo "Error" ;
  }
}
if($_SERVER['REQUEST_METHOD'] == "POST"){

    $valid = true;

    if(empty($_POST['firstname'])){
        $valid=false;
        $nameError = "Name missing";
    }

    if(empty($_POST['lastname'])){
        $valid=false;
        $emailError = "lastname missing";
    }
    if(empty($_POST['subject'])){
      $valid=false;
      $emailError = "subject missing";
  }

    if($valid){
	echo "Succesfully submitted the response";
    }
    else {
        error($valid);
    }    
}
if (isset($_POST['Submit'])) {
$a= $_POST["firstname"];
$b= $_POST["lastname"];
$c= $_POST["subject"];

$sql="insert into responses(firstname,lastname,subject)  values('$a','$b','$c')";

$result = mysqli_query($conn,$sql);

if($result){ echo "";}
else { echo "failed";}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.btn {
  box-sizing: border-box;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: transparent;
  border: 2px solid #e74c3c;
  border-radius: 0.6em;
  color: #e74c3c;
  cursor: pointer;
  display: -webkit-box;
  display: flex;
  align-self: center;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1;
  margin: 20px;
  padding: 1.2em 2.8em;
  text-decoration: none;
  text-align: center;
  text-transform: uppercase;
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
}
.btn:hover, .btn:focus {
  color: #fff;
  outline: 0;
}

.third {
  border-color: #3498db;
  color: #fff;
  box-shadow: 0 0 40px 40px #3498db inset, 0 0 0 0 #3498db;
  -webkit-transition: all 150ms ease-in-out;
  transition: all 150ms ease-in-out;
}
.third:hover {
  box-shadow: 0 0 10px 0 #3498db inset, 0 0 10px 4px #3498db;
}


* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;

}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.linkspart{
width:full;
height:48px;
border-style:null;
margin-top:5px;
background-color:#ddd;
}

#acc{
background-color:#2ecc71;
padding:5px;
color:white;
text-align:center;
height:45px;
width:150px;
font-size:25px;
border-radius:5px;
}

#pro{
background-color:#2ecc71;
padding:5px;
color:white;
text-align:center;
height:45px;
width:150px;
font-size:25px;
border-radius:5px;
}

#rej{
background-color:#2ecc71;
padding:5px;
color:white;
text-align:center;
height:45px;
width:150px;
font-size:25px;
border-radius:5px;
}

#form{
background-color:#2ecc71;
padding:5px;
color:white;
height:45px;
width:150px;
font-size:25px;
border-radius:5px;
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
h2{
text-align: center;
font-size : 30px;
color: chocolate;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!--add this-->
<script>
$(document).ready(function(){
  $(".acc-form").hide();
  $(".pro-form").hide();
  $(".rej-form").hide();
$(".acc").click(function(){
  $(".form-form").hide();
  $(".rej-form").hide();
  $(".pro-form").hide();
  $(".acc-form").show();  
});
$(".pro").click(function(){
  $(".form-form").hide();
  $(".rej-form").hide();
  $(".acc-form").hide();
  $(".pro-form").show();  
});
$(".rej").click(function(){
  $(".form-form").hide();
  $(".acc-form").hide();
  $(".pro-form").hide();
  $(".rej-form").show();  
});
$(".form").click(function(){
  $(".acc-form").hide();
  $(".rej-form").hide();
  $(".pro-form").hide();
  $(".form-form").show();  
});
});
</script>
</head>
<body>
<center>
<div class="linkspart">
  
  <input class="form" type="submit" id="form" value="Form"/> &nbsp
  <input class="acc" type="submit" id="acc" value="Accepted"/> &nbsp  
  <input class="pro" type="submit" id="pro" value="In-process"/> &nbsp  
  
 <input class="rej" type="submit" id="rej" value="Rejected"/>
  
    

</div>
</center>
<br>
<div class='form-form'>
<h2>Responsive Form</h2>
<div class="container">
  <form action=" " method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name"/>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Event Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Event Name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Budget Request</label>
      </div>
      <div class="col-75">
        <textarea id="subject" style="height:200px" name="subject" placeholder="Budget Details" ></textarea>
      </div>
    </div>
    <div class="row">
      <input style="float:right;" type="submit" name="Submit" value="submit"/>
    </div>
  </form>
</div></div>
<div class='acc-form'>
<h2>Accepted</h2>

<div class="table">

<table id="customers">
  <tr class="col">
    <th>S.No</th>
    <th>Name</th>
    <th>Event name</th>
    <th>Budget</th>    	
  </tr>
 <tbody>
<?php
    $resu = mysqli_query($conn, "SELECT * FROM responses where Status=1 and Status2=1");
	$count=1;
    while($row = mysqli_fetch_assoc($resu)) {  ?>
        <tr>
		<td align="center"><?php echo $count; ?></td>
        <td align="center"><?php echo $row["firstname"]; ?></td>
        <td align="center"><?php echo $row["lastname"]; ?></td>
        <td align="center"><?php echo $row["subject"]; ?></td>        
        </tr>
<?php $count++ ;} ?>
  </tbody>
</table><br>

</div>
</div>
<div class='pro-form'>
<h2>In-process</h2>

<div class="table">

<table id="customers">
  <tr class="col">
    <th>S.No</th>
    <th>Name</th>
    <th>Event name</th>
    <th>Budget</th>    	
  </tr>
 <tbody>
<?php
    $res = mysqli_query($conn, "SELECT * FROM responses where Status!=2 and Status2!=2");
	$count=1;
    while($row = mysqli_fetch_assoc($res)) {  
        if($row['Status']==0 || $row['Status2']==0){ ?>
		<tr>
		<td align="center"><?php echo $count; ?></td>
        <td align="center"><?php echo $row["firstname"]; ?></td>
        <td align="center"><?php echo $row["lastname"]; ?></td>
        <td align="center"><?php echo $row["subject"]; ?></td>        
        </tr>
	<?php $count++ ;}} ?>
  </tbody>
</table><br>

</div>
</div>
<div class='rej-form'>
<h2>In-process</h2>

<div class="table">

<table id="customers">
  <tr class="col">
    <th>S.No</th>
    <th>Name</th>
    <th>Event name</th>
    <th>Budget</th>    	
  </tr>
 <tbody>
<?php
    $res = mysqli_query($conn, "SELECT * FROM responses where Status=2 or Status2=2");
	$count=1;
    while($row = mysqli_fetch_assoc($res)) {   ?>
		<tr>
		<td align="center"><?php echo $count; ?></td>
        <td align="center"><?php echo $row["firstname"]; ?></td>
        <td align="center"><?php echo $row["lastname"]; ?></td>
        <td align="center"><?php echo $row["subject"]; ?></td>        
        </tr>
	<?php $count++ ;} ?>
  </tbody>
</table><br>

</div>
</div>

</body>
</html>
