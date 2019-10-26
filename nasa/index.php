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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   


</head>
<body>
    
<?php include "header.html";?>


<!--form -->
<div class="container-fluid my-5 ">
	<div class="row justify-content-center align-items-center">
		<div class="col-12 text-center">
			<h1>
				Algum ponto de partida ?
			</h1>
			<h3>
				Informe-nos alguma coordenada...
			</h3>
		</div>
	</div>
</div>

<div class="container-fluid my-5">
	<div class="row align-items-center justify-content-center  text-white" style="background-color: black;">
		<div class="col-10 col-md-5">
			<h1>
				Características do Mar de acordo com o local escolhido.
			</h1>
			<h5>
				Verifique as coordenadas de latitude e longitude sucessivamente no globo. Reescreva elas no formulário.
			</h5><br><br>
			<form action="index-controller.php" method="post">
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Latitude</label>
			      <input type="text" name="latitude" class="form-control" id="latitude" placeholder="Defina a Latitude">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputAddress">Longitude</label>
			      <input type="text" name="longitude" class="form-control"  placeholder="Defina a Longitude" id="longitude">
			    </div>
			  </div>
			 <br>
			 <div class="row">
			 	
			 <div class="col-12 col-md-5 mb-3">
			 	<button type="submit" class="btn btn-primary p-3 w-100" value="pesquisar" name="botao">Pesquisar</button>
			 </div>
			  <div class="col-12 col-md-5">
			  	<button type="submit" class="btn btn-warning p-3 w-100" value="relatar-zona-lixo"  name="botao">Relatar Zona de Lixo</button>
			 </div>
			 </div>
			</form>
		</div>
		<div class="col-10 col-md-5 ">
			<div>
				<iframe src="https://earth.nullschool.net" width="100%" height="500" id="iframe" style="border: none;">
			</div>
			The idea came from the challenge of ocean and seas suggested by NASA. The big problem is how to locate and remove this
		</div>
		
	</div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4pW679wj8XongBAJOk1YsnFwCtamwix0&callback=myMap"></script>
</body>
</html>