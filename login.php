<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Here</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<?php
$server="localhost";
	$user="root";
	$password="";
	$db="signup_form";
	$con = mysqli_connect($server,$user,$password,$db);
	if($con){
		?>
		<script>
			alert("Connecttion Established");
		</script>
		<?php
		
	}else{
		?>
		<script>
			alert("Connection Fail");
		</script>
		<?php
	}
	if(isset($_POST['login_submit'])){
		$first_name=$_POST['first_name'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		$email_search="select * from `signup` where email='$email'";
		$query=mysqli_query($con,$email_search);
		$emailCount=mysqli_num_rows($query);
		if($emailCount){
			$emailpass=mysqli_fetch_assoc($query);
			$dbPass=$emailpass['password'];
			$passDecode=password_verify($password, $dbPass);
			if($passDecode){
							?>
								<script>
									alert("Successfully Logged In");
									location.replace("index.php");
								</script>
							<?php
						}
			
			else{
				?>
					<script>
						alert("!!Password is not matching");
					</script>
				<?php
				}
			}else{
				?>
					<script>
						alert("Invalid Email");
					</script>
				<?php
		}
	}
	?>

<div class="container">
			<div class="w-50 m-auto py-5 text-center">
				<h1>Create Account</h1>
				<h3>Get started with our free account</h3>
				<a href="#" class="btn btn-block btn-gmail"><i class="fab fa-google"></i>Login via Gmail</a>
				<a href="#" class="btn btn-block btn-facebook"><i class="fab fa-facebook-f"></i>Login via Facebook</a>
				<h2>OR</h2>
					<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>"method="post">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user-alt"></i></span>
							</div>
							<input type="text" name="first_name" placeholder="Enter Name" class="form-control" required>
						</div>
						<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
								</div>
								<input type="email" name="email" placeholder="Enter Email" class="form-control" required>
						</div>
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user-lock"></i></span>
							</div>
							<input type="text" name="password" placeholder="Enter Password" class="form-control" required>
						</div>
						<button type="submit" name="login_submit" class="btn btn-info text-center">Login here</button>
						<h5>Dont have an Account?<a href="signup.php">Sign Up</a></h5>				
				</form>
	</div>

	</body>
</html>