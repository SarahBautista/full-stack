<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spicy%20Rice">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair%20Display">
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
				<label for="birth-date" class="col-lg-3 col-md-12 col-sm-12 col-form-label text-sm-right">Your Birth Date:</label>
				<div class="col-lg-9 col-md-12 col-sm-12">
					<input type="date" class="form-control" name="birth-date">
				</div>
			</div>
			<div class="form-group row">
				<label for="birth-location" class="col-lg-3 col-md-12 col-sm-12 col-form-label text-sm-right">Birth Location:</label>
				<div class="col-lg-9 col-md-12 col-sm-12">
					<input class="form-control" name="birth-location"></input>
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
		<div class="row">
			<h4 class="col-12">We'll use your birth information to generate a personalized map of your zodiac constellations.</h4>
		</div>
		<div class="row">
			<h5 class="col-12">Once you submit, you'll be taken to a new page with your map at the center.</h5>
		</div>
		<div class="row">
			<h6 class="col-12">Fast and easy, just for you.</h6>
		</div>
	</div>
    <script src="index.js"></script>
</body>
</html>