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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4pW679wj8XongBAJOk1YsnFwCtamwix0&callback=myMap"></script>
 
    <!-- fonte awsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
    
<?php include "header.html";?>



<!--form -->
<div class="container-fluid my-5 ">
	<div class="row justify-content-center align-items-center">
		<div class="col-10 text-center">
			<h1>
				Pontos Relatados
			</h1>
			<h3>
				São as coordenadas que tiveram algum relato sobre existência de lixo, juntamente com o grau de alerta.
			</h3>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row justify-content-center align-items-center">
		<div class="col-10">
			<table class="table" >
			    <thead class="thead-dark">
			        <tr>
			            <th class="text-center" scope="col">País</th>
			            <th class="text-center" scope="col">Cidade</th>
			            <th class="text-center" scope="col">Estado</th>
			            <th class="text-center" scope="col">Latitude</th>
			            <th class="text-center" scope="col">Longitude</th>
			            <th class="text-center" scope="col">Comentário</th>
			            <th class="text-center" scope="col">Condições</th>
			            <th class="text-center" scope="col">Mapa</th>
			        </tr>
			    </thead>
			    <tbody>
			    	<tr>
			    		<td class="text-center">Brasil</td>
			    		<td class="text-center">Campo Grande</td>
			    		<td class="text-center">MS</td>
			    		<td class="text-center">20.4697° S</td>
			    		<td class="text-center">54.6201° W</td>
			    		<td class="text-center">Joguei a rede e só veio lixo. Não venham para essa região.</td>
			    		<td class="text-center">
			    			<!-- <span style="font-size: 2em;">
			    				<i class="fas fa-dizzy"></i>
			    			</span> -->
			    			3
			    		</td>
			    		<td class="text-center">
			    			<span style="font-size: 2em;">
			    				<a href=""><i class="fas fa-map-marker-alt"></i></a>
			    			</span>
			    		</td>
			    	</tr>

			    	<tr>
			    		<td class="text-center">Estados Unidos</td>
			    		<td class="text-center">Miami</td>
			    		<td class="text-center">Flórida</td>
			    		<td class="text-center">25°46′27″ N</td>
			    		<td class="text-center">80°11′37″ O</td>
			    		<td class="text-center">There is a lot of garbage on the beach.</td>
			    		<td class="text-center">
			    			<!-- <span style="font-size: 2em;">
			    				<i class="fas fa-dizzy"></i>
			    			</span> -->
			    			1
			    		</td>
			    		<td class="text-center">
			    			<span style="font-size: 2em;">
			    				<a href=""><i class="fas fa-map-marker-alt"></i></a>
			    			</span>
			    		</td>
			    	</tr>

			    	<tr>
			    		<td class="text-center">Brasil</td>
			    		<td class="text-center">Rio de Janeiro</td>
			    		<td class="text-center">RJ</td>
			    		<td class="text-center">22.9068° S</td>
			    		<td class="text-center">43.1729° W</td>
			    		<td class="text-center">Foi avistado uma ilha de lixo, aproximadamente de 5 metros de largura e 11 metros de altura.</td>
			    		<td class="text-center">
			    			<!-- <span style="font-size: 2em;">
			    				<i class="fas fa-dizzy"></i>
			    			</span> -->
			    			2
			    		</td>
			    		<td class="text-center">
			    			<span style="font-size: 2em;">
			    				<a href=""><i class="fas fa-map-marker-alt"></i></a>
			    			</span>
			    		</td>
			    	</tr>

			    	<tr>
			    		<td class="text-center">Rússia</td>
			    		<td class="text-center">Moscow</td>
			    		<td class="text-center">Western of Country</td>
			    		<td class="text-center">55.7558° N</td>
			    		<td class="text-center">37.6173° E</td>
			    		<td class="text-center">На пляже много мусора.</td>
			    		<td class="text-center">
			    			1
			    			<!-- <span style="font-size: 2em;">
			    				<i class="fas fa-dizzy"></i>
			    			</span> -->
			    		</td>
			    		<td class="text-center">
			    			<span style="font-size: 2em;">
			    				<a href=""><i class="fas fa-map-marker-alt"></i></a>
			    			</span>
			    		</td>
			    	</tr>

			    	
			    </tbody>
			   
			</table>
		</div>
	</div>
</div>


</body>
</html>