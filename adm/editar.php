<?php
require_once "funcoesdb.php";
 
 

 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $loginpassado = $_GET['login'];
}
   $stmt = $pdo->prepare("SELECT `idlogin` FROM login WHERE `idlogin` = ?");
        $stmt->bindValue(1, $id);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);     


if(isset($_GET['loginedit'])){
    update($_GET['idlogin'], $_GET['loginedit'], $_GET['senha']);
    header("Location:index.php?page=usuario&page2=conf");
}
?>
<html>
<head>
    <title>EDITAR</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" id="edit">
        <input type="hidden" name="idlogin" value="<?php echo $usuario['idlogin']?>" >
        <input type="text" placeholder="Login" name="loginedit" value="<?php echo $loginpassado?>" id="cf"><br>
        <input type="password" placeholder="Senha" name="senha" id="cf">
        <input type="submit" name="enviar" value="Alterar" id="cf" >
    </form>


    <div align="center">
            <form action="index.php" align="center">
                
                <input type="hidden" name="page" value="usuario">
                <input type="hidden" name="page2" value="pesquisar">
                <input type="submit" value="VOLTAR" align="center" id="but">    
            </form>
</div>


    <style>

    #but{
        padding: 10px;
        background-color: #708090;
    }
    #but:hover{
        background-color:   #6495ED;
    }
    #edit{
        padding: 250px;
        font-size: 20px;
    }

    #cf{
        padding: 10px;

    }

</style>
</body>
</html>