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
</head>
<body>
    
<?php include "header.html";?>

 <div>
 	<?php 
// &rad=900
 		echo '<iframe src="https://image.maps.api.here.com/mia/1.6/mapview?app_id=zFSLlGFsvk0qLsopj631&w=1300&app_code=TCUgEN7m6swKDxr8eCnMDQ&ml=por&c=po
&lat='.$_GET['latitude'].'&lon='.$_GET['longitude'].'" width="1200" height="320" style="width: 100%;" > ';

 		echo "</iframe>";
 	 ?>
 	<!-- <iframe src="https://image.maps.api.here.com/mia/1.6/mapview?app_id=zFSLlGFsvk0qLsopj631&app_code=TCUgEN7m6swKDxr8eCnMDQ&ml=por&c=po
&lat=48.8566&lon=2.3522&w=1200" width="1200" height="500" style="width: 100%;"></iframe> -->
 </div>

<div class="containder-fluid my-5">
	<div class="row justify-content-center align-items-center my-5">
		<div class="col-5">
			<h1>Verifique a Temperatura</h1>
			<h3>O lixo acumula o calor</h3>
			<p>
				Lugares que possuem calor constante, independente das mudanças climáticas pode ser decorrente ao lixo. <strong>Confira no mapa a temperatura do local escolhido.</strong>
			</p>
		</div>

		<div class="col-5">
			<h1>Analise a Clorofila</h1>
			<h3>Pouca clorofila, pouca vida...</h3>
			<p>
				Plantas e alguns seres vivos contém clorofila. Se a região escolhida não possúi um nível significante, pode ser que haja lixo no local. <strong>Confira o nível de clorofila do local escolhido.</strong>
			</p>
		</div>
	</div>
</div>

<div class="containder-fluid my-5 bg-primary text-white">
	<div class="row justify-content-center align-items-center my-5">
		<div class="col-5">
			<h1>Confira o Oxigênio Dissolvido, Pressão & Salinidade</h1>
			<h3>Qualidade da água</h3>
			<p>
				O oxigênio dissolvido é o principal indicador de que existe ou não vida em determinada região do mar. A fluidez do O² garante a sobrevivência de espécies marítimas. Se houver pocuo O², pode haver lixo. <strong>Confira no mapa os elementos do local escolhido.</strong>
			</p>
		</div>

		<div class="col-5">
			<h1>Correntes Marítimas</h1>
			<h3>Siga a Maré...</h3>
			<p>
				Correntes marítimas são deslocamentos de massas de água oceânicas geradas pela inércia de rotação do planeta e pelos ventos. As correntes se movimentam por todos os oceanos do mundo, transportando calor e por isso apresentam influência direta na pesca, vida marinha e no clima. <strong>Confira a direção das correntes e suas características.</strong>
			</p>
		</div>
	</div>
</div>
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://tides.p.rapidapi.com/tides?interval=60&duration=1440&latitude=44.414&longitude=-2.097",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: tides.p.rapidapi.com",
		"x-rapidapi-key: 2b7c609dbdmsh4d1523d87ba38a4p186a54jsne033b2b8255d"
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
?>
</body>
</html>