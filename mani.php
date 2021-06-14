<?php 
error_reporting(0);
?>
<?php
error_reporting(0);
  // Create database connection
  $conn= mysqli_connect("localhost", "root", "", "enroll");
$day2 = strtotime($_POST["dates"]);
$day2 = date('Y-m-d', $day1);
  // Initialize message variable
  $msgx = "";

  // If upload button is clicked ...
  if (isset($_POST['uploadx'])) {
  	// Get image name
  	$imagex = $_FILES['imagex']['name'];
  	
	// Get text
  	$image_textx = mysqli_real_escape_string($conn, $_POST['image_textx']);

	$eventnamex= $_POST['eventx'];
	$branchname= $_POST['branch'];
	$Organisers= $_POST['Organiser'];
	$stime= $_POST['stime'];
	$etime= $_POST['etime'];

  	// image file directory
  	$targetx = "Imgi/".basename($imagex);
	
  	  	$sql = "INSERT INTO fun (Name,Branch,Image,Description,Organisers,Date,stime,etime) VALUES ('$eventname','$branchname','$image','$image_text','$Organisers','$day1','$stime','$etime')";
  	// execute query
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['imagex']['tmp_name'], $targetx)) {
  		$msgx = "Image uploaded successfully";
		
  	}else{
  		$msgx = "Failed to upload image";
  	}
  }
  $resultx = mysqli_query($conn, "SELECT * FROM workfun");
?>


<!DOCTYPE html>
<html>
<head>  
<title><?php echo $club ?> Workshops</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>

.register{
    background: -webkit-linear-gradient(left,#64B5F6, #64B5F6);
    width:80%;
    margin:8%;
	height:60%;
    box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 0%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 0%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 50%;
    margin-bottom: 10%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin:0px;
}


/* Header/logo Title */
.header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 170px;
  z-index: 10;
  background: #2d837b;
  -webkit-box-shadow: 0 7px 8px rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 7px 8px rgba(0, 0, 0, 0.12);
  box-shadow: 0 7px 8px rgba(0, 0, 0, 0.12);
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 100px;
}

.navbars {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
  text-decoration:none;
}

/* Style the navigation bar links */
.navbars a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  
  text-decoration-color:red;
}

/* Change color on hover */
.navbars a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbars a.active {
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

  .register-leftg img {
    flex-direction:column;
  }
  
}
.page__content-container {
  background: -webkit-linear-gradient(right, #E3F2FD, #E3F2FD);
  margin-top:7%;
  width: 100%;
  height:100%;
  padding: 10px;
}

</style>
</head>
<body>



  <div  class="header" >
       <div class="skdjfl">
            <h1 style="
            text-align:center;
            font-size:50px;
            color:white;
			margin-top:30px;
           margin-bottom:60px;
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
                ">Faculty Portal</h1>
      
          </div>
                  <div class="navbars">
                                      <a style="text-decoration:none;"href="fma.php" >Member Applications</a>
                                      <a style="text-decoration:none;" href="wa.php" >Workshop Enrollments</a>
                                      <a style="text-decoration:none;" href="fea.php">Event Enrollments</a>
                                      <a style="text-decoration:none;" href="fae.php">Add Events</a>
                                      <a style="text-decoration:none;" href="#" class="active">Add Workshops</a>
                                      <a style="text-decoration:none;" href="form2.php" >Messages</a>
                </div>
                <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    </div>
         <div class="page__content-container"  >
               <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>WELCOME</h3>
                        <p>Upload Workshop Images and Details</p>
                    
                    </div>
                    <div class="col-md-9 register-right">
                       
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Add a Workshop</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="eventx" class="form-control" placeholder="Workshop name*" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="branchx" class="form-control" placeholder="Branch *" value="" />
                                        </div>
                                      
                                        <div class="form-group" style="">
                                        <label for="appt">Choose a start-time
                                       <input id="appt-time" type="time" name="stime" value="">
                                       </label>
                                        </div>
                                        <div class="form-group" style="">
                                        <label for="appt">Choose an end-time
                                       <input id="appt-time" type="time" name="etime" value="">
                                       </label>
                                        </div>
                                           <div class="form-group">
                                           <input type="file" name="imagex">

                                        </div>
                                       
                                    </div>




                                    <div class="col-md-6">

                                    <div class="form-group">
                                        <input type="email" class="form-control" name="Organiser" placeholder="Organizer name *" value="" />
 
                                        </div>

                                    <div class="form-group">
                                        <input type="date" class="form-control" name="dates" placeholder="Date"><br>
                                        </div>
                                        <div class="form-group">
                                            
                                        </div>
                                       
                                         
                                        
                                       
                                        <div class="form-group">
                                        
                                <textarea 
                                  id="text" 
                                  cols="40" 
                                  rows="4" 
                                  name="image_textx" 
                                  placeholder="Say something about this image..."></textarea>
                                           </div>
                                           
                                         

                                        <input type="submit" name="uploadx" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div>
                                
                                        
                              
                            </div>
                        </div>
                    </div>
                </div>

       </div> 
</div>

  
</body>
</html>