<?php
	 $conn=mysqli_connect("localhost","root","","enroll");
 
	if( isset($_GET['edit']) )
	{
		$id = $_GET['edit'];
		$res= mysqli_query($conn,"SELECT * FROM cseamembership WHERE ID=$id");
		$row= mysqli_fetch_array($res);
	}
 
	if( isset($_POST['update']))
	{
		$newName = $_POST['newName'];		
		$newbranch = $_POST['newbranch'];
		$newroll = $_POST['newroll'];
		$newyear = $_POST['newyear'];
		$newrole = $_POST['newrole'];
		$newemail = $_POST['newemail'];
		$newbatch = $_POST['newbatch'];
		$id  	 = $_POST['id'];
		$sql     = "UPDATE cseamembership SET Name='$newName',Year='$newyear',Branch='$newbranch',Roll_No='$newroll',Role='$newrole',Email='$newemail', Batch='$newbatch' WHERE ID='$id'";
		$res 	 = mysqli_query($connect,$sql) or die("Could not update".mysqli_error());
		header('Location: accordian.php'); 
	}
 
?>
<html>
<head>
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
<form action="" method="POST">
<div class="table">
<table id="customers">
  <tr class="col">
    
    <th>Name</th>
   
    <th>Branch</th>
    <th>Rollno</th>
	 <th>Year</th>
	<th>Role</th>
	<th>Email</th>
	<th>Batch</th>
	<th>update</th>

  </tr>
 <tbody>
 <tr>
		<td align="center"><input type="text" name="newName" value="<?php echo $row[1]; ?>"></td>
		<td align="center"><input type="text" name="newbranch" value="<?php echo $row[2]; ?>"></td>
		<td align="center"><input type="text" name="newroll" value="<?php echo $row[3]; ?>"></td>
		<td align="center"><input type="text" name="newyear" value="<?php echo $row[4]; ?>"></td>
		<td align="center"><input type="text" name="newrole" value="<?php echo $row[5]; ?>"></td>
		<td align="center"><input type="text" name="newemail" value="<?php echo $row[6]; ?>"></td>
		<td align="center"><input type="text" name="newbatch" value="<?php echo $row[8]; ?>"></td>
		<td align="center"><input type="submit" value=" Update" name=" update"/></td>
       

<input type="hidden" name="id" value="<?php echo $row[0]; ?>">

</form>
</body>
</html>