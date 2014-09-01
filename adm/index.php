<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aplicação de Redes</title>
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/ping.css">
<link rel="stylesheet" type="text/css" href="css/ipconfig.css">
<link rel="stylesheet" type="text/css" href="css/usuario.css">
<style>
	body{
	background-image: url('img/back.png');
	background-position: center;


}


</style>
</head>
<body onload="exibeHora()">
<div id="back1">



<div id="titulo">
  <p id="tito">NETWORKING TOOLS</p>
  
</div> <!--fechamento da DIV TITULO-->

 <?
			   $page = "index";

			   if(isset($_GET['page'])){
			   		$page = $_GET['page'];
			   }
			   
			   ?>
<a id="bt" href="<?php echo $_SERVER['PHP_SELF']?>?page=index" > <div  id="menubt">Inicio</div></a>
<a id="bt" href="<?php echo $_SERVER['PHP_SELF']?>?page=ping" > <div id="menubt">Ping</div></a>
<a id="bt" href="<?php echo $_SERVER['PHP_SELF']?>?page=ipinfo" > <div id="menubt">Info -IP</div></a>
<a id="bt" href="<?php echo $_SERVER['PHP_SELF']?>?page=rede" > <div id="menubt">Rede</div></a>
<a id="bt" href="<?php echo $_SERVER['PHP_SELF']?>?page=usuario&page2=administrar" > <div id="menubt">Usuario</div></a>
<a id="bt" href="<?php echo $_SERVER['PHP_SELF']?>?page=passwd" > <div id="menubt">Passwd</div></a>
<div id="menubth" onmousemove="exibeData()" ></div>
<hr>

<div id="aplicacao" style="background-color=black;">
		
			<?php if(@$_GET['page'] == "index")
			 	include "inicio.php";
			 	else if(@$_GET['page'] == "ping")
			 		include "ping.php";
			 	else if(@$_GET['page'] == "ipinfo")
			 		include "ipinfo.html";
			 	else if(@$_GET['page'] == "rede")
			 		include "rede.php";
			 	else if(@$_GET['page'] == "usuario")
			 		include "usuario.php";
			 	else if(@$_GET['page'] == "passwd")
					include "passwd.php";
				else{
					include "inicio.php";
				}
			?>
</div>

</div> <!-- Fechamendo da DIV BACK1 -->

<div id="roda"> -Copyright - 2014 - <a href="mailto:joandersonpes11@gmail.com?Subject=Suporte%20Site">Administrador</a> -</div>
</body>
</html>

<script>
		
		function exibeHora(){
			var data = new Date();
			document.getElementById("menubth").innerHTML = data.getHours()+":"+data.getMinutes()+":"+data.getSeconds();
			setTimeout("exibeHora()", 1000);
		}

		function exibeData(){
			var data = new Date();
			document.getElementById("menubth").innerHTML = data.getDate()+"/"+(data.getMonth()+1)+"/"+data.getFullYear();
		}
	</script>
