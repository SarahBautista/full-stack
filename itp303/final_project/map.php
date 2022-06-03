<?php
    header("Access-Control-Allow-Origin: *");
	require "config/config.php";
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if ($mysqli->connect_errno) {
		echo $mysqli->connect_error;
		exit();
	}
	$sql = "SELECT constellations.name AS constellation, zodiac_signs.name AS zodiac, zodiac_signs.latin_meaning AS latin, elements.name AS element, constellations.abbr AS abbr
	FROM zodiac_signs
	LEFT JOIN constellations
		ON zodiac_signs.constellations_id = constellations.id
	LEFT JOIN elements
		ON zodiac_signs.elements_id = elements.id
	WHERE 1=1";
	if (isset($_POST["zodiac-sign"]) && !empty($_POST["zodiac-sign"])) {
		$sql = $sql . " AND zodiac_signs.id = " . $_POST["zodiac-sign"] . ";";
	}
	$results = $mysqli->query($sql);
	if (!$results) {
		echo $mysqli->error;
		exit();
	}
    $sql_location = "SELECT city, country, latitude, longitude FROM locations WHERE id = " . $_POST["map-location"] . ";";
	$results_location = $mysqli->query($sql_location);
	if (!$results_location) {
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
    <link rel="stylesheet" type="text/css" href="css/map.css">
</head>
<body>
    <canvas id="cnv"></canvas>
    <?php include "nav.php"; ?>
    <div class="container">
        <div class="row" style="visibility: hidden">
			<h1 class="col-12" id="welcome">Welcome to your star chart.</h1>
		</div>
        <div class="row" id="map-row">
            <h1 class="col-12" id="loading">Generating star chart...</h1>
        </div>
        <div class="row" style="visibility: hidden">
            <?php $row = $results->fetch_assoc(); ?>
            <?php $row_location = $results_location->fetch_assoc(); ?>
            <h6 class="col-6">Your constellation shown above is:</h6>
            <h4 class="col-6" id="constellation" data-abbr="<?php echo $row["abbr"] ?>" data-lat="<?php echo $row_location["latitude"] ?>" data-lon="<?php echo $row_location["longitude"] ?>"><?php echo $row["constellation"] ?> (<?php echo ucfirst($row["abbr"]); ?>)</h4>
            <h6 class="col-6">Your zodiac sun sign is:</h6>
            <h4 class="col-6"><?php echo $row["zodiac"] ?> the <?php echo $row["latin"] ?></h4>
            <h6 class="col-6">Your sign's element is:</h6>
            <h4 class="col-6"><?php echo $row["element"] ?></h4>
            <h6 class="col-6">Location of this star chart:</h6>
            <h4 class="col-6"><?php echo $row_location["city"] ?>, <?php echo $row_location["country"] ?></h4>
            <h6 class="col-6">Date of this star chart:</h6>
            <h4 class="col-6">May 1, 2022</h4>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/stella.js"></script>
    <script src="js/map.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>