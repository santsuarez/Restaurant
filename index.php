<!DOCTYPE html>
<html>
<head>
	<title>Home | Restaurant</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/index-style.css">
	<link rel="stylesheet" type="text/css" href="css/master-styles.css">
	<script type="text/javascript" src="js/loader.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body onload="hideloader()">
	<?php include("php/loader.php");?>
	<div id="content">
		<?php include("php/header.php");  ?>
		<section id="main">
			<div id="main-section">		
				<a id="see-menu-btn" href="menu.php">See Menu</a>
			</div>
		</section>
		<section id="specials" class="sections-background">
			<h2 class="title">Special of the day</h2></br>
			<div class="container">
				<div class="row">
					<div class="col l3 m3 s6">
						<div class="card">
							<img class="image-size" src="img/special/1.jpg">
							<div class="text-padding">
								<h6><b>Name:</b> Unknow</h6>
								<h6><b>Price:</b> Unknow</h6>
							</div>
						</div>
					</div>
					<div class="col l3 m3 s6">
						<div class="card">
							<img class="image-size" src="img/special/2.jpg">
							<div class="text-padding">
								<h6><b>Name:</b> Unknow</h6>
								<h6><b>Price:</b> Unknow</h6>
							</div>
						</div>
					</div>
					<div class="col l3 m3 s6">
						<div class="card">
							<img class="image-size" src="img/special/3.jpg">
							<div class="text-padding">
								<h6><b>Name:</b> Unknow</h6>
								<h6><b>Price:</b> Unknow</h6>
							</div>
						</div>
					</div>
					<div class="col l3 m3 s6">
						<div class="card">
							<img class="image-size" src="img/special/4.jpg">
							<div class="text-padding">
								<h6><b>Name:</b> Unknow</h6>
								<h6><b>Price:</b> Unknow</h6>
							</div>
						</div>
					</div>
				</div>
		</section>
		<section id="about-us" class="sections-background">
			<h2 class="title">About Us</h2>
			<div class="container">
				<div class="row">
					<div class="col s12 m6 l6">
						<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
					</div>
					<div class="col s12 m6 l6">
						<img class="responsive-img" src="img/restaurant-face.jpg">
					</div>
				</div>
			</div>
		</section>
		<section id="our-chefs" class="sections-background">
			<h2 class="title">Our Chefs</h2>
			<div class="container">
				<div class="row">
					<div class="col l3 m3 s6">
						<div class="card">
							<img class="image-size" src="img/chefs/1.jpg">
							<div class="text-padding text-center">
								<h6><b>Name:</b> Unknow</h6>
								<h6><b>Speciality:</b> Unknow</h6>
							</div>
						</div>
					</div>
					<div class="col l3 m3 s6">
						<div class="card">
							<img class="image-size" src="img/chefs/2.jpg">
							<div class="text-padding text-center">
								<h6><b>Name:</b> Unknow</h6>
								<h6><b>Speciality:</b> Unknow</h6>
							</div>
						</div>
					</div>
					<div class="col l3 m3 s6">
						<div class="card">
							<img class="image-size" src="img/chefs/3.jpg">
							<div class="text-padding text-center">
								<h6><b>Name:</b> Unknow</h6>
								<h6><b>Speciality:</b> Unknow</h6>
							</div>
						</div>
					</div>
					<div class="col l3 m3 s6">
						<div class="card">
							<img class="image-size" src="img/chefs/4.jpg">
							<div class="text-padding text-center">
								<h6><b>Name:</b> Unknow</h6>
								<h6><b>Speciality:</b> Unknow</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include("php/footer.php");  ?>
	</div>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script>
        $(document).ready(function(){
            $('select').material_select();
            $('.datepicker').pickadate();
            $('.dropdown-button').dropdown();
            $(".button-collapse").sideNav();
            $('.slider').slider({
                interval: 3000,
                transition:1000,
                full_width: true
            });
            $('.modal-trigger').leanModal();
        });
    </script>
</body>
</html>