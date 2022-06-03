<?php
	require "config/config.php";
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if ($mysqli->connect_errno) {
		echo $mysqli->connect_error;
		exit();
	}
	$sql = "SELECT * FROM resources;";
	$results = $mysqli->query($sql);
	if (!$results) {
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
    <link rel="stylesheet" type="text/css" href="css/info.css">
</head>
<body>
    <canvas id="cnv"></canvas>
    <?php include "nav.php"; ?>
    <div class="container">
        <div class="row">
			<h1 class="col-12">Wanna learn more about how zodiacs and constellations are related?</h1>
		</div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <h6>The constellations in the night sky are connected to myth and legend, as well as the unscientific concepts of astrology.</h6>
                <h6 class="sub">But they also have held importance and usefulness to science and exploration throughout history and still today.</h6>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <h6>In addition to their cultural significance, constellations have also been important instruments that once marked the passage of time and the seasons.</h6>
                <h6 class="sub">Today, constellations continue to be valuable tools to orient astronomers and stargazers in the night sky.</h6>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <h6>One constellation tradition is the western zodiac, which is made up of 12 constellations.</h6>
                <h6 class="sub">Astrologers use 12 of these constellations to roughly correspond with the signs of the zodiac to make predictions.</h6>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <h6>Today, the astrological signs differ from these constellations, bearing only a loose reference to one another.</h6>
                <h6 class="sub">STELLA exists to bridge these two gaps in a fun and educational manner, so browse through our pages to explore your own zodiac-related constellations!</h6>
            </div>
        </div>
        <div class="row">
			<h1 class="col-12" id="resources">Community Resources</h1>
            <?php while ($row = $results->fetch_assoc()) : ?>
                <h5 class="col-12 resource-title"><?php echo $row["resource_title"] ?></h5>
                <div class="resource-info">
                    <p class="col-12"><?php echo $row["resource_info"] ?></p>
                    <div><a href="<?php echo $row["link"] ?>"><?php echo $row["link"] ?></a></div>
                    <div><a href="edit_resource.php?id=<?php echo $row["id"]; ?>" role="button" class="button btn btn-light btn-lg">Edit this resource</a>&emsp;<a href="delete_resource.php?id=<?php echo $row["id"]; ?>&resource-title=<?php echo $row["resource_title"] ?>" role="button" class="btn btn-light btn-lg btn-outline-danger" id="delete-btn">Delete this resource</a></div>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="row">
            <a href="add_resource.php" role="button" class="button btn btn-light btn-lg">Add a resource</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/info.js"></script>
    <script src="js/stella.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>