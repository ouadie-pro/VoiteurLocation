<?php
    $nom = $_POST['nom'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $address = $_POST['address'];
    $ville = $_POST['ville'];
    $sexe = $_POST['sexe'];
    $botton = $_POST['go'];

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($botton)){
            if(empty($nom)){
                echo "<script>alert('Enter les valeur')</script>";
            }
            if(!preg_match("/^[a-zA-Z-' ']*$/",$nom)){
                echo "<script>alert('enter un letter')</script>";
            }
        }
    }
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name="go">
    </form>
</body>
</html>

?php
    if(isset($_POST['go'])){
        $host = "localhost";
        $dbname = "ouadie";
        $username = "root";
        $password = "ouadie1234";
        try{
            $con = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
            echo "vous étes maintenant connecté a $dbname sur $host";
        }
        catch(PDOException $e){
            die('Erreur :'. $e ->getMessage());
        }
    }
? -->