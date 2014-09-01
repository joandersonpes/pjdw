
<?php setcookie('mycookie', 'paginaderedes', (time() + (2 * 3600))); //cookie que vai durar 2 horas nome mycookie valor paginaderedes
	//echo $_COOKIE['mycookie'];

	session_start();

	$_SESSION["mysession"] = "Uso de sessão";
	// echo $_SESSION['mysession'];

	
?>

<style>
	p#a{
		text-align: center;
		font-size: 25px;
		font-style: italic;
		font-weight: bold;
	}
	div#if{

		padding: 60px;
	}


</style>
<div align="center" id="if">
<img src="img/perfil2.jpg" alt="Redes" title="Redes">

</div>