<?php
    $current_path = $_SERVER['PHP_SELF'];
    $current_page = basename($current_path);
    $inFolder = (strpos($current_path, '/VOITEUR/') !== false || strpos($current_path, '/reservation/') !== false);
?>
<nav class="navbar navbar-expand-lg navbar-primary bg-primary">
    <div class="container-fluid">
        <?php if($inFolder):?>
        <a class="navbar-brand" href="../interface.php">location de voiteur</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../interface.php">Accueil</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../reservation/voiteurSport1.php">Réserver</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Voiture
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="voiteurSport.php">Sport-cars</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="voiteurFamily.php">Family-cars</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="voiteurClassic.php">classic-cars</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../Sinscrire.php">S'inscrire</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../deconnexion.php">Déconnexion</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <?php else:?>
        <a class="navbar-brand" href="interface.php">location de voiteur</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="interface.php">Accueil</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="reservation/voiteurSport1.php">Réserver</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Voiture
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="VOITEUR/voiteurSport.php">Sport-cars</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="VOITEUR/voiteurFamily.php">Family-cars</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="VOITEUR/voiteurClassic.php">classic-cars</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="Sinscrire.php">S'inscrire</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="deconnexion.php">Déconnexion</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <?php endif;?>
    </div>
</nav>
<script src="bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js"></script>