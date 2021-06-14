<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>



  
 <!-- jqueryUI css -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
 <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap JS -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="file.css">
	<script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
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
.headers {
  padding: 15px;
  text-align: center;
  background: #2d837b;
  color: white;
}

/* Increase the font size of the heading */
.headers h1 {
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
<div class="headers">
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
    
  
"><?php echo $_SESSION['Branch']?>A TEAM</h1>
</div>
<br>
<div class="container" >
<div class="row">
<div class="header col-md-4 offset-md-4">

</div>
</div>
</div>

<div id="panel">
<h2 style="width:90%; margin:auto;"><b><?php echo $_SESSION['Branch']?>A19-20</b></h2>
 <table class="table table-striped sortable" style="width:90%; margin:auto;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Branch</th>
      <th scope="col">Roll_No</th>
      <th scope="col">Year</th>
      <th scope="col">Role</th>
      <th scope="col">Email_ID</th>
      <th scope="col">Batch</th>
	  <th scope="col">Edit</th>
	  
    </tr>
  </thead>
<tbody>
    <?php
$conn=mysqli_connect("localhost","root","","enroll");
$query="SELECT * FROM cseamembership where Batch='4' AND Branch='".$_SESSION['Branch']."' ";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>
<td>".$row['ID']."</td>
<td>".$row['Name']."</td>
<td>".$row['Branch']."</td>
<td>".$row['Roll_No']."</td>
<td>".$row['Year']."</td>
<td>".$row['Role']."</td>
<td>".$row['Email']."</td>
<td>".$row['Batch']."</td>
<td>
    <form action='ed.php?edit=" .$row['ID']."' method='post'>
        <input type='submit' name='submit' value='edit'>
    </form>
		</td>
</tr> ";
}
?>
</tbody>

</table>
<h2 style="width:90%; margin:auto;"><b><?php echo $_SESSION['Branch']?>A18-19</b></h2>
 <table class="table table-striped sortable" style="width:90%; margin:auto;">
  <thead>
    <tr>
       <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Branch</th>
      <th scope="col">Roll_No</th>
      <th scope="col">Year</th>
      <th scope="col">Role</th>
      <th scope="col">Email_ID</th>
      <th scope="col">Batch</th>
	  <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
	    <?php
$conn=mysqli_connect("localhost","root","","enroll");
$query="SELECT * FROM cseamembership where Batch='3' AND Branch='".$_SESSION['Branch']."'";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>
<td>".$row['ID']."</td>
<td>".$row['Name']."</td>
<td>".$row['Branch']."</td>
<td>".$row['Roll_No']."</td>
<td>".$row['Year']."</td>
<td>".$row['Role']."</td>
<td>".$row['Email']."</td>
<td>".$row['Batch']."</td>
<td>
    <form action='ed.php?edit=" .$row['ID']."' method='post'>
        <input type='submit' name='submit' value='edit'>
    </form>
		</td>
</tr> ";
}
?>   

  </tbody>
</table>
<h2 style="width:90%; margin:auto;"><b><?php echo $_SESSION['Branch']?>17-18</b></h2>
 <table class="table table-striped sortable" style="width:90%; margin:auto;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Branch</th>
      <th scope="col">Roll_No</th>
      <th scope="col">Year</th>
      <th scope="col">Role</th>
      <th scope="col">Email_ID</th>
      <th scope="col">Batch</th>
	  <th scope="col">Edit</th>
     
    </tr>
  </thead>
  <tbody>
        <?php
$conn=mysqli_connect("localhost","root","","enroll");
$query="SELECT * FROM cseamembership where Batch='2' AND Branch='".$_SESSION['Branch']."'";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>
<td>".$row['ID']."</td>
<td>".$row['Name']."</td>
<td>".$row['Branch']."</td>
<td>".$row['Roll_No']."</td>
<td>".$row['Year']."</td>
<td>".$row['Role']."</td>
<td>".$row['Email']."</td>
<td>".$row['Batch']."</td>
<td>
    <form action='ed.php?edit=" .$row['ID']."' method='post'>
        <input type='submit' name='submit' value='edit'>
    </form>
		</td>
</tr> ";
}
?>   
    
  </tbody>
</table>

<h2 style="width:90%; margin:auto;"><?php echo $_SESSION['Branch']?>A16-17</h2>
 <table class="table table-striped sortable" style="width:90%; 
 margin:auto;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>


</table>





</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript">
</script>

<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
$("#panel").accordion({
collapsible:true,
animate:1000,
heightStyle:true,
active:0,
icons:{header:"ui-icon-plus",activeHeader:"ui-icon-minus"}

});


</script>


 




</body>
</html>