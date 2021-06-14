<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
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
  float: right;
  margin-right:5px;

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

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2>Submitted Form</h2>
<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","enroll");
$result = mysqli_query($conn, "SELECT * FROM responses where Status=0");
$r=mysqli_fetch_array($result);
$x=$r['ID'];

?>
<div class="container">
  <form action=" "   method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname"  value=<?php echo $r["firstname"]  ?>>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" value=<?php echo $r["lastname"]  ?>>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" style="height:200px" name="subject" ><?php echo $r["subject"]  ?></textarea>
      </div>
    </div>
    <div class="row">
     <input type="submit"  name="submit" value="Accept">
	 <input type="submit"  name="rej" value="Reject">
	 <input type="submit"  name="sub" value="View older responses">
    </div>
  </form>

<?php

$sub=$_POST['subject'];
$t="UPDATE responses SET subject = '$sub' WHERE ID=$x";
mysqli_query($conn, $t);
if (isset($_POST['submit'])){
$q="update responses set Status=1 where ID=$x";
$res = mysqli_query($conn, $q);
header('Location: form2.php');
}
if (isset($_POST['rej'])){
$q="update responses set Status=2 where ID=$x ";
$res = mysqli_query($conn, $q);
header('Location: form2.php');
}
if (isset($_POST['sub'])){ ?>
	<center><h1 style="font-size:30px;
color:red;
font-weight:bold;">OLDER RESPONSES</h1>
</center>
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
    $res = mysqli_query($conn, "SELECT * FROM responses where Status=1");
	$count=1;
    while($row = mysqli_fetch_assoc($res)) {   ?>
		<tr>
		<td align="center"><?php echo $count; ?></td>
        <td align="center"><?php echo $row["firstname"]; ?></td>
        <td align="center"><?php echo $row["lastname"]; ?></td>
        <td align="center"><?php echo $row["subject"]; ?></td>        
        </tr>
<?php $count++ ;} }?>
  </tbody>
</table><br>

</div>


</div>

</body>
</html>