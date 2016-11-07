<!DOCTYPE html>
<html>
<head>
	<title>Delivery Status | Restaurant</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/master-styles.css">
	<link rel="stylesheet" type="text/css" href="css/delivery-status.css">
	<script type="text/javascript" src="js/loader.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body onload="hideloader();">
	<?php include("php/loader.php");?>
	<div id="content">
		<?php include("php/header.php");  ?>
		<h2 class="title">Check Delivery Status</h2>
		<section id="delivery-status-section">
			<div class="container">
				<div class="row">
					<div class="container">
						<div class="row">
							<div class="container"><br><br>
								<div class="card-panel">
									<form>
										<h5 style="text-align: center;">Insert your Delivery Code</h5>
										<div class="input-field col s12">
											<input id="delivery-code" name="delivery-code" type="text">
											<label for="delivery-code">Delivery Code:</label>
										</div>
										<br><br><br><br><br><br>
										<input type="submit" value="Check Status" class="btn primary" style="width: 100%;"></input>
									</form>
								</div>
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