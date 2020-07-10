<?php

function connect_to_database(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "BaseTest01";

}


try {
    $pdo = newPDO ("mysql:host=$servername; dbname=$databasename",$username,$password);
    $pdo-> setAttribute( PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


 echo "Connected successfully";

return$pdo;
    }

catch (PDOexception $e){

echo "connection failed: ". $e->getMessage();
}
 
$sql="INSERT INTO `produit` (`id`, `nom`, `description`, `prix`, `quantité`) VALUES ('8', 'T-shirt noir', 'T-shirt coton de couleur noire', '15.50', '10')";
?>

