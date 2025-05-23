<?php
    include('includes/navbar.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre Collection de Voitures</title>
    <link rel="stylesheet" href="bootstrap-5.3.5-dist/css/bootstrap.css">
    <style>
        .product-container {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .card {
            margin-bottom: 20px;
            transition: transform 0.3s;
            height: 100%;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .main-card {
            height: calc(100% + 25px);
        }
        .main-card .img-fluid {
            height: 430px;
            object-fit: cover;
        }
        @media (max-width: 768px) {
            .card {
                min-height: auto;
            }
            .card-img-top {
                height: 150px;
            }
            .main-card .img-fluid {
                height: 250px;
            }
        }
    </style>
</head>
<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card main-card">
                    <img src="img_voiteur/car All/voiteur sportAll.jpg" class="img-fluid" alt="Voiture de sport">
                    <div class="card-body">
                        <h5 class="card-title">Voiture de Sport</h5>
                        <p class="card-text">Une voiture de sport haut de gamme avec un design élégant et des performances exceptionnelles.</p>
                    </div> 
                    <div class="card-footer">
                        <small class="text-muted">Mis à jour il y a 3 minutes</small>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 mb-4 mt-sm-4 mt-md-0">
                        <div class="card">
                            <img src="img_voiteur/car All/voiteur familyAll.jpg" class="card-img-top" alt="Voiture Familiale">
                            <div class="card-body">
                                <h5 class="card-title">Voiture Familiale</h5>
                                <p class="card-text">Une voiture spacieuse et confortable, parfaite pour les familles nombreuses.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Mis à jour il y a 3 minutes</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="card">
                            <img src="img_voiteur/car All/voiteur classiceAll.jpg" class="card-img-top" alt="Voiture Familiale Luxe">
                            <div class="card-body">
                                <h5 class="card-title">Voiture Familiale Luxe</h5>
                                <p class="card-text">Modèle familial premium avec des caractéristiques supplémentaires et un intérieur haut de gamme.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Mis à jour il y a 3 minutes</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>