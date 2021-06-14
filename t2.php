<?php
    $id=$_GET['id']; 
	$conn= mysqli_connect("localhost", "root", "", "enroll");
	$sql = "SELECT * from `budget` where ID=$id";
	$resu = mysqli_query($conn, $sql);
	if($resu){
		$res = mysqli_fetch_assoc($resu);
		?>
		<html>
		<head>
		<style>
		</style>
		</head>
		<body>
		<div  style="margin-left:10%">
		<?php if($res['filename']) { ?>
		<h1>File</h1>
		<object data="data:application/pdf;base64,<?php echo base64_encode($res['filename']) ?>" type="application/pdf" style="height:100%;width:90%"></object>

		<?php } ?>
		</div>
		</body>
		</html>
<?php	}

?>