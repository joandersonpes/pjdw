<?php
include "funcoesdb.php";

require_once "funcoesdb.php";
  
if(isset($_GET['login'])){
	$var = $_GET['login'];
	echo shell_exec("sudo /usr/sbin/useradd $var");	

         create($_GET['login'], $_GET['senha']); 	
         header("Location:index.php?page=usuario&page2=conf"); //redirecionando a pagina pra essa do parentese
         echo "Cadastrado com Sucesso";
}
?> 


<br><br><br><br>
<form action="<?php echo $_SERVER['PHP_SELF']?>"method="get" >
		<input type="hidden" name="page" value="usuario">
		<input type="hidden" name="page2" value="adicionar">
		Nome:<input type="text" name="login" id="login"><br>
		Senha:<input type="password" name="senha" id="senha"><br><br>
		<input type="submit" value="ADICIONAR">



</form>
