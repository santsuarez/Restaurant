<!DOCTYPE html>
<html>
<head>
	<title>Request Delivery | Restaurant</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/master-styles.css">
	<link rel="stylesheet" type="text/css" href="css/delivery-styles.css">
	<script type="text/javascript" src="js/loader.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body onload="hideloader();">
	<?php include("php/loader.php");?>
	<div id="content">
		<?php include("php/header.php");?>
		<h2 class="title">Request a Delivery Service</h2>
		<section id="delivery-section">
			<div class="container">
				<div class="row">
					<div id="content-container" class="card-panel">
						<div class="col l8 m8 s12">
							<div id="items-container" class="card">
								<table class="striped responsive-table">
									<thead>
										<th>Image</th>
										<th>Name</th>
										<th>Price</th>
										<th></th>
									</thead>
									<tbody>
										<tr>
											<td><img class="responsive-img" src="img/items/1.jpg"></td>
											<td>Item 1</td>
											<td>$US 9.99</td>
											<td><a href="">Add To Cart</a></td>
										</tr>
										<tr>
											<td><img class="responsive-img" src="img/items/2.jpg"></td>
											<td>Item 1</td>
											<td>$US 9.99</td>
											<td><a href="">Add To Cart</a></td>
										</tr>
										<tr>
											<td><img class="responsive-img" src="img/items/3.jpg"></td>
											<td>Item 1</td>
											<td>$US 9.99</td>
											<td><a href="">Add To Cart</a></td>
										</tr>
										<tr>
											<td><img class="responsive-img" src="img/items/4.jpg"></td>
											<td>Item 1</td>
											<td>$US 9.99</td>
											<td><a href="">Add To Cart</a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col l4 m4 s12">
							<div id="info-container" class="card-panel">
								<form>
									<div class="input-field col s12">
										<input type="text" name="responsable" id="responsable">
										<label for="responsable">Responsable</label>
									</div>
									<div class="input-field col s12">
										<input type="text" name="location" id="location">
										<label for="location">Location:</label>
									</div>
									<h4 class="sub-title">Total: $US 0.00</h4>
									<p>Lista de pedido aqui</p>
									<input style="width: 100%;" type="submit" value="Order" class="btn primary">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include("php/footer.php");?>
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