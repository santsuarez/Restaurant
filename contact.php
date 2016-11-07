<!DOCTYPE html>
<html>
<head>
	<title>Contact Us | Restaurant</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/master-styles.css">
	<link rel="stylesheet" type="text/css" href="css/contact-styles.css">
	<script type="text/javascript" src="js/loader.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body onload="hideloader();">
	<?php include("php/loader.php");?>
	<div id="content">
		<?php include("php/header.php");  ?>
		<h2 class="title">Contact Us</h2>
		<section id="contact-section">
			<div class="container">
				<div class="row">
					<div class="col l6 m6 s12">
						<p id="contact-text">
							"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
						</p>
					</div>
					<div class="col l6 m6 s12">
						<div class="card-panel">
							<form>
								<div class="input-field col s12">
									<input id="name" name="name" type="text">
									<label for="name">Name:</label>
								</div>
								<div class="input-field col s12">
									<input id="email" name="email" type="text">
									<label for="email">Email:</label>
								</div>
								<div class="input-field col s12">
									<textarea class="materialize-textarea"  name="message" id="message"></textarea>
									<label for="message">Message:</label>
								</div>
								<input type="submit" value="Send" style="width: 100%;" class="btn primary">
							</form>
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