<h1>Datos recibidos</h1>
<?php


echo "recibidos: <br>";
// var_dump($_POST); ( no muestra el envio de datos por la barra de direcciones) (NO SE PUEDE GUARDAR EN FAVORITOS, NO SE PUEDE IR HACIA ATRAS EN BACK HISTORY, no tiene limite de envio)
// var_dump($_GET); (puedo ver la info que envio, puedo guardar en favoritos, puedo ir hacia atras en back history, puedo guardar en cache, limite de 2048 caracteres)


$user=$_POST["usuario"];
//echo $user . "<br>";
$password=$_POST["clave"];
//echo $password;

if ($user=="admin" && $password=="1234") {
//	echo "Bievenido";
	include_once "bienvenido.html";
	}
	else
//		echo "usted no esta logueado";
 	include_once "nologueado.html";
?>