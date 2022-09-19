<?php
 include ("connection.php");
 error_reporting(0);
 $to = 'maryjane@email.com';
$subject = 'Marriage Proposal';
$message = 'Hi Jane, will you marry me?'; 
$from = 'peterparker@email.com';
 
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>

<html>
	<head>
		<title>employee registration</title>
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
            .error 
            {
                color: #FF0000;
            }
		</style>
	</head>

	<body>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                if (empty($_GET["e_name"])) {
                $nameErr = "Name is required";
                } else {
                $b = test_input($_GET["e_name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z-' ]*$/",$b)) {
                    $nameErr = "Only letters and white space allowed";
                }
                }
                
                if (empty($_GET["e_email"])) {
                $emailErr = "Email is required";
                } else {
                $c = test_input($_GET["e_email"]);
                // check if e-mail address is well-formed
                if (!filter_var($c, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
                }
                if($e_id!="" && $c!="")
                {
					$e_id = $_GET['e_id'];
					$b = $_GET['e_name'];
					$c = $_GET['e_mail'];
					$d = $_GET['e_pass'];
					$e = $_GET['e_role'];
					$f = $_GET['e_address'];
					
                    $sql = "INSERT INTO employee VALUES('$e_id','$b','$c','$d','$e','$f')";
                    $data = mysqli_query($conn,$sql);
                    
                    if($data)
                    {
                    header('Location:auth.php');
                    }
                    else
                    {
                    echo "not inserted";
                    }
                }
            }
            function test_input($data) 
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>
		<header id="main-header">
		<div class="container">
			<h1>DAIRY RECORD MANAGEMENT SYSTEM</h1>
		</div>	
		</header>
		<div class="heading-1">
		<h1>ENTER YOUR DETAILS</h1>
		</div>
		<div class="form_border">
			<form class="my-form" name="myform" method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<div>
					<input class="inp" type="text" name="e_id" placeholder="Enter Employee ID">
				</div>
				<br>
				<div>
					<input class="inp" type="text" name="e_name" placeholder="Enter your name">
                    <span class="error">* <?php echo $nameErr;?></span>
				</div>
				<br>
				<div>
					<input class="inp" type="text" name="e_mail" placeholder="Enter your mail">
                    <span class="error">* <?php echo $emailErr;?></span>
				</div>
				<br>
				<div>
					<input class="inp" type="text" name="e_pass" placeholder="Enter your password">
				</div>
				<br>
				<div>
					<input class="inp" type="text" name="e_role" placeholder="Enter your role">				
				</div>
				<br>
				<div>
					<input class="inp" type="text" name="e_address" placeholder="Enter your address">
				</div>
				<br>
				<input class="button" type="submit" name="submit" value="submit">
			</form>
		</div>
		<?php

			if($_GET['submit'])
			{
			$e_id = $_GET['e_id'];
			$b = $_GET['e_name'];
			$c = $_GET['e_mail'];
			$d = $_GET['e_pass'];
			$e = $_GET['e_role'];
			$f = $_GET['e_address'];			
                if($e_id!="" && $c!="")
                {
                    $sql = "INSERT INTO employee VALUES('$e_id','$b','$c','$d','$e','$f')";
                    $data = mysqli_query($conn,$sql);
                    
                    if($data)
                    {
                    header('Location:auth.php');
                    }
                    else
                    {
                    echo "not inserted";
                    }
                }
            }
		?>
	</body>
</html>