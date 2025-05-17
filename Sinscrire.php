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
    <form class="row g-3 m-5 p-4" action="login.php" method="POST">
        <div class="col-md-6">
            <label class="form-label">Nom : </label>
            <input type="text" class="form-control" name="nom" placeholder="Enter un nom !">
        </div>
        <div class="col-md-6">
            <label  class="form-label">Age : </label>
            <input type="number" class="form-control" name="age" placeholder="Enter un age !">
        </div>
        <div class="col-md-12">
            <label  class="form-label">Email : </label>
            <input type="email" class="form-control" name="email" placeholder="Enter un email !">
        </div>
        <div class="col-12">
            <label f class="form-label">Password : </label>
            <input type="password" class="form-control" name="pass" placeholder="Enter un password ! ">
        </div>
        <div class="col-12">
            <label  class="form-label">Address : </label>
            <input type="text" class="form-control" name="address" placeholder="Enter un address">
        </div>
        <div class="col-md-6">
            <label  class="form-label">Ville : </label>
            <input type="text" class="form-control" name="ville" placeholder="Enter un ville !">
        </div>
        <div class="col-md-4">
            <label   class="form-label">Sexe : </label>
            <select name="sexe" class="form-select">
            <option selected></option>
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
            </select>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary" name="go">Sign in</button>
        </div>
    </form>
</body>
</html>