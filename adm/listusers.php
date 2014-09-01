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
</style>
					<h1 align="center">USUÁRIOS</h1>
<?php
		    $pdo = new PDO('mysql:host=localhost;dbname=site', 'root', '123');
		    $login = $pdo->query("SELECT `idlogin`,`login` FROM login");
		?>
				
				<table border="1" id="tablelogin" align="center">
					<tr>
						<td id="idlogin">ID</td>
						<td id="login">LOGIN</td>
					</tr>	
			    <?php foreach ($login as $host) {?>
				     <tr>
				            	<?php foreach ($host as $columns => $value) {?>
			            <?php if ( $columns < 0 && $columns == "idlogin" || $columns == "login"): ?>
			            	<td><?php echo $value?></td>

			            <?php endif          ?>
			                  
				       <?php }?>
				      
			        </tr>
			    <?php }?>
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
