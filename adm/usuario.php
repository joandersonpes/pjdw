<div id="menuinterno" align="center" >

		<?php
					   $page2 = "administrar";
		
					   if(isset($_GET['page2'])){
					   		$page2 = $_GET['page2'];
					   }
					   ?>
		<a id="bt" href="<?php echo $_SERVER['PHP_SELF']?>?page=usuario&page2=administrar" > <div id="btusuario">Administrar Usuario</div></a>
		<a id="bt" href="<?php echo $_SERVER['PHP_SELF']?>?page=usuario&page2=adicionar" > <div  id="btusuario">Adicionar Usuários</div></a>
		<a id="bt" href="<?php echo $_SERVER['PHP_SELF']?>?page=usuario&page2=pesquisar" > <div id="btusuario">Administrar Usuários</div></a>
		
		
				<hr>
		
		
					<div id="aplicacao" style="background-color=black;">
								<?php if(@$_GET['page2'] == "adicionar")
					 				include "adicionar.php";	
					 				else if(@$_GET['page2'] == "pesquisar")
					 				include "pesquisar.php";
					 				else if(@$_GET['page2'] == "administrar")
					 				include "adm.php";
					 				else if(@$_GET['page2'] == "conf") {
					 							echo "<br><br><br>";
					 							echo "<h1>OPERACÃO EXECUTADA</h1>";
					 						}
					 					
					 				?>
					</div>

</div>

	


