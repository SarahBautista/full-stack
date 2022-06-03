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
    <link rel="stylesheet" type="text/css" href="css/map.css">
</head>
<body>
    <canvas id="cnv"></canvas>
    <?php include "nav.php"; ?>
    <div class="container">
        <div class="row">
			<h1 class="col-12">Welcome to your star chart.</h1>
		</div>
        <div class="row" id="map-row">
            <div class="col-12">
                <img src="images/constellation-map.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <h4 class="col-12">Zodiac and constellation information will be displayed here once our API is implemented, as well as a short but less serious horoscope.</h4>
            <h6 class="col-12">Check back soon for updates!</h6>
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>