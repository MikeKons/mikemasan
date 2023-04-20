<!DOCTYPE html>
<html>
<head>
	<title>KO Construction</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		body {
			background-color: #f5f5f5;
		}
		.container {
			margin-top: 100px;
			max-width: 400px;
			background-color: #fff;
			padding: 40px;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		}
		.btn-primary {
			background-color: #3498db;
			border-color: #3498db;
		}
		.btn-primary:hover {
			background-color: #2980b9;
			border-color: #2980b9;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1 class="mb-4">Login</h1>
		<form onsubmit="return enviarDatos()">
			<div class="form-group">
				<label for="inputEmail">Email</label>
				<input type="text" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="usuario">
			</div>
			<div class="form-group">
				<label for="inputPassword">Password</label>
				<input type="password" class="form-control" id="inputPassword" placeholder="type your password">
			</div>
			<div class="form-group form-check">
				<input type="checkbox" class="form-check-input" id="rememberMe">
				<label class="form-check-label" for="rememberMe">Remember me</label>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Sign in</button>
		</form>
	</div>




    <script>
        function enviarDatos() {
        var email = document.getElementById("inputEmail").value;
        var password = document.getElementById("inputPassword").value;
        var rememberMe = document.getElementById("rememberMe").checked;
      
        var datos = "email=" + email + "&password=" + password + "&rememberMe=" + rememberMe;
      
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == "OK") {
              window.location.href = "main.php"; 
            } else {
              alert("Error: " + this.responseText);
            }
          }
        };
        xhttp.open("POST", "php/login.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(datos);
      
        return false; 
      }
      </script>





	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
