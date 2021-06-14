
<?php 
error_reporting(0);
$branch=$_GET['id'];
session_start();
$_SESSION['Branch']=$branch;

?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Web page</title>
  <style>
.hello{
color:black;
font-size:20px;
}
</style>	
</head>
<body>
<div class="page">
<div style="background-color:#2d837b;" class="headerpart">
<div style="margin-top:20px;" class="image">
<center>
<img style="margin-top:20px;" src="Images/h0.jpeg" >
</center>
</div>
</div>
<div style="background-color:#ddd;"class="linkspart">
	<center>
	<a href="http://localhost/p/Student_login.php">
  <input  style="border-radius:10px;" type="submit" id="Student_login" value="Student_login"/> &nbsp
        </a>
	<a href="http://localhost/p/Faculty_Login.php">
  <input style="border-radius:10px;" type="submit" id="Faculty_login" value="Faculty_login"/></a>
       </center>
</div>



<div style="margin-top:5px;"class="row">

<div class="col-md-12">
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li style="margin-left:350px;font-size:20px;"class="nav-item ">
        <a class="nav-link" href="events.php">Events <span class="sr-only">(current)</span></a>
      </li>
      <li style="font-size:20px;" class="nav-item">
        <a class="nav-link" href="workshop.php">Workshops</a>
      </li>
<li  class="nav-item hello text-primary">
        <a class="nav-link" href="acc.php">Our Team</a>
      </li>
      
   
<li style="font-size:20px;" class="nav-item">
        <a class="nav-link" href="Secretary.php">Apply as GS & JS</a>
      </li>
<li style="font-size:20px;" class="nav-item">
        <a class="nav-link" href="Volunteer_enroll_form.php">Apply as a Member</a>
      </li>

    </ul>
	
    
  </div>
</nav>
</div>

</div>




<div style="border-style:NULL" class="bodypart">
<div style="margin-left:60px;" class="imagepart"></div>
<div style="width:450px;" class="newspart">
<h2> News & Events </h2>
<div style="width:400px;"class="news">
	<marquee direction="up" height="100%" >
	<h4>Teens Made Wonders</h4><br>
	<p>Mehant Kammakomati of 2nd CSE in Google Summer of Code 2019 SRE Student developer
a. Selected as one of 1276 student developers all over the world to make
code patches to popular open-source software for a period of three
months and have received a stipend of 3000 USD.</p>
	<hr>
	
	<h4>MEHANT</h4><br>
	<p>Mehant of 2nd CSE Developed a cross-platform (Web and mobile) client application called
UnHybrid; used Unity3D game engine.</p>
	<hr>

<h4>DINESH</h4><br>
	<p>Chidipothu Dinesh of 2nd CSE  has successfully
completed Two months of Software Engineering(Testing
Automation) internship In ATG.World</p>
	<hr>



	</marquee>

</div>

</div>
<div class="matterpart">
<h3> CSE Association </h3>
<p style="font-size:20px;">Computer Science & Engineering is a multidisciplinary branch of engineering which integrates several fields. The Department of Computer Science & Engineering was established right from the inception of the Institute in 2010.The objective of the department is to prepare students to be successful in integrating all the fields of Engineering and Science and to be able to pursue advanced studies in computer engineering and computer science, on a competitive global perspective.
</p>
<p style="font-size:20px;">The Department maintains an excellent teaching/learning and research environment with dedicated, qualified and dynamic pool of members of faculties and well equipped laboratories. The Department of Computer Science and Engineering (CSE) embodies the university’s tradition of excellence in engineering education. Computer Science and Engineering is in a period of exciting growth and opportunity.
</p>


</div>

<div class="footer">
<center>All Rights Reserved.NIT Andhra Pradesh.CSE Dept</center>
<p>Some important links:</p>
<a href="https://nitandhra.ac.in/main/">Our college website</a><br>
<a href="https://nitw.ac.in/main/">Our parental college website</a>

</div>

</div>
</body> 

</html>