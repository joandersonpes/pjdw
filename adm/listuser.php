<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Usuarios</title>
</head>
<body>
	
<style>
	#but{
		padding: 10px;
		background-color: #708090;
	}
	#but:hover{
		background-color:  	#6495ED;
	}

body{background-color: #87CEFA;}

 tr,td {
 				background-color: #778899;
                border-collapse: collapse;
                border: 1px solid #000;
                padding: 5px;
                 text-align: center; 
                  width: 40%;
         } 
         table {
         			width:40%;
}
   
</style>
					<h1 align="center">USUÁRIO</h1>
<?php
			$loginpassado = $_GET['login'];

		    $pdo = new PDO('mysql:host=localhost;dbname=site', 'root','123');
		    $login = $pdo->query("SELECT `idlogin`,`login` FROM login");
		?>
				
				<table border="1" id="tablelogin" align="center">
					<tr>
						<td id="idlogin">ID</td>
						<td id="login">LOGIN</td>
						<td id="login">REMOVER</td>
						<td id="login">EDITAR</td>
					
					</tr>	
			  		<?php $stmt = $pdo->prepare("SELECT `idlogin`,`login` FROM login WHERE `login` = ?");
						    $stmt->bindValue(1, $loginpassado);
						    $stmt->execute();
						    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);?>


						    
						   <tr>

						    <?php foreach ($usuario as $value) {?>

						    		
						                    <td><?php echo $value; ?></td>

                             <?php }?>
					            			<td><a href="remover.php?id=<?php echo $usuario['idlogin']?>&login=<?php echo $usuario['login']?>"><img src="img/delete.png" width="30px" height="30px" alt="Editar" title="Deletar"></a></a></td>
		                               		<td><a href="editar.php?id=<?php echo $usuario['idlogin']?>&login=<?php echo $usuario['login']?>"><img src="img/edit.png" width="30px" height="30px" alt="Editar" title="Editar"></a></td>
        

			
				        </tr>
			  
			</table> 
			<br><br><br>
<div align="center">
			<form action="index.php" align="center">
				
				<input type="hidden" name="page" value="usuario">
				<input type="hidden" name="page2" value="pesquisar">
				<input type="submit" value="VOLTAR" align="center" id="but">	
			</form>
</div>

</body>
</html>
