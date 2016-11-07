<!DOCTYPE html>
<html>
<head>
	<title>Menu | Restaurant</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/master-styles.css">
	<link rel="stylesheet" type="text/css" href="css/menu-styles.css">
	<script type="text/javascript" src="js/loader.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body onload="hideloader();">
	<?php include("php/loader.php");?>
	<div id="content">
		<?php include("php/header.php"); ?>
	<h2 class="title">Menu</h2>
	<section id="menu-section">
		<div class="container">
			<div class="row">
				<div id="item-container" class="card-panel">
					<div class="row">
						<div class="col l3 m3 s6"> 
							<div class="card item">
								<img class="image-size" src="img/items/1.jpg">
								<div class="text-padding">
									<h6><b>Name:</b> Unknow</h6>
									<h6><b>Price:</b> Unknow</h6>
								</div>
							</div>
						</div>
						<div class="col l3 m3 s6"> 
							<div class="card item">
								<img class="image-size" src="img/items/2.jpg">
								<div class="text-padding">
									<h6><b>Name:</b> Unknow</h6>
									<h6><b>Price:</b> Unknow</h6>
								</div>
							</div>
						</div>
						<div class="col l3 m3 s6"> 
							<div class="card item">
								<img class="image-size" src="img/items/3.jpg">
								<div class="text-padding">
									<h6><b>Name:</b> Unknow</h6>
									<h6><b>Price:</b> Unknow</h6>
								</div>
							</div>
						</div>
						<div class="col l3 m3 s6"> 
							<div class="card item">
								<img class="image-size" src="img/items/4.jpg">
								<div class="text-padding">
									<h6><b>Name:</b> Unknow</h6>
									<h6><b>Price:</b> Unknow</h6>
								</div>
							</div>
						</div>
						<div class="col l3 m3 s6"> 
							<div class="card item">
								<img class="image-size" src="img/items/5.jpg">
								<div class="text-padding">
									<h6><b>Name:</b> Unknow</h6>
									<h6><b>Price:</b> Unknow</h6>
								</div>
							</div>
						</div>
						<div class="col l3 m3 s6"> 
							<div class="card item">
								<img class="image-size" src="img/items/6.jpg">
								<div class="text-padding">
									<h6><b>Name:</b> Unknow</h6>
									<h6><b>Price:</b> Unknow</h6>
								</div>
							</div>
						</div>
						<div class="col l3 m3 s6"> 
							<div class="card item">
								<img class="image-size" src="img/items/7.jpg">
								<div class="text-padding">
									<h6><b>Name:</b> Unknow</h6>
									<h6><b>Price:</b> Unknow</h6>
								</div>
							</div>
						</div>
						<div class="col l3 m3 s6"> 
							<div class="card item">
								<img class="image-size" src="img/items/8.jpg">
								<div class="text-padding">
									<h6><b>Name:</b> Unknow</h6>
									<h6><b>Price:</b> Unknow</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include("php/footer.php"); ?>
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