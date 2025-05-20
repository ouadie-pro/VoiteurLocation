<?php
    if(isset($_POST['go'])){
        $host = "localhost";
        $dbname = "ouadie";
        $username = "root";
        $password = "";
        $port = "3308";
        try{
            $con = new PDO("mysql:host=$host;port=$port;dbname=$dbname",$username,$password);
            $sql = 'insert into username (nom,age,email,password,address,ville,sexe) values(:nom,:age,:email,:pass,:address,:ville,:sexe)';
            $statement = $con->prepare($sql);
            $statement -> bindParam(':nom',$_POST['nom']);
            $statement -> bindParam(':age',$_POST['age']);
            $statement -> bindParam(':email',$_POST['email']);
            $statement -> bindParam(':pass',$_POST['pass']);
            $statement -> bindParam(':address',$_POST['address']);
            $statement -> bindParam(':ville',$_POST['ville']);
            $statement -> bindParam(':sexe',$_POST['sexe']);
            $statement->execute();
        }
        catch (PDOException $e){
            die('Erreur : '.$e->getMessage());
            
        }
    }
    header("Location: Sinscrire.php");
?>