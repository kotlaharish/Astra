<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
$result = mysqli_query($conn, "SELECT * FROM responses where Status2=0 and Status=1");
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
        <input type="text" id="fname" name="firstname"  placeholder=<?php echo $r["firstname"]  ?>>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder=<?php echo $r["lastname"]  ?>>
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
	 <input type="submit"  name="sub" value="Reject">
    </div>
  </form>

<?php
$sub=$_POST['subject'];
$t="UPDATE responses SET subject = '$sub' WHERE ID=$x";
mysqli_query($conn, $t);
if (isset($_POST['submit'])){
$q="update responses set Status2=1 where ID=$x";
$res = mysqli_query($conn, $q);
}
if (isset($_POST['sub'])){
$q="update responses set Status2=2 where ID=$x";
$res = mysqli_query($conn, $q);
}
?>


</div>

</body>
</html>