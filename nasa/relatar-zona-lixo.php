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
 <?php include "header.html"; ?>
<div class="container-fluid my-5">
	<div class="row justify-content-center text-center align-items-center">
		<div class="col-10 y-5">
			<h1>
				Defina as coordenadas:
			</h1>
			<h3>
				Campos para imagem
			</h3>
		</div>
		<div class="col-10 ">
			<form>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Latitude</label>
			      <input type="text" class="form-control" id="latitude" placeholder="Defina a Latitude">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputAddress">Longitude</label>
			      <input type="text" class="form-control"  id="longitude" placeholder="Defina a Longitude" >
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputAddress">Comentário:</label>
			    <input type="text" class="form-control" placeholder="Deixe um comentários para os pescadores sobre a localidade apontade.">
			  </div>
			 
			  <button type="submit" class="btn btn-primary">Enviar</button>
			</form>
		</div>


		<script type="text/javascript">
			var options = {
			  enableHighAccuracy: true,
			  timeout: 5000,
			  maximumAge: 0
			};

			function success(pos) {
			  var crd = pos.coords;

			  console.log('Your current position is:');
			  console.log(`Latitude : ${crd.latitude}`);
			  console.log(`Longitude: ${crd.longitude}`);
			  console.log(`More or less ${crd.accuracy} meters.`);
			  // alert(crd.longitude);
			  document.getElementById("latitude").value = crd.latitude;
			  document.getElementById("longitude").value = crd.longitude;
			}

			function error(err) {
			  console.warn(`ERROR(${err.code}): ${err.message}`);
			}

			navigator.geolocation.getCurrentPosition(success, error, options);

		</script>

</body>
</html>