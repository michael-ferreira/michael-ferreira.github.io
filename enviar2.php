<?php  
	$destino="michael_132@hotmail.com";
	$fromEmail = $_POST["fromEmail"];
	$fromName = $_POST["fromName"];
	$fromMessage = $_POST["fromMessage"];
	$contenido = "fromEmail: " . $fromEmail . "\nfromName: " . $fromName . "\nfromMessage: " . $fromMessage;
	mail($destino,"Contacto", $contenido);
	header("Location:http://michael-ferreira.github.io/indexcontacto.html");
?>