<?php
    require "config/config.php";
	$isDeleted = false;
	if (!isset($_GET["id"]) || empty($_GET["id"]) || !isset($_GET["resource-title"]) || empty($_GET["resource-title"])) {
		$error = "Invalid resource.";
	}
	else {
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		if ($mysqli->connect_errno) {
			echo $mysqli->connect_error;
			exit();
		}
		$statement = $mysqli->prepare("DELETE FROM resources WHERE id = ?");
		$statement->bind_param("i", $_GET["id"]);
		$executed = $statement->execute();
		if (!$executed) {
			echo $mysqli->error;
			exit();
		}
		if ($statement->affected_rows == 1) {
			$isDeleted = true;
		}
		$statement->close();
		$mysqli->close();
	}
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
            <?php if (isset($error) && !empty($error)) : ?>
				<div class="text-danger">
					<?php echo $error; ?>
				</div>
			<?php endif; ?>
            <?php if ($isDeleted) :?>
				<h1 class="col-12">"<?php echo $_GET["resource-title"] ?>" was successfully deleted.</h1>
			<?php endif; ?>
		</div>
        <div>
            <a href="info.php" role="button" class="button btn btn-light btn-lg">Return to our Education page</a>
        </div>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/stella.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>