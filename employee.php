<?php
 include ("connection.php");
 error_reporting(0);
?>

<html>
<head>
	<title>EMPLOYEE DETAILS</title>
	<link rel="stylesheet" type="text/css"
		href="css/add1.css">
	<style>
		span
		{
			height : 40px;
			width : 100px;
			font-weight : bold;
			font-size : 40px;
			padding : 20px;
		}
	</style> 
</head>

<body>
    <header id="main-header">
	  <div class="container">
	  <h1>DAIRY RECORD MANAGEMENT SYSTEM</h1>
	  </div>	
	</header>
	<nav id="navbar" style=" padding-left:0px;">
	  <div class="container" id="navbardiv" style = " background-color:#26272b; height:40px;">
		  <span><a href="index.php">Home</a></span>
		  <span><a href="farmer.php">Farmer </a></span>
		  <span><a href="employee.php">Employee</a></span>
		  <span><a href="delivery.php">Delivery</a></span>
		  <span><a href="payment.php">Payment</a></span>
		  <span><a href="setting rate.php">Setting rate</a></span>
	  </div>
	</nav>
	<br>
	<a class="button" href="addemployee.php" style=" background-color : #26272b;">Add employee details</a>
	  <br><br>
	<div class="heading-1">
	  <h1>EMPLOYEE DETAILS</h1>
	  </div>
	  

	
	
	  
	  
	<?php
	$sql = mysqli_query($conn,"select * from employee");
     echo"<table>";
     echo"<tr><th>EMPLOYEE ID</th> <th>NAME</th> <th>EMAIL ID</th> <th>ROLE</th> <th>ADDRESS</th> <th>update</th> <th>delete</th></tr>";
     while($arr=mysqli_fetch_row($sql))
    {
	    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[4]</td> <td>$arr[5]</td> <td><a href=updateemployee.php?e_id=".$arr[0].">update</a></td> <td><a href=delemployee.php?e_id=".$arr[0].">delete</a></td> </tr>";
    }
	
	
	
	
	?>
</body>
</head>	