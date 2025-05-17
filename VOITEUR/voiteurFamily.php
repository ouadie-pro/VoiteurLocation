<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.5-dist/css/bootstrap.css">
    <link rel="stylesheet" href="icons/all.min.css">
    <link rel="stylesheet" href="../bootstrap-5.3.5-dist/css/bootstrap.css">
    <style>
        .product-card {
            height: 100%;
        }
        .card-img-top {
            height: 180px;
            object-fit: cover;
        }
        .card-body {
            min-height: 200px;
            display: flex;
            flex-direction: column;
        }
        .card-title {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }
        .card-text {
            font-size: 1rem;
        }
        .btn {
            padding: 0.5rem 1rem;
            height: 40px;
        }
        .mt-auto {
            margin-top: auto;
        }
    </style>
</head>
<body>
    <?php
        include('../includes/navbar.php');
    ?>
    <div class="container-fluid mt-4">
        <div class="row">

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card product-card h-100">
                    <img src="../img_voiteur/car family/car family (1).jpg" class="card-img-top img-fluid">
                    <div class="card-body d-flex flex-column">
                        <h1 class="card-title" style="text-transform: capitalize;">nissan maxima</h1>
                        <p style="text-transform: capitalize;">family-car</p>
                        <div style="border-top: 1px solid gray;"></div>
                        <div style="display: flex;flex-direction: row;justify-content: space-between;margin-top: 80px">
                            <h2>80$</h2>
                            <a href="../reservation/voiteurFamily1.php" class="btn btn-primary"><i class="fa-solid fa-cart-shopping mr-2" style="color: white;"></i>cloick</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card product-card h-100">
                    <img src="../img_voiteur/car family/car family (2).jpg" class="card-img-top img-fluid">
                    <div class="card-body d-flex flex-column">
                        <h1 class="card-title" style="text-transform: capitalize;">audi q7</h1>
                        <p style="text-transform: capitalize;">family-car</p>
                        <div style="border-top: 1px solid gray;"></div>
                        <div style="display: flex;flex-direction: row;justify-content: space-between;margin-top: 40px">
                            <h2>150$</h2>
                            <a href="../reservation/voiteurFamily2.php" class="btn btn-primary"><i class="fa-solid fa-cart-shopping mr-2" style="color: white;"></i>cloick</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card product-card h-100">
                    <img src="../img_voiteur/car family/car family (3).jpg" class="card-img-top img-fluid">
                    <div class="card-body d-flex flex-column">
                        <h1 class="card-title" style="text-transform: capitalize;">volkswagen passat variant</h1>
                        <p style="text-transform: capitalize;">family-car</p>
                        <div style="border-top: 1px solid gray;"></div>
                        <div style="display: flex;flex-direction: row;justify-content: space-between;margin-top: 50px">
                            <h2>90$</h2>
                            <a href="../reservation/voiteurFamily3.php" class="btn btn-primary"><i class="fa-solid fa-cart-shopping mr-2" style="color: white;"></i>cloick</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card product-card h-100">
                    <img src="../img_voiteur/car family/car family (4).jpg" class="card-img-top img-fluid">
                    <div class="card-body d-flex flex-column">
                        <h1 class="card-title" style="text-transform: capitalize;">bmw m5(f10)</h1>
                        <p style="text-transform: capitalize;">family-car</p>
                        <div style="border-top: 1px solid gray;"></div>
                        <div style="display: flex;flex-direction: row;justify-content: space-between;margin-top: 100px">
                            <h2>200$</h2>
                            <a href="../reservation/voiteurFamily4.php" class="btn btn-primary"><i class="fa-solid fa-cart-shopping mr-2" style="color: white;"></i>cloick</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card product-card h-100">
                    <img src="../img_voiteur/car family/car family (5).jpg" class="card-img-top img-fluid">
                    <div class="card-body d-flex flex-column">
                        <h1 class="card-title" style="text-transform: capitalize;">range rover velar</h1>
                        <p style="text-transform: capitalize;">family-car</p>
                        <div style="border-top: 1px solid gray;"></div>
                        <div style="display: flex;flex-direction: row;justify-content: space-between;margin-top: 50px">
                            <h2>220$</h2>
                            <a href="../reservation/voiteurFamily5.php" class="btn btn-primary"><i class="fa-solid fa-cart-shopping mr-2" style="color: white;"></i>cloick</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card product-card h-100">
                    <img src="../img_voiteur/car family/car family (6).jpg" class="card-img-top img-fluid">
                    <div class="card-body d-flex flex-column">
                        <h1 class="card-title" style="text-transform: capitalize;">land rover defender</h1>
                        <p style="text-transform: capitalize;">family-car</p>
                        <div style="border-top: 1px solid gray;"></div>
                        <div style="display: flex;flex-direction: row;justify-content: space-between;margin-top: 20px">
                            <h2>240$</h2>
                            <a href="../reservation/voiteurFamily6.php" class="btn btn-primary"><i class="fa-solid fa-cart-shopping mr-2" style="color: white;"></i>cloick</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card product-card h-100">
                    <img src="../img_voiteur/car family/car family (7).jpg" class="card-img-top img-fluid">
                    <div class="card-body d-flex flex-column">
                        <h1 class="card-title" style="text-transform: capitalize;">porsche macan</h1>
                        <p style="text-transform: capitalize;">family-car</p>
                        <div style="border-top: 1px solid gray;"></div>
                        <div style="display: flex;flex-direction: row;justify-content: space-between;margin-top: 100px">
                            <h2>250$</h2>
                            <a href="../reservation/voiteurFamily7.php" class="btn btn-primary"><i class="fa-solid fa-cart-shopping mr-2" style="color: white;"></i>cloick</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card product-card h-100">
                    <img src="../img_voiteur/car sport/car sport (4).jpg" class="card-img-top img-fluid">
                    <div class="card-body d-flex flex-column">
                        <h1 class="card-title" style="text-transform: capitalize;">bugatti divo</h1>
                        <p style="text-transform: capitalize;">family-car</p>
                        <div style="border-top: 1px solid gray;"></div>
                        <div style="display: flex;flex-direction: row;justify-content: space-between;margin-top: 100px">
                            <h2>1500$</h2>
                            <a href="../reservation/voiteurFamily1.php" class="btn btn-primary"><i class="fa-solid fa-cart-shopping mr-2" style="color: white;"></i>cloick</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>