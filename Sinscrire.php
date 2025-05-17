<?php
    include('includes/navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.5-dist/css/bootstrap.css">
</head>
<body>
    <form class="row g-3 m-5 p-4">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nom : </label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Enter un nom !">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Age : </label>
            <input type="number" class="form-control" id="inputEmail4" placeholder="Enter un age !">
        </div>
        <div class="col-md-12">
            <label for="inputPassword4" class="form-label">Email : </label>
            <input type="email" class="form-control" id="inputPassword4" placeholder="Enter un email !">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Password : </label>
            <input type="password" class="form-control" id="inputAddress" placeholder="Enter un password ! ">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Address : </label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Enter un address">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Ville : </label>
            <input type="text" class="form-control" id="inputCity" placeholder="Enter un ville !">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Sexe : </label>
            <select id="inputState" class="form-select">
            <option selected></option>
            <option>Homme</option>
            <option>Femme</option>
            </select>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
</body>
</html>