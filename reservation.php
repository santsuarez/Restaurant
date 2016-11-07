<!DOCTYPE html>
<html>
<head>
	<title>Reservation | Restaurant</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/master-styles.css">
	<link rel="stylesheet" type="text/css" href="css/reservation-styles.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script type="text/javascript" src="js/loader.js"></script>
</head>
<body onload="hideloader();">
	<?php include("php/loader.php");?>
	<div id="content">
		<?php include("php/header.php");  ?>
			<h2 class="title">Do a Reservation</h2>
			<section id="reservation-section">
				<div class="container">
					<div class="row">
						<div class="container">
							<div class="row">
							<br><br>
								<div style="text-align: center; float: center;" class="card-panel">
									<form>
										<h5>Do a Reservation for you at our restaurant!</h5>
										<div class="input-field col s12 m6 l6">
											<input id="date" name="date" type="date" class="datepicker">
											<label for="date">Date:</label>
										</div>
										<div class="input-field col s12 m6 l6">
											<input id="time" name="time" type="time">
											<label for="time">Time:</label>
										</div>
										<div class="input-field col s12 m6 l6">
											<input id="people-amount" name="people-amount" type="text">
											<label for="people-amount">Amount of Peoples:</label>
										</div>
										<div class="input-field col s12 m6 l6">
											<input id="person" name="person" type="text">
											<label for="person">Person Responsable:</label>
										</div>
										<div class="input-field col s12 m6 l6">
											<input id="person-id" name="person-id" type="text">
											<label for="person-id">Responsable's ID:</label>
										</div>
										<div class="input-field col s12 m6 l6">
											<input id="email" name="email" type="text">
											<label for="email">Email:</label>
										</div>
										<input class="btn primary" style="width: 100%;" type="submit" value="Do the Reservation"><br><br>
									</form>
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