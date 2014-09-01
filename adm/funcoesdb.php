<?php



try{
  $pdo = new PDO('mysql:host=localhost;dbname=site', 'root', '123');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch (PDOException $e){
    echo 'Connection failed:'. $e->getMessage();
  }


  

function remove($id){
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM `login` WHERE `idlogin`= ?");
    $stmt->bindValue(1, $id);
    $stmt->execute();
}
  
function create($login, $senha){
   

    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO `login` VALUES (null, ?, ?)");
    $stmt->bindParam(1, $login);
    $stmt->bindParam(2, $senha);
    $stmt->execute();


}
  
function update($id, $login, $senha){
    global $pdo;
    $stmt = $pdo->prepare("UPDATE `login` SET `login`= ?, `senha`= ? WHERE `idlogin`= ?");
    $stmt->bindParam(1, $login);
    $stmt->bindParam(2, $senha);
    $stmt->bindParam(3, $id);
    $stmt->execute();
}



