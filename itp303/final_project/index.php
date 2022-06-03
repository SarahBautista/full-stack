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
                    Input your information
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/stella.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>