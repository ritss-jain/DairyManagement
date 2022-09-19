<?php
 include ("connection1.php");
 error_reporting(0);
 
?>

<html>
	<head>
		<title>Member Registration</title>
		<link rel="stylesheet" type="text/css"
		href="css/login.css">
		<link rel="stylesheet" type="text/css"
		href="css/main.css">
		<style type="text/css">
			.form_border
			{
				margin-left: 40%;
				width:400px;
				background-color: rgba(0, 0, 0, 0.5);
				justify-content: center;
				align-items: center;
				text-align: center;
				box-shadow: 5px 5px ;
			}
			.inp
			{
				height: 35px;
				width: 280px;
				border-radius: 35px;
				padding-left: 20px;
				background-color: rgba(0, 0, 0, 0.5);
				color: white;
			}
			.inp:hover
			{
				border: 10px snow;
			}
			.button
			{
				color:black;
				width:130px;
				height:35px;
				border-radius: 35px;
				background-color: rgba(0, 0, 0, 0.5);
				font-size:18px;
			}
		</style>
	</head>

	<body>
		<header id="main-header">
		<div class="container">
			<h1>Book Store MANAGEMENT SYSTEM</h1>
		</div>	
		</header>
		<div class="heading-1">
		<h1>ENTER YOUR DETAILS</h1>
		</div>
		<div class="form_border">
			<form class="my-form" name="myform" method="GET">
				<div>
					<input class="inp" type="text" name="e_name" placeholder="Enter your name">
				</div>
				<br>
				<div>
					<input class="inp" type="text" name="e_mail" placeholder="Enter your mail">
				</div>
				<br>
				<div>
					<input class="inp" type="text" name="e_pass" placeholder="Enter your password">
				</div>
                <br>
				<input class="button" type="submit" name="submit" value="submit">
			</form>
		</div>
		<?php
		
			if($_GET['submit'])
			{
			$b = $_GET['e_name'];
			$c = $_GET['e_mail'];
			$d = $_GET['e_pass'];
			
				if($b!="" && $c!="")
				{
					$sql = "INSERT INTO members VALUES('$b','$c','$d')";
					$data = mysqli_query($conn,$sql);
					
					if($data)
					{
					header('Location:auth1.php');
					}
					else
					{
					echo " not inserted";
					}
				}
				else
				{
					echo "Invalid Name or Email";
				}
			}
			
		
		?>
	</body>	
</html>