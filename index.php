<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>Poseidon</title>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</head>
<body>
    
<header class="container-fluid ">
	<div class="row ">
		<div class="col ">
			<nav class="navbar navbar-expand-lg navbar-light bg-primary ">
			  <a class="navbar-brand text-white" href="#">Poseidon</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  
			</nav>
		</div>
	</div>
</header>

<div>
	<?php 
	include "api.html";
	 ?>
</div>

<!--form -->
<div class="container-fluid my-5 ">
	<div class="row justift-content-center align-items-center">
		<div class="col-12 text-center">
			<h1>
				Contribua com a localização de resíduos
			</h1>
			<h3>
				Consulte os mapas para prever algumas características...
			</h3>
			

		</div>
	</div>
</div>

<div class="container-fluid my-5"> 
	<div class="row justift-content-center align-items-center">
		
		<div class="col-12 text-center">
			<h1>
				Relate um foco de resíduo	
			</h1>
			<a href="cadastra.php"><img src="add.png"></a>
		</div>
	
	</div>
</div>
<!-- form -->




<footer>
	<iframe src="https://earth.nullschool.net" width="100%" height="500" scrolling="yes">
</footer>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4pW679wj8XongBAJOk1YsnFwCtamwix0&callback=myMap"></script>
</body>
</html>