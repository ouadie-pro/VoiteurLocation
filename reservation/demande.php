<?php
    if(isset($_POST['go'])){
        $host = "localhost";
        $dbname = "ouadie";
        $username = "root";
        $password = "";
        $port = "3308";
        try{
            $con = new PDO("mysql:host=$host;port=$port;dbname=$dbname",$username,$password);
            $sql = 'insert into reservation (CIN,dateDebut,dateReturn,phone,convocation,information) values(:CIN,:dateDebut,:dateReturn,:phone,:convocation,:information)';
            $statement = $con->prepare($sql);
            $statement -> bindParam(':CIN',$_POST['ID']);
            $statement -> bindParam(':dateDebut',$_POST['dateD']);
            $statement -> bindParam(':dateReturn',$_POST['dateR']);
            $statement -> bindParam(':phone',$_POST['phone']);
            $statement -> bindParam(':convocation',$_POST['conve']);
            $statement -> bindParam(':information',$_POST['texxt']);
            $statement->execute();
        }
        catch (PDOException $e){
            die('Erreur : '.$e->getMessage());
            
        }
    }
    header("Location:voiteurSport1.php");
?>