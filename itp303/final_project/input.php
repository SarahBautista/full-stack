<?php
	require "config/config.php";
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if ($mysqli->connect_errno) {
		echo $mysqli->connect_error;
		exit();
	}
	$sql = "SELECT * FROM zodiac_signs;";
	$results = $mysqli->query($sql);
	if (!$results) {
		echo $mysqli->error;
		exit();
	}
	$sql_locations = "SELECT * FROM locations;";
	$results_locations = $mysqli->query($sql_locations);
	if (!$results_locations) {
		echo $mysqli->error;
		exit();
	}
	$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@900&family=Spicy+Rice&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STELLA</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="css/stella.css">
    <link rel="stylesheet" type="text/css" href="css/input.css">
</head>
<body>
    <canvas id="cnv"></canvas>
    <?php include "nav.php"; ?>
    <div class="container">
		<div class="row">
			<h1 class="col-12">Input your birth information to create your own conSTELLAtion!</h1>
		</div>
	</div>
	<div class="container" id="form">
		<form action="map.php" method="POST">
			<div class="form-group row">
				<label for="zodiac-sign" class="col-lg-3 col-md-12 col-sm-12 col-form-label text-sm-right">Your Zodiac Sign:</label>
				<div class="col-lg-9 col-md-12 col-sm-12">
					<select class="form-control" name="zodiac-sign" id="zodiac-sign">
						<!-- <option value="" selected>Select a zodiac sign:</option> -->
						<?php while ($row = $results->fetch_assoc()) : ?>
							<option value="<?php echo $row["id"] ?>">
								<?php echo $row["name"]; ?>
							</option>
						<?php endwhile; ?>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="map-location" class="col-lg-3 col-md-12 col-sm-12 col-form-label text-sm-right">Location:</label>
				<div class="col-lg-9 col-md-12 col-sm-12">
					<select class="form-control" name="map-location" id="map-location">
						<!-- <option value="" selected>Select a location:</option> -->
						<?php while ($row_locations = $results_locations->fetch_assoc()) : ?>
							<option value="<?php echo $row_locations["id"] ?>">
								<?php echo $row_locations["city"]; ?>, <?php echo $row_locations["country"]; ?>
							</option>
						<?php endwhile; ?>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-12" id="buttons">
					<button type="submit" class="btn btn-light" id="submit-btn">Generate your conSTELLAtion</button>
					<button type="reset" class="btn btn-light" id="reset-btn">Reset</button>
				</div>
			</div>
		</form>
	</div>
	<div class="container">
		<div class="row error-message" style="display: none"></div>
		<div class="row">
			<h4 class="col-12" style="color: #ffc389">NOTE: For now, we only have pre-populated cities available to select from. We hope to expand this list in the future! Additionally, all fields are required.</h4>
		</div>
		<div class="row">
			<h4 class="col-12">We'll use your input to generate a personalized map of your zodiac constellations.</h4>
		</div>
		<div class="row">
			<h5 class="col-12">Once you submit, you'll be taken to a new page with your map at the center.</h5>
		</div>
		<div class="row">
			<h6 class="col-12">Fast and easy, just for you.</h6>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/stella.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>