<?php
include_once 'db.php'
?>

<?php
// Turn off error reporting
error_reporting(0);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RAILWAY ENQUIRY</title>
	<script src="https://kit.fontawesome.com/287f6e49ec.js" crossorigin="anonymous"></script>
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="s1.css">
</head>
<body >
<div class="container-fluid">
	<div class="col-12" ><div class="head1"><div style="opacity: 1;">RAILWAY ENQUIRY</div></div></div>


  
   	<div class="col-12" style="font-size: 200%; text-align: center; margin-top: 1%;"><a href="#" style="background: #ffeedd; text-decoration: none;">TRAIN ENQUIRY</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="teq.php" style=" text-decoration: none;">PNR ENQUIRY</a></div>
   	

 


<div class="col-12">
	<div class="inpuen">
		<h2 style="text-align: center;">TRAIN ENQUIRY</h2>

	<form action="#" method="post" style="padding: 1%;">
&nbsp;&nbsp;TO: <input type="text" name="as" >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FROM: <input type="text" name="ds">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" style="font-weight: bold;">
</form>
</div>
	</div>

	<div class="col-12"><div class="title" style="font-size: 150%; font-weight:bold;margin-top: 1%;">Train no.  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Train name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   source name   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  destination name   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Platform  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Departure Time  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Arrival Time</div></div>
	
	<div style="font-size: 200%;">
	<?php
	 // Check if form was submitted
     $as="";
     $ds="";
	$as=$_POST['as'];
	$ds=$_POST['ds'];
	


	
     $sql ="SELECT * FROM train where source_name='$as'and destination_name='$ds';";
     $result = mysqli_query($conn, $sql);
     $resultCheck = mysqli_num_rows($result);

     if($resultCheck >0 )
     {
     	while($row= mysqli_fetch_assoc($result)){
     		echo "&nbsp;&nbsp;&nbsp;&nbsp;".$row['train_no'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['train_name'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['source_name'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['destination_name'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['arriving_platform'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['departure_time'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['arrival_time']."<br>";
     		

     	}
     }


?></div>

</div>
	
</body>
</html>