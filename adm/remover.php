<?php
include "funcoesdb.php";

if(isset($_GET['id'])){
	$id = $_GET['id'];
    $login = $_GET['login'];

}
  
if(isset($_POST['confirma'])){
	$var1 = $_POST['login'];
	echo shell_exec("sudo /usr/sbin/userdel $var1");
    remove($_POST['id']);
 
    header("Location:index.php?page=usuario&page2=conf");
}

?>
<html>
<head>
    <title>Remove</title>
</head>
<body>
	<div align="center"  id="resp">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
	<input type="hidden" name="login" value="<?php echo $login ?>">
        <p>Deseja excluir o usuario <?php echo $_GET['login']?>?</p>
      
     <input  id="cf" type="submit" name="confirma" value="Confirma">
    
    	
    </form>
    	<a  href="index.php?page=usuario&page2=administrar"><button  id="cf" >Cancelar</button></a>
    	</div>
</body>
</html>
<style>
	div#resp{
		padding: 250px;
		font-size: 30px;
	}

	#cf{
		padding: 10px;
	}

</style>
