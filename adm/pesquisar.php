<?php
include "funcoesdb.php";

require_once "funcoesdb.php";
  
if(isset($_GET['login'])){
    readByLogin($_GET['login']);
    header("Location:index.php?page=usuario&page2=pesquisar");
}
?> 

<br><br><br><br>
<form action="listuser.php" method="GET">
<input type="hidden" name="page" value="usuario">
<input type="hidden" name="page2 "value="pesquisar">

<input type="text" name="login" placeholder="Usuário">
<input type="submit" value= "Procurar">
</form>




<button onclick ="location.href='listusers.php'">Exibir todos os Usuarios</button>


