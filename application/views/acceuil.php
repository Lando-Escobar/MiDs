<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monographie de Madagascar</title>
    <link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap.min.css'); ?>">
    <style>
        /* Style pour la sidebar */
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #343a40;
            padding-top: 20px;
        }
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }
        .sidebar a:hover {
            background-color: #007bff;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }
        .navbar {
            position: fixed;
            top: 0;
            left: 250px;
            right: 0;
            z-index: 1030;
            background-color: #f8f9fa; /* Fond clair pour la navbar */
        }

        /* Ajoute un espacement pour le contenu en dessous de la navbar */
        .content {
            margin-top: 50px; /* Espacement sous la navbar */
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }

        .carousel-inner img {
            width: 100%;
            height: 500px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#">Accueil</a>
        <a href="<?= site_url('location/regions'); ?>">Les Régions de Madagascar</a>
        <a href="#">Culture</a>
        <a href="#">Gastronomie</a>
        <a href="#">Contact</a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ms-auto">
        <a class="navbar-brand">Ministère de L'intérieur
        <img src="<?= base_url('public/assets/images/unnamed.jpg'); ?>" alt="Logo" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Découverte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="content">
        <!-- Slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('public/assets/images/REG023.jpg'); ?>" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Bienvenue à Madagascar</h5>
                <p>Découvrez la beauté de notre île.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://via.placeholder.com/1200x500/4caf50/ffffff?text=Explorez+nos+Régions" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption d-none d-md-block">
                <h5>Explorez nos Régions</h5>
                <p>Chaque région a son histoire et sa culture unique.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://via.placeholder.com/1200x500/2196f3/ffffff?text=Gastronomie+Malgache" class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption d-none d-md-block">
                <h5>La Gastronomie Malgache</h5>
                <p>Goûtez aux saveurs de Madagascar.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Précédent</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
    </button>
</div>
        <!-- Sections supplémentaires -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <h3>À propos de Madagascar</h3>
                    <p>Madagascar est une île unique, riche en biodiversité et en culture. Elle abrite des espèces animales et végétales que l'on ne trouve nulle part ailleurs.</p>
                </div>
                <div class="col-md-4">
                    <h3>Nos Régions</h3>
                    <p>Découvrez les différentes régions de Madagascar, chacune avec ses paysages, sa culture et ses traditions.</p>
                </div>
                <div class="col-md-4">
                    <h3>Gastronomie Malgache</h3>
                    <p>La gastronomie malgache est variée, incluant des plats à base de riz, de fruits de mer et d'épices. Ne manquez pas de goûter au ravitoto et au romazava.</p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer mt-5">
            <div class="container">
                <p class="text-muted">© 2024 Monographie de Madagascar. Tous droits réservés.</p>
            </div>
        </footer>
    </div>

    <!-- Lien vers Bootstrap JS local -->
    <script src="<?= base_url('public/assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('public/assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
