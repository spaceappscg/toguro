<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<?php 

// $crl = curl_init("https://www.ncdc.noaa.gov/cdo-web/api/v2/locations?locationcategoryid=CITY&sortfield=name&sortorder=desc");

// $header = array();
// $header[] = 'Authorization: Value=Token token=ibedmwlsPhPMlZgwYhCjzUrUNEdvJKjs';

// curl_setopt($crl, CURLOPT_HTTPHEADER,$header);
// $rest = curl_exec($crl);

// curl_close($crl);

// print_r($rest);


// $curl = curl_init();
// curl_setopt_array($curl, array(
//     CURLOPT_RETURNTRANSFER => 1,
//     CURLOPT_URL => 'https://www.ncdc.noaa.gov/cdo-web/api/v2/datasets/',
//     CURLOPT_HTTPHEADER => ['token: ibedmwlsPhPMlZgwYhCjzUrUNEdvJKjs'] // Use array here
// ));
// $response = curl_exec($curl);
// curl_close($curl);
// echo $response;

//outro
// function processURL($url)
// {
// $ch = curl_init();
// curl_setopt_array($ch, array(
// CURLOPT_URL => $url,
// CURLOPT_RETURNTRANSFER => true,
// CURLOPT_HTTPHEADER => ['token: ibedmwlsPhPMlZgwYhCjzUrUNEdvJKjs']
// ));

// $result = curl_exec($ch);
// curl_close($ch);
// return $result;
// }

// // $data_de_inicio = "2016-05-03";
// // $data_de_fim = "2016-05-03";

// $url = 'https://www.ncdc.noaa.gov/cdo-web/api/v2/data?datasetid=GHCND&locationid=ZIP:28801&startdate=2010-05-01&enddate=2010-05-01';
// $all_result  = processURL($url);
// $decoded_results = json_decode($all_result, true);
// // var_dump($decoded_results);

 

// echo "<pre>";
// print_r($decoded_results);
// echo "</pre>";

// foreach ($decoded_results as $key => $value) {
// 	echo "<strong>Chave: </strong>".$key."<br>";
// 	if(is_array($value)){
// 		foreach ($value as $key2 => $value2) {
// 			echo "<strong>--- ---Chave: </strong>".$key."<br>";
// 			if(is_array($value2)){
// 				foreach ($value2 as $key3 => $value3) {
// 					echo "<strong>--- --- --- Chave: </strong>".$key3."<strong>Valor: ".$value3."</strong><br>";
// 				}
				
// 			}
// 		}

// 	}
	
// }


// $conteudo = file_get_contents("https://argovis.colorado.edu/ng/home?mapProj=WM&presRange=%5B0,2000%5D&selectionStartDate=2019-10-09&selectionEndDate=2019-10-23&threeDayEndDate=2019-10-21&shapes=%5B%5D&includeRealtime=true&onlyBGC=false&onlyDeep=false&threeDayToggle=true");
// echo $conteudo;
// var_dump($conteudo);
// system("C:\Users\VSPetini\Downloads\API_Argovis_get_global_metadata.py");
 $vetA = array(20,3,9,1,"A","B","João",4,50);
 $vetB = array("Ana", 35,2,9,10,23,0,"BB",7,15);
 $vetC = array();
 // print_r($vetA);
// $verdade = 45;
// echo gettype($verdade);
foreach ($vetA as $key => $value) {
	$tipo = gettype($value);
	echo $tipo."<br>";
	if($tipo == "integer"){
		array_push($vetC, $value);
	}
}
foreach ($vetB as $key => $value) {
	$tipo = gettype($value);
	if($tipo == "integer"){
		array_push($vetC, $value);
	}
}
// print_r($vetC);
// echo "<br>";

for( $i=0 ; $i<sizeof($vetC) - 1; $i++){
	echo $vetC[$i];
	if($vetC[$i] > $vetC[$i+1]){
		$copo = $vetC[$i];
		$vetC[$i] = $vetC[$i+1];
		$vetC[$i+1] = $copo;
		$i = 0;
		echo "<br>";
	}
	
	
}

// $c = array_unique($vetC);

// print_r($c);
 ?>
<!-- 
 <iframe src="https://argovis.colorado.edu/ng/home?mapProj=WM&presRange=%5B0,2000%5D&selectionStartDate=2019-10-09&selectionEndDate=2019-10-23&threeDayEndDate=2019-10-21&shapes=%5B%5D&includeRealtime=true&onlyBGC=false&onlyDeep=false&threeDayToggle=true"></iframe> -->
</body>
</html>