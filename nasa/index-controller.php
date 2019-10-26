<?php 

var_dump($_POST);
$coordenadas = array('latitude' => $_POST['latitude'], 'longitude' => $_POST['longitude']);
if($_POST['botao'] == "pesquisar")
{
	header("Location: http://localhost/nasa/prev-inf.php?latitude=".$_POST['latitude']."&longitude=".$_POST['longitude']);
}
else if($_POST['botao'] == "relatar-zona-lixo")
{
	header("Location: http://localhost/nasa/relatar-zona-lixo.php?latitude=".$_POST['latitude']."&longitude=".$_POST['longitude']);
}
else{
	header("Location: http://localhost/nasa/");
}



 ?>

