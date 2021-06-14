<html>
<head>
<style>body{
	margin:0;
	color:#6a6f8c;
	background:#c8c8c8;
	font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	height:full;
	margin:auto;
	max-width:525px;
	min-height:670px;
	position:relative;
	background:url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(40,57,101,.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#1161ee;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}
</style>
</head>
<body>
<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div style="height:full;" class="login-wrap" >
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Event Enrollment Form</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div  class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="roll" class="label">Roll No.</label>
					<input id="roll" type="text" class="input" placeholder="Enter your roll number" name="Rollno" required>
				</div>
				<div class="group">
					<label for="Name" class="label">Name</label>
					<input id="Name" type="text" class="input" placeholder="Enter your name in block letters" name="Name" required>
				</div>
				<div class="group">
					<label for="Name" class="label">Branch</label>
					<input id="Name" type="text" class="input" placeholder="Enter your Branch" name="Branch" required>
				</div>
				<div class="group">
					<label for="Name" class="label">Year</label>
					<input id="Name" type="text" class="input" placeholder="Enter just number" name="Year" required>
				</div>
				<div class="group">
					<label for="Name" class="label">Email</label>
					<input id="Name" type="text" class="input" placeholder="Enter Email" name="email" required>
				</div>
				<div class="group">
					<label for="Name" class="label">Interested Event</label>
					<input id="Name" type="text" class="input" placeholder="Enter Event Name" name="Field" required>
				</div>
				<div class="group">
					<label for="Name" class="label">Experiences</label>
					<input id="Name" type="text" class="input" placeholder="Enter your experiences" name="Experience" required>
				</div>
				<div class="group">
					<label for="Name" class="label">Technical Skills</label>
					<input id="Name" type="text" class="input" placeholder="Describe skills" name="Skills" required>
				</div>
				<div class="group">
					<label for="Name" class="label">Why you think you are the best</label>
					<input id="Name" type="text" class="input" placeholder="Tell why you are the best for the JS or GS" name="Best" required>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Apply" name="submit">

				</div>
				
			</div>
			
		</div>
	</div>
</div>
 <?php
$conn=mysqli_connect("localhost","root","","enroll");
if (isset($_GET['submit'])){
$a= $_GET["Rollno"];
$b= $_GET["Name"];
$c= $_GET["Branch"];
$d= $_GET["Year"];
$e= $_GET["email"];
$f= $_GET["Field"];
$g= $_GET["Experience"];
$h= $_GET["Skills"];
$i= $_GET["Best"];
$sql="select * from field where Roll_No='$a'";

$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0){
$sql = "INSERT INTO field(Roll_No,Name,Branch,Year,Email_ID,InterestedField,PastExperiences,TechnicalSkills,WhyBest) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i')";

$result = mysqli_query($conn,$sql);

if($result)
{ echo "";}
else 
{ echo "failed";}
}}
?> 
</form>   
</body>
</html>