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
			<h1 class="col-12">Add your own resource to our Education page!</h1>
		</div>
	</div>
	<div class="container" id="form">
		<form id="add-form" action="add_confirmation.php" method="POST">
        <div class="form-group row">
				<label for="resource-title" class="col-lg-3 col-md-12 col-sm-12 col-form-label text-sm-right">Resource Title:</label>
				<div class="col-lg-9 col-md-12 col-sm-12">
					<input class="form-control" name="resource-title" id="resource-title"></input>
				</div>
			</div>
			<div class="form-group row">
				<label for="resource-info" class="col-lg-3 col-md-12 col-sm-12 col-form-label text-sm-right">Resource Information:</label>
				<div class="col-lg-9 col-md-12 col-sm-12">
					<textarea class="form-control" name="resource-info" id="resource-info"></textarea>
				</div>
			</div>
            <div class="form-group row">
				<label for="link" class="col-lg-3 col-md-12 col-sm-12 col-form-label text-sm-right">Link to Resource:</label>
				<div class="col-lg-9 col-md-12 col-sm-12">
					<input class="form-control" name="link" id="link"></input>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-12" id="buttons">
					<button type="submit" class="btn btn-light" id="submit-btn">Add Resource</button>
					<button type="reset" class="btn btn-light" id="reset-btn">Reset</button>
				</div>
			</div>
		</form>
	</div>
	<div class="container">
        <div class="row error-message" style="display: none"></div>
        <div class="row">
			<h4 class="col-12" style="color: #ffc389">NOTE: Each input allows up to 250 characters. All fields are required.</h4>
		</div>
		<div class="row">
			<h4 class="col-12">Please be sure to add an educational resource about zodiacs, constellations, or both to this page.</h4>
		</div>
		<div class="row">
			<h5 class="col-12">Inappropriate or irrelevant resources will be removed from our site by our admin.</h5>
		</div>
		<div class="row">
			<h6 class="col-12">Thank you!</h6>
		</div>
	</div>
    <script src="js/stella.js"></script>
    <script>
        document.querySelector("#resource-title").oninput = function() {
			document.querySelector("#resource-title").innerHTML = this.value.trim();
			let text = document.querySelector("#resource-title").value.trim();
			if (text.length > 250) {
				document.querySelector("#resource-title").style.color = "red";
				this.classList.add("is-invalid");
			}
			else {
				document.querySelector("#resource-title").style.color = "black";
				if (this.classList.contains("is-invalid")) {
					this.classList.remove("is-invalid");
				}
			}
		}
        document.querySelector("#resource-info").oninput = function() {
			document.querySelector("#resource-info").innerHTML = this.value.trim();
			let text = document.querySelector("#resource-info").value.trim();
			if (text.length > 250) {
				document.querySelector("#resource-info").style.color = "red";
				this.classList.add("is-invalid");
			}
			else {
				document.querySelector("#resource-info").style.color = "black";
				if (this.classList.contains("is-invalid")) {
					this.classList.remove("is-invalid");
				}
			}
		}
        document.querySelector("#link").oninput = function() {
			document.querySelector("#link").innerHTML = this.value.trim();
			let text = document.querySelector("#link").value.trim();
			if (text.length > 250) {
				document.querySelector("#link").style.color = "red";
				this.classList.add("is-invalid");
			}
			else {
				document.querySelector("#link").style.color = "black";
				if (this.classList.contains("is-invalid")) {
					this.classList.remove("is-invalid");
				}
			}
		}
        function validated() {
            let errorMessage = document.querySelector(".error-message");
            let titleText = document.querySelector("#resource-title").value.trim();
            let infoText = document.querySelector("#resource-info").value.trim();
            let linkText = document.querySelector("#link").value.trim();
            if (titleText.length < 1) {
                errorMessage.style.display = "block";
				errorMessage.innerHTML = "Text is required";
				document.querySelector("#resource-title").classList.add("is-invalid");
                return false;
            }
            else if (titleText.length > 250) {
                errorMessage.style.display = "block";
				errorMessage.innerHTML = "Text must be under 250 characters";
                return false;
            }
            else if (infoText.length < 1) {
                errorMessage.style.display = "block";
				errorMessage.innerHTML = "Text is required";
				document.querySelector("#resource-info").classList.add("is-invalid");
                return false;
            }
            else if (infoText.length > 250) {
                errorMessage.style.display = "block";
				errorMessage.innerHTML = "Text must be under 250 characters";
                return false;
            }
            else if (linkText.length < 1) {
                errorMessage.style.display = "block";
				errorMessage.innerHTML = "Text is required";
				document.querySelector("#link").classList.add("is-invalid");
                return false;
            }
            else if (linkText.length > 250) {
                errorMessage.style.display = "block";
				errorMessage.innerHTML = "Text must be under 250 characters";
                return false;
            }
            else {
                if (document.querySelector("#resource-title").classList.contains("is-invalid")) {
					document.querySelector("#resource-title").classList.remove("is-invalid");
				}
                if (document.querySelector("#resource-info").classList.contains("is-invalid")) {
					document.querySelector("#resource-info").classList.remove("is-invalid");
				}
                if (document.querySelector("#link").classList.contains("is-invalid")) {
					document.querySelector("#link").classList.remove("is-invalid");
				}
                return true;
            }
        }
        document.querySelector("#add-form").onsubmit = function(event) {
            return validated();
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>