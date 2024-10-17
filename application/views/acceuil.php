<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monographie de Madagascar</title>
    <link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap.min.css'); ?>">
    <style>
        #regionButton:hover {
            background-color: #0056b3;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .content {
            padding: 20px;
            margin-top: 70px;
            /* Ajout d'une marge pour compenser l'absence de la sidebar */
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            background-color: #f8f9fa;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }

        .home {
            width: 100%;
            height: 90vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.2)), url('<?= base_url('/public/assets/images/vue-verticale-enorme-ruelle-baobabs.jpg'); ?>');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .home .content {
            text-align: center;
            padding-top: 200px;
        }

        .home .content h5 {
            color: white;
            font-size: 38px;
            font-weight: 550;
            text-shadow: 0px 1px 1px black;
            margin-top: 60px;
        }

        .home .content h1 {
            color: white;
            font-size: 50px;
            font-weight: 550;
            text-shadow: 0px 1px 1px black;
            margin-top: 5px;
        }

        .book {
            background: #f9f9f9;
            padding: 50px;
        }

        .home .content a {
            padding: 10px;
            background: white;
            color: black;
            letter-spacing: 2px;
            font-weight: 550;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.5s;
        }

        .home .content a:hover {
            background: #ffa500;
            color: white;
        }

        /* Section Packages Start */
        .main-txt h1 {
            text-align: center;
            margin-top: 30px;
            font-weight: 600;
            text-shadow: 0px 1px 1px black;
        }

        .main-txt h1 span {
            color: #ffa500;
        }

        .packages .card {
            border-radius: 5px;
            border: none;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        }

        .packages .card img {
            border-radius: 5px;
        }

        .packages .card .card-body {
            background: transparent;
        }

        .packages .card .card-body h3 {
            font-size: 25px;
            font-weight: 600;
        }

        .packages .card .card-body p {
            font-size: 15px;
        }

        .packages .card .card-body a {
            padding: 10px;
            text-decoration: none;
            background: #ffa500;
            color: white;
            border-radius: 5px;
        }

        /* Section Packages End */

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .content {
                margin-top: 60px;
            }

            .home {
                height: 60vh;
            }

            .home .content h5 {
                font-size: 28px;
            }

            .home .content h1 {
                font-size: 40px;
            }

            .packages .card {
                margin-bottom: 20px;
            }
        }

        @media (max-width: 576px) {
            .content {
                margin-top: 50px;
            }

            .home .content {
                padding-top: 100px;
            }

            .packages .card {
                margin-bottom: 20px;
            }
        }

        @media (max-width:850px) {
            .home {
                background-position: 50%;
            }
        }

        @media (max-width:450px) {
            .home .content h5 {
                font-size: 25px;
            }

            .home .content p {
                font-size: 13px;
            }
        }

        @keyframes changetext {
            20% {
                color: white;
            }

            /* Changer la couleur à 20% */
            40% {
                color: red;
            }

            /* Changer la couleur à 40% */
            50% {
                color: green;
            }

            /* Changer la couleur à 50% */
        }

        .changecontent::after {
            content: 'Madagascar';
            /* Texte statique "Madagascar" */
            text-shadow: 0px 1px 1px black;
            animation: changetext 7s infinite linear;
            /* Applique l'animation des couleurs */
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">
            <span class="mx-2">Ministère de L'intérieur</span>
            <img src="<?= base_url('public/assets/images/file.png'); ?>" alt="Logo" width="70px" height="70px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fa-solid fa-house-chimney"></i> Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-compass"></i> Découverte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-phone-volume"></i> Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Home Section -->
    <div class="home">
        <div class="content">
            <h5>Bienvenue à <span class="changecontent"></span></h5>
            <h1>Découvrez la beauté de notre île.</h1>
        </div>
    </div>

    <!-- Section Packages -->
    <section class="packages" id="packages">
        <div class="container">
            <div class="main-txt">
                <h1><span>M</span>adagascar</h1>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="card">
                        <img src="<?= base_url('public/assets/images/gettyimages-1448595889-612x612.jpg'); ?>"
                            class="img-fluid" alt="">
                        <div class="card-body">
                            <h3 class="card-title">À propos de Madagascar</h3>
                            <p class="card-text">Madagascar est une île unique, riche en biodiversité et en culture.
                                Elle abrite des espèces animales et végétales que l'on ne trouve nulle part ailleurs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="card">

                        <img src="<?= base_url('public/assets/images/route-rangee-arbres-qui-dit-baobab-elle_960894-1417.jpg'); ?>" class="img-fluid" alt="">
                        <div class="card-body">
                            <h3 class="card-title">Nos Régions</h3>
                            <p class="card-text">Découvrez les différentes régions de Madagascar, chacune avec ses
                                paysages, sa culture et ses traditions.</p>
                            <a id="regionButton" href="<?= site_url('location/regions'); ?>"
                                class="btn btn-primary btn-lg rounded-pill shadow-lg"
                                style="width: 100%; font-size: 18px; background-color: #007bff; border-color: #007bff; transition: background-color 0.3s ease, box-shadow 0.3s ease;">
                                Liste des Régions
                            </a>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 py-3">
                    <div class="card">

                        <img src="<?= base_url('public/assets/images/Les-fetes-et-celebrations-traditionnelles-a-Madagascar-Un-voyage-au-coeur-de-la-culture-unique-1280x800.webp'); ?>"
                            class="img-fluid" alt="" style="height: 240px;">
                        <div class="card-body">
                            <h3 class="card-title">Culture Malgache</h3>
                            <p class="card-text">
                                La culture malgache est riche, marquée par des traditions ancestrales comme le
                                famadihana (retournement des morts) et les fady (tabous). La musique avec le valiha et
                                les danses traditionnelles, ainsi que l'artisanat, reflètent cette richesse culturelle
                                transmise de génération en génération.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer mt-5">
        <div class="container">
            <p class="text-muted">© 2024 Monographie de Madagascar. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="<?= base_url('public/assets/js/bootstrap.min.js'); ?>"></script>

</body>

</html>