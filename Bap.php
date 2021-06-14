<?php 
error_reporting(0);
$branch=$_GET['id'];
session_start();
$_SESSION['Branch']=$branch;

$conn=mysqli_connect("localhost","root","","enroll");

$sql="select Image from project where Branch='".$_SESSION['Branch']."' ";

$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

?>



<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}
.btn {
  box-sizing: border-box;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: transparent;
  border: 2px solid #e74c3c;
  border-radius: 0.6em;
  color: #e74c3c;
  cursor: pointer;
  display: -webkit-box;
  display: flex;
  align-self: center;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1;
  margin: 20px;
  padding: 1.2em 2.8em;
  text-decoration: none;
  text-align: center;
  text-transform: uppercase;
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
}
.btn:hover, .btn:focus {
  color: #fff;
  outline: 0;
}

.responsive{
max-width:100%;
height:auto;
display:block;

}

.third {
  border-color: #3498db;
  color: #fff;
  box-shadow: 0 0 40px 40px #3498db inset, 0 0 0 0 #3498db;
  -webkit-transition: all 150ms ease-in-out;
  transition: all 150ms ease-in-out;
}
.third:hover {
  box-shadow: 0 0 10px 0 #3498db inset, 0 0 10px 4px #3498db;
}
marquee {
        width: 100%;
        padding: 10px 0;
        background-color: lightblue;
        border-radius: 10px;
        box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
      }
	  
	  .page
{
   width:full;
   height:auto;
  

}  


.headerpart
{

width:full;
height:230px;
border-style:NULL;
 background-color:white;
}
 
.linkspart
{
width:full;
height:48px;
border-style:NULL;
margin-top:5px;
}

.dropdownpart
{
width:full;
height:50px;

margin-top:5px;
background-color:black;
}

#Student_login
{
background-color:#2ecc71;
padding:5px;
color:white;
text-align:center;
height:45px;
width:200px;
font-size:25px;


}




#Faculty_login
{
background-color:#3498db;
padding:5px;
color:white;
height:45px;
width:200px;
font-size:25px;

}

#Events
{
background-color:black;
padding:5px;
color:white;
text-align:center;
height:45px;
width:auto;
font-size:25px;
font-weight:bold;
margin-top:2.5px;
}


#Workshops
{
background-color:black;
padding:5px;
color:white;
text-align:center;
height:45px;
width:auto;
font-size:25px;
font-weight:bold;
margin-top:2.5px;
}


#Apply
{
background-color:black;
padding:5px;
color:white;
text-align:center;
height:45px;
width:auto;
font-size:25px;
font-weight:bold;
margin-top:2.5px;
}



#Our_team
{
background-color:black;
padding:5px;
color:white;
text-align:center;
height:45px;
width:auto;
font-size:25px;
font-weight:bold;
margin-top:2.5px;
}


#Apply_as_member
{
background-color:black;
padding:5px;
color:white;
text-align:center;
height:45px;
width:auto;
font-size:25px;
font-weight:bold;
margin-top:2.5px;
}


.bodypart
{
width:full;
height:auto;
  border-style:groove;
margin-top:10px;
}


.imagepart
{
width:400px;
height:250px;
 border-style:groove;
background-repeat:no repeat;
display:inline-block;

}

.bodypart .newspart
{
  width:400px;
  height:800px;
border-style:groove;
float:right;
margin-right:50px;
margin-top=50px;
}


.bodypart .newspart h2
{
color:green;
text-align: center;
font-size:50px;
}



.bodypart .newspart .news
{
 width:550px;
  height:500px;
margin-left:25px;
font-size:30px;
}

.bodypart .newspart .news h4
{
color:blue;
}

.bodypart .matterpart 
{
font-size:30px;
margin-left:50px;
margin-right:725px;
}



.bodypart .matterpart h3
{
color:blue;
text-align:center;
}




.footer
{
width:full;
height:200px;
border-style:groove;
margin-top:5px;
background-color:#2c3e50;
font-size:20px;
color:white;
}
	  
</style>
</head>



<body >

    <div class="page">
        <div style="background-color:#2d837b;" class="headerpart">
                 <div class="image">
                 <center>
                 <img style="margin-top:20px;" src="Images/h0.jpeg" >
                 </center>
                 </div>
        </div>
         <div style="background-color:#ddd;height:80px" class="linkspart">
              
              <div class="row" style="display:flex;justify-content:center">
                
               <a style="text-decoration: none;" href="members/Student_login.php">
               <input style="font-size:20px;"class="btn third" type="submit" id="Faculty_login" value="Student_login"/></a>
                

               <a style="text-decoration: none;" href="faculty/Faculty_Login.php">
                <input style="font-size:20px;"class="btn third" type="submit" id="Faculty_login" value="Faculty login"/></a>
               
              </div> 
                
                
     </div>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
		<div class="collapse navbar-collapse" id="navbarText">
		
          <ul class="navbar-nav mr-auto">
		 
            <li class="nav-item active">
              <a class="nav-link" href="events.php">Events <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="workshop.php">Workshops</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="acc.php">Our Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Secretary.php">Apply as GS&JS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Volunteer_enroll_form.php">Apply as a Member</a>
            </li>
			
          </ul>

        </div>
      </nav>


     <main role="main" class="container">
    
    
        <div class="row">
         
            <div class="col-md-4 ">
              <p class="display-4" style="font-size:40px;"></p>
						<img src="Images/eee.jpeg" class="responsive" /><br />
						
            <!--  -->
            
          </div>
		            <div class="col-md-2"></div>

          <div class="col-md-6">
            <div  class="newspart">
            <div class="news">
              <div >
                <p class="display-4" style="font-size:40px;">News&Events</p>
                
               
              
            </div>
			
			 <marquee direction="up"  >
                <div style="margin:15px;">
				
			<?php 
			$sqli="select Newsheader,News from project where Branch='".$_SESSION['Branch']."' AND Image is NULL";

        $results = mysqli_query($conn,$sqli);
		$rows=mysqli_fetch_assoc($results);

			while($rows=mysqli_fetch_assoc($results)){
				?>
			
             
              <h4>Sravan Deadly Mixer<?php echo $rows['Newsheader'] ?></h4><br>
			  
              <p><?php echo $rows['News'] ?></p>
              <hr>
			<?php } ?>
			
			
              

             </div>

              </marquee>

            </div>
          </div>
          </div>
         
      <!-- narrower column with sidebar links -->  
      </div>
     
    </div>
  </main>
</body>
</html>