<?php  
 $connect = mysqli_connect("localhost", "root", "", "dbms2");  
 $q="select * from events where club='PNP'";
 $r=mysqli_query($connect,$q);
 
 ?>  
 <!DOCTYPE html>  
<html>
<head>
<title>PNP Events</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".signup-form").hide();
$(".login").css("background", "#9e9e9e");

$(".login").click(function(){
  $(".signup-form").hide();
  $(".login-form").show();
  $(".signup").css("background", "#fafafaf4");
  $(".login").css("background", "#9e9e9e");
});

$(".signup").click(function(){
  $(".signup-form").show();
  $(".login-form").hide();
  $(".login").css("background", "#fafafaf2");
  $(".signup").css("background", "#9e9e9e");
});


});
</script>
<style>
body {
  margin: 0;
}

ul.hor {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  
}

.hor li {
  float: left;
}

.hor li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.hor li a:hover, .dropdown:hover .dropbtn {
  background-color: GREEN;
}

.hor li.dropdown {
  display: inline-block;
}

.hor .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.hor .dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  
}

.hor .dropdown-content a:hover {background-color: #f1f1f1;}

.hor .dropdown:hover .dropdown-content {
  display: block;
}
ul.ver  {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #f1f1f1;
  position: fixed;
  height: 80%;
  overflow: auto;
}

.ver li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

.ver li a.active {
  background-color: #4CAF50;
  color: white;
}

.ver li a:hover:not(.active) {
  background-color: green;
  color: white;
}
.signup,
.login{
  width: 50%;
  background: #fff;
  float: left;
  height: 60px;
  line-height: 60px;
  text-align: center;
  cursor: pointer;
  text-transform: uppercase;
  position:relative;
</style>
</head>

      <body> 
			<ul class="hor">
  <li><a href="hom.php">Home</a></li>
  
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Clubs</a>
    <div class="dropdown-content">
      <a href="#" class="active">PNP</a>
      <a href="#">DND</a>
      <a href="#">LND</a>
    </div>
  </li>
  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Association</a>
    <div class="dropdown-content">
      <a href="csea.php">CSEA</a>
      <a href="#">ECEA</a>
      <a href="#">EEEA</a>
    </div>
  </li>
  
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Apply post</a>
    <div class="dropdown-content">
      <a href="post.php">Clubs</a>
      <a href="post2.php">Associations</a>
    </div>
  </li>
  <li><a href="sugg.php">Suggestions</a></li>
</ul>



<ul class="ver">
  <li><a  href="pnp.php">Home</a></li>
  <li><a href="#" class="active">Events</a></li>
  <li><a href="pnpmem.php" >Members</a></li>
  <li><a href="pnpgall.php">Gallery</a></li>
  
</ul>

           <div class="table" style="margin-left:25%;padding:1px 16px;height:600px;">
		       <div class="login">Not Completed</div>
		       <div class="signup">Completed</div>
               
		      <form action="" method="POST" enctype="multipart/form-data">
			  <div class="login-form">
			  <table>
				<?php
					while($row=mysqli_fetch_array($r)){ 
					    $today = date("Y-m-d");						
                        $day = $row['day'];
						$Time = $row['etime'];
                        $today = strtotime($today);						
                        $expiration_date = strtotime($day);                        
                        $f=$expiration_date - $today;
                        						
                      if ($f >0) {
                       ?>                    
					  <tr>
					  <td><strong><?php echo $row['event']; ?></strong></td>
					  <td ><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="image" style="float:left; width:400px; heigth: 400px;">'; ?></td>					  
					  <td><?php echo $row['decription'].' On '. date("d-m-Y", strtotime($row['day'])).' from '.date("g:i a", strtotime($row['stime'])).' to '.date("g:i a", strtotime($row['etime'])); ?></td>
					  
					</tr>
					<?php }  ?>
					<?php if($f == 0){
					      if(time() < strtotime($Time)) { ?>
					<tr>
					  <td><strong><?php echo $row['event']; ?></strong></td>
					  <td style="float:left"><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="image" style="float:left; width:400px; heigth: 400px;">'; ?></td>					  
					   <td><?php echo $row['decription'].' On '. date("d-m-Y", strtotime($row['day'])).' from '.date("g:i a", strtotime($row['stime'])).' to '.date("g:i a", strtotime($row['etime'])); ?></td>
					</tr>
					<?php } } }?>					  
			  </table>
			  </div>
				</form>
			
			<form action="" method="POST" enctype="multipart/form-data">
			  <div class="signup-form">
			  <table>
				<?php
				    $q1="select * from events where club='PNP'";
                    $r1=mysqli_query($connect,$q);
					while($ro=mysqli_fetch_array($r1)){ 
					    $today = date("Y-m-d");
						
                        $day = $ro['day'];
						$Time = $ro['etime'];
                        $today = strtotime($today);
                        $expiration_date = strtotime($day);
						 $f=$expiration_date - $today;
						 
                      if ($f <0) {
						 
                       ?>                    
					  <tr>
					  <td><strong><?php echo $ro['event']; ?></strong></td>
					  <td style="float:left"><?php echo '<img src="data:image;base64,'.base64_encode($ro['image']).'" alt="image" style="float:left; width:400px; heigth: 400px;">'; ?></td>					  
					  <td><?php echo $ro['decription'].' On '. date("d-m-Y", strtotime($ro['day'])).' from '.date("g:i a", strtotime($ro['stime'])).' to '.date("g:i a", strtotime($ro['etime'])); ?></td>
					</tr>
					<?php }  ?>
					<?php if($f ==0 ){
					      if(time() > strtotime($Time)) { ?>
					<tr>
					  <td><strong><?php echo $ro['event']; ?></strong></td>
					  <td style="float:left"><?php echo '<img src="data:image;base64,'.base64_encode($ro['image']).'" alt="image" style="float:left; width:400px; heigth: 400px;">'; ?></td>					  
					   <td><?php echo $ro['decription'].' On '. date("d-m-Y", strtotime($ro['day'])).' from '.date("g:i a", strtotime($ro['stime'])).' to '.date("g:i a", strtotime($ro['etime'])); ?></td>
					</tr>
					<?php } } }?>					  
			  </table>
			  </div>
				</form>
				</div>
                
      </body>  
 </html>