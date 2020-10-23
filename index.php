<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.14.0/css/all.css">
	<title>New Website creation using PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body onload="slider_1()">
	<div class="sidenav" id="mysidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="index.php" class="active"><i class="fa fa-house-user"></i>Home</a>
				<a href="index.php"><i class="fa fa-users-cog"></i>Services</a>
				<a href="index.php"><i class="fa fa-blog"></i>Blogs</a>
				<a href="index.php"><i class="fa fa-images"></i>Gallery</a>
				<a href="index.php"><i class="fa fa-phone-volume"></i>Contact Us</a>
				<a href="signup.php"><i class="fa fa-user-plus"></i>Signup</a>
	</div>
<div class="header">
	<div class="slider">
		<img src="../Images/1440x2960-HD-Wallpaper-010.jpg" id="slider_img">
	</div>
	<div class="overlay">
		<div class="menu">
			<h1 class="logo">Paathshala</h1>
			<div class="section">
				<a class="login_form" href="login.php">Login</a>
				<div class="menu_lines" onclick="openNav();">&#9776;
				</div>
			</div>
		</div>
		<div class="content">
			<h1>Welcome to Paathshala</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<a href="index.php">Read More</a>
		</div>
	</div>
</div>
<!------------------------Header Ends here------------------------------------------------------------>
<!------------------------About starts here------------------------------------------------------------>

<section class="About">
	<div class="container">
		<h1>About Us</h1>
		<p>Our Experience Teachers</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-10 text-center">
					<div class="profile">
						<img src='../Images/1 (1).png' class="user_profile">
						<blockquote>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.
						</blockquote>
						<h4>Mr.Anoop <span>(Founder)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-10 text-center">
					<div class="profile">
						<img src='../Images/1 (1).png' class="user_profile">
						<blockquote>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.
						</blockquote>
						<h4>Mr. Ankit <span>(Co-founder)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-10 text-center">
					<div class="profile">
						<img src='../Images/1 (1).png' class="user_profile">
						<blockquote>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.
						</blockquote>
						<h4>Mr. Ganesh <span>(Co-founder)</span></h4>
					</div>
				</div>
			</div>
	</div>
</section>
<!------------------------About Ends here------------------------------------------------------------>
<!------------------------Testimonial Starts here------------------------------------------------------------>

<main id="testimonials">
	<div id="testimonial_cover">
		<h1 class="text-center">Our Services</h1>
		<div class="container">
			<div class="row">
				<div class="col-12 ">
					<div id="customer_testimonial" class="text-center owl-carousel owl-theme">
						<div class="testimonial">
							
							<img src='../Images/images (8).jpg' class="img-responsive-circle">
							<h2>For Standard 1-4</h2>
							<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</blockquote>
						</div>
						<div class="testimonial">
							
							<img src='../Images/images (7).jpg' class="img-responsive-circle">
							<h2>For Standard 4-8</h2>
							<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</blockquote>
						</div>
						<div class="testimonial">
							<img src='../Images/images (6).jpg' class="img-responsive-circle">
							<h2>For Standard 9-10</h2>
							<blockquote class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</blockquote>
						</div>
						<div class="testimonial">
								
								<img src='../Images/uk-india-student-1200.jpg' class="img-responsive-circle">
								<h2>For Standard 11</h2>
								<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</blockquote>
						</div>
						<div class="testimonial">
								
								<img src='../Images/images (5).jpg' class="img-responsive-circle">
								<h2>For Standard 12</h2>
								<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</blockquote>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<!------------------------Testimonial Ends here------------------------------------------------------------>

<!------------------------gallery Starts here------------------------------------------------------------>

<!------------------------gallery Ends here------------------------------------------------------------>
<!------------------------Contact Us Starts here------------------------------------------------------------>
<div class="my-5">
	<div class="py-5">
		<h2 class="text-center">Contact Us</h2>
	</div>
	<div class="w-50 m-auto">
		<form action="contact.php" method="post">
			<div class="form-group">
				<label for="username">Username:</label>
				<input type="text" name="username" placeholder="Enter Username" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Email Id:</label>
				<input type="text" name="email" placeholder="Enter email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label for="phone">Phone Number:</label>
				<input type="text" name="phone" placeholder="Enter Phone Number" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label for="address">Address:</label>
				<input type="text" name="address" placeholder="Enter Address" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">		
				<label for="message">Message:</label>
				<textarea type="text" name="message" autocomplete="off" class="form-control">
				</textarea> 
			</div>
				<button type="submit" class="btn btn-success">Submit Here</button> 
			</div>
		</form>
	</div>
</div>
<!------------------------Contact Us Ends here------------------------------------------------------------>
<!------------------------Footer Ends here------------------------------------------------------------>
<footer class="bg-dark text-light px-5">
	<div class="footer text-center py-5">
		<h1>Footer</h1>
	</div>
	<div class="container py-3 text-center">
		<div class="row">
		<div class="col-lg-4 col-sm-4 col-12">
			Images
		</div>
		<div class="col-lg-4 col-sm-4 col-12">
			Images
		</div>
		<div class="col-lg-4 col-sm-4 col-12">
			Images
		</div>
	</div>
	<div class=" text-center">&copy; All Copyrights under Paathshala</div>
	
</footer>
<!------------------------Footer Ends here------------------------------------------------------------>


<!----------------------------------------------------Script Link------------------------------------------------------------>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
<script type="text/javascript">
	
	var Slider_img = document.getElementById("slider_img");
	var images= new Array(
		'../Images/90d369307d0a2cac8dd2cea650f4f797.jpg',
		'../Images/61ba5c7f705c0922395199a978cc62d7.jpg',
		'../Images/wallpapers-hd-7974-8304-hd-wallpapers.jpg',
		'../Images/maxresdefault.jpg',
		'../Images/1440x2960-HD-Wallpaper-010.jpg',
		'../Images/b459101686ac8d0406cea6e814eabee4.jpg'
	)
	var Len=images.length;
	var i=0;
	function slider_1(){
		if(i>Len-1){
			i=0;
		}
		Slider_img.src=images[i];
		i++;
		setTimeout('slider_1()',3000);
	}
	function openNav(){
		document.getElementById("mysidenav").style.width="100%";	
	}
	function closeNav(){
		document.getElementById("mysidenav").style.width="0";
	}
	$(function(){
		$("#customer_testimonial").owlCarousel({
			items:1,
			autoplay:true,
			smartSpeed:100,
			look:true,
			autoPlayerHoverPause:true,
			
		})
	})

</script>
</body>
</html>