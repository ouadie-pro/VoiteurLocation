<?php
    include('../includes/navbar.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.3.5-dist/css/bootstrap.css">
</head>
<body>
    <div class="container product-container">
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleSlidesOnly" class="col carousel slide mt-3" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img_voiteur/car sport/car sport (1).jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img_voiteur/car sport/car sport (1).jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img_voiteur/car sport/car sport (1).jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 product-info justity-content-between">
                <p class="col mt-3 ">
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Aficher le formulaire
                </a>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Masquer le formulaire
                </button>
            </p>
            <div class="col collapse mt-3" id="collapseExample">
               <form class="card card-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Date de début</span>
                        <input type="date" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                    <input type="date" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">Date de retour</span>
                    </div>

                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">CIN</span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>

                    <div class="input-group mb-3">
                    <input type="tel" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">Telephone</span>
                    </div>

                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Convocation</span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>

                    <div class="input-group mb-3">
                    <span class="input-group-text">Ecrire</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
               </form>
            </div>
            </div>
        </div>
    </div>
    <script src="../bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>