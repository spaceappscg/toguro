<!DOCTYPE html>
<html>
<head>
	<title>teste</title>
</head>
<body>
<!-- https://api.nasa.gov/DONKI/CME?startDate=2016-05-03&endDate=2017-05-03&api_key=h603mpbcZhG2A9ocrY20Hfn82pqpNRalZCdbfZre -->
<?php
		set_time_limit(0);
        function processURL($url)
          {

            $ch = curl_init();
            curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_CONNECTTIMEOUT => 0,
            CURLOPT_SSL_VERIFYHOST => 2
            ));

            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
          }

          $access_token = "h603mpbcZhG2A9ocrY20Hfn82pqpNRalZCdbfZre";

          $data_de_inicio = "2016-05-03";
          $data_de_fim = "2016-05-03";

          $url = 'https://api.nasa.gov/DONKI/CME?startDate='.$data_de_inicio.'&endDate='.$data_de_fim.'&api_key='.$access_token;

          // echo $url;
          $all_result  = processURL($url);
          // echo $all_result;
          $decoded_results = json_decode($all_result, true);
          // var_dump($decoded_results);
          
          echo "<pre>";
          print_r($decoded_results);
          echo "</pre>";

          // foreach($decoded_results[0] as $item){
        
          //   if(!is_array($item)){
          //   	echo $item."<br>";
          //   }
          //   if(is_array($item)){
          //   	echo "-------".$item[0]."<br>";
          //   }
            
          // }
          foreach ($decoded_results as $key => $value) {
          	foreach ($value as $key2 => $value2) {
          		
          		if(!is_array($value2)){
          			echo "--- chave ".$key2.", valor:".$value2."<br>";
          		}else{
          			foreach ($value2 as $key3 => $value3) {
          				echo "--- --- chave ".$key3."<br>";
          				foreach ($value3 as $key4 => $value4) {
          					echo "--- --- --- chave ".$key4.", valor:".$value4."<br>";
          				}
          			}
          		}
          	}
          }

?>
</body>
</html>