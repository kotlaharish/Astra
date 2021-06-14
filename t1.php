<?php 
session_start();

    $conn= mysqli_connect("localhost", "root", "", "enroll");
    
    $sel_query="Select * from budget";
    $result = mysqli_query($conn,$sel_query);
	
?>
<html>
<head>
<style>
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
</style>
</head>
<body>
<h2>MEMBERS OF THE CLUB</h2>

<div class="table">

<table id="customers">
  <tr class="col">
    <th>S.No</th>
    <th>Event</th>
    <th>File</th>
  </tr>
 <tbody>
<?php
	$count=1;
    while($row = mysqli_fetch_assoc($result)) {  ?>
        <tr>
		<td align="center"><?php echo $count; ?></td>
        <td align="center"><?php echo $row["Eventname"]; ?></td>
		<td align="center">
    <form action='t2.php?id="<?php echo $row['ID']; ?>"' method="post">
        <input type="submit" name="submit" value="open">
    </form>
</td>
        </tr>
<?php $count++ ;} ?>
  </tbody>
</table><br>

</div>
</body>
</html>