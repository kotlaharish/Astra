<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JRS</title>
<meta name="description" content="SailBoat, FREE Foundation 5 website template.">

<meta name="keywords" content="foundation 5 template, sailboat template, free template">
<link rel="stylesheet" href="foundation.css">
<link rel="stylesheet" href="app.css">
<link rel="stylesheet" href="font.css">
<style>


.dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color .6s ease
}

.active,
.dot:hover {
    background-color: #717171
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 80%;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color: #48dbfb;
  border-radius : 10px 100px /120px;

}



.title {
  color: grey;
  font-size: 18px;
}
.box{
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	width: 300px;
    padding:5px;
	height:200px;
	margin:50px 10px ;
	background-size: 100% 100%;
	border-radius : 10% ;

	padding:10px
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}
.hd{
  font-weight:700;
}
	</style>

</head>
<body>
<?php 
    include 'session.php';     


?>
	<div class="container ">
		<div class="text-center mx-5 row"> 
		<h1 class=" hd">Association Management System </h1>
		  </div>   
		</div>


<nav class="top-bar foundation-bar" data-topbar>
	<ul class="title-area">
		<li class="name">
			<span data-tooltip class="has-tip" title="Free Foundation 5 website template"><h1><a href="#"></a></h1></span>
		</li>
		<li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
	</ul>
	
	<section class="top-bar-section">


		
	<!-- Right Nav Section -->
	<ul class="left"> 
		<li class="active"><a href="index.html"><i class="fa fa-home fa-lg"></i></a></li>
		
		<li><a href="#">Home</a></li>
		
		<li class="has-dropdown">
			<a href="#">Branches</a>
			<ul class="dropdown">
				
				<li><a href="Bap.php?id=CSE">CSE</a></li>
				<li class="divider"></li>
				<li><a href="Bap.php?id=ECE">ECE</a></li>
				<li class="divider"></li>
				<li><a href="Bap.php?id=EEE">EEE</a></li>
			</ul>
		</li>



	
		<li class="has-dropdown">
			<a href="#">Branches</a>
			<ul class="dropdown">
				
				<li><a href="project.php">Jobs</a></li>
				<li class="divider"></li>
				<li><a href="ece/project.php">Internships</a></li>
				<li class="divider"></li>
				<li><a href="eee/project.php">Workshops</a></li>
			</ul>
		</li>
		<li><a href="Higher_Login.php">HigherUp Login</a></li>
		<li><a href="Resource.php">Resources</a></li>
		

	</ul>
	</section>
</nav>

<h3 style="text-align:center ; padding-top: 5%;">About Web Site</h3>
<div class="card">
 
  
  <div style="padding:5%">
	<p> 	 Online
Recruitment System will responsible to automate all the working process to reduce cost and
save time. Recruiters will able to post their job and its type by which it will displayed to the job
seekers dashboard based on their job type and profile settings. Recruiters will able to search for

employees based on qualification, colleges, get their contact info, view their resumes, profiles
and even much more. Selected job seekers will have to go through recruitment process set by
the recruiters such as basic question round section, written examination using online exam
mode, have private chat between recruiters and job seekers. Job seekers can able to search job
on the basis of various category such as organization wise, using their skills, location wise, job
type etc. </p>
 
	</div></div>

	
		

	

<!-- Featured Section -->
<div class="lighten" style="margin-top: 5%;">
	<div class="row">
		<div class="small-12 columns">
			
		
		<div class="small-12 medium-6 columns">
		 <p class="mx-5"  style=" font-family:serif ;"> <strong>ONGOING-EVENTS<strong><p>
			<div class="box" style="background-image:url(Img/a1.jpg);background-color: rgb(238, 138, 138);">
			
				</div>
				
		   </div>


		   <div class="small-12 medium-6 columns  ">
			<p class="" style=" font-family:serif ;"> <strong>COmpanies visited<strong><p>

			<div class="box" style="background-image:url(images/i3.png);background-color: rgb(238, 138, 138);">
				
			  </div>
		   </div>
		</div>

		
		
	</div>
</div>
<div class="row">
	
</div>
<!-- Blue Section -->


</body>
</html>