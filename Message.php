<html>
<head>
</head>
<body>
<center>
 <form method="POST">
  	
  	
	<div>
	<input type="text" style="padding:5px;" name="name" placeholder="Name">
	</div><br>
	<div>
	<input type="text" style="padding:5px;" name="subject" placeholder="Subject">
	</div><br><div>
	<input type="text" style="padding:5px;" name="mail" placeholder="Mail">
	</div><br>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="message" 
      	placeholder="Message..."></textarea>
  	</div><br>

  		<button type="submit" 
style="background-color:black;

color:white;

height:auto;
width:auto;
font-size:15px;
font-weight:bold;" name="submit">SEND</button>
  	</div></div>
  </form></center>

</body>
</html>




<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$subject=$_POST['subject'];
$mailFrom=$_POST['mail'];
$message=$_POST['message'];

$mailTo="kotlaharish1@gmail.com";
$headers="From:".$mailFrom;
$txt="You have received an e-mail from".$name.".\n\n".$message;

mail($mailTo,$subject,$txt,$headers);
header("Location:Message.php?mailsend");
}
?>