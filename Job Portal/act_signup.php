<?php session_start();?>
<html>
<head>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style>
		.php
		{
			<!-- border:1px solid white;
			text-align:center;-->
		}

	</style>
</head>
<body style="background-color: #262626;" class="text-white">
	<div class="php">
	<?php 
		$fname=$_POST['fname'];
		$lwname=$_POST['last'];
		$pass=$_POST['psw'];
		$retype=$_POST['psw-repeat'];
		$_SESSION['fname']=$_POST['fname'];
		$_SESSION['psw']=$_POST['psw'];
		$_SESSION['contact']=$_POST['contact'];
		$_SESSION['address']=$_POST['address'];
		$_SESSION['email']=$_POST['email'];
		if($fname!=$lwname)
		{
			if($pass==$retype)
			{
				echo "<h1>"."The Details enetered are Succesully captured!"."<h1>";	
				echo "<form>"."<button style='text-align :center;background-color: blue;color: white;padding: 14px 20px;margin-left: 650px ;border: none;cursor: pointer;width: 100%;opacity: 0.9;float: left;width: 10%;' type='submit' formaction='/AsignarProfile.php'>"."Proceed"."</button>"."</form>";						
			}
			else
			{
				echo "Password Mismatch";
			}				
		}
		else
		{
			echo "First and last names shouldnt be the same";
			exit;
		}		
	?>
	</div>
</body>
</html>

