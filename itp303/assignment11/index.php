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
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <canvas id="cnv"></canvas>
    <?php include "nav.php"; ?>
    <div id="index" class="container">
        <div class="row" id="index-header">
            <h1>Your personalized star chart!</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 index-subheader">
                <img src="images/index-constellation-1.jpg" alt="">
                <h4>Customized constellation map</h4>
                <h6 id="small-text">
                    Input your birth information
                    and we'll design a map with 
                    your own zodiac constellations
                </h6>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 index-subheader">
                <img src="images/index-constellation-2.jpg" alt="">
                <h4>More than just a horoscope</h4>
                <h6 id="small-text">
                    STELLA doesn't just give you
                    horoscopes -- it gives real-world
                    applicability to your zodiac
                </h6>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 index-subheader">
                <img src="images/index-constellation-3.jpg" alt="">
                <h4>Quick and simple, just for you</h4>
                <h6 id="small-text">
                    We use fast, state-of-the-art
                    technology to bring you your own
                    constellation map in seconds
                </h6>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 index-subheader">
                <img src="images/index-constellation-4.jpg" alt="">
                <h4>Discover more about yourself</h4>
                <h6 id="small-text">
                    Our Education page teaches
                    STELLA users more about the bond
                    between constellations and zodiacs
                </h6>
            </div>
        </div>
        <div class="row">
            <a href="input.php" role="button" class="btn btn-light btn-lg">Create your own conSTELLAtion</a>
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>