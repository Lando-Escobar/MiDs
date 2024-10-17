<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap.min.css'); ?>">
    <title>LISTE DES REGIONS</title>
</head>

<body>
    <style>
        body {
            background-image: url('<?= base_url('public/assets/images/carte.jpg'); ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .search-bar {
            background-color: #97CBDC;
            /* Couleur de fond de la barre de recherche */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            /* Ombre légère */
            z-index: 1030;
            /* Assurer que la barre reste au-dessus des autres éléments */
            padding: 10px 15px;
            /* Réduction des espaces internes */
            height: 50px;
            /* Hauteur réduite de la barre */
        }

        .search-bar img {
            height: 20px;
            /* Taille réduite du logo */
        }

        .search-bar .form-control {
            height: 30px;
            /* Réduction de la hauteur du champ de recherche */
        }

        .search-bar .btn {
            padding: 5px 10px;
            /* Diminuer le padding du bouton */
            font-size: 14px;
            /* Réduire la taille du texte du bouton */
        }

        .zoom-in {
            transition: transform 0.5s ease-in-out;
        }

        .zoom-in:hover {
            transform: scale(1.1);
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animated-text {
            animation: fadeIn 1s ease-in-out;
            opacity: 0;
            animation-fill-mode: forwards;
        }

        .animated-text:nth-child(1) {
            animation-delay: 0s;
        }

        .animated-text:nth-child(2) {
            animation-delay: 0.5s;
        }

        .navbar-custom {
            background-color: #0B698B;
            /* Exemple de couleur vert */
        }

        .navbar-custom .btn-outline-success {
            color: white;
            border-color: white;
        }

        .navbar-custom .btn-outline-success:hover {
            background-color: white;
            color: #4CAF50;
        }

        .navbar-custom .form-control {
            background-color: #f1f1f1;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top py-3">
        <div class="container-fluid d-flex align-items-center">
            <!-- Logo avec ajustement de la taille -->
            <a class="navbar-brand">
                <img src="<?= base_url('public/assets/images/logo_gov.png'); ?>" alt="Logo"
                    style="height: 50px; width: 150%;">
            </a>

            <!-- Formulaire de recherche aligné à droite -->
            <form class="d-flex ms-auto" role="search">
                <input class="form-control me-2" type="search" id="search-input" placeholder="Nom de la région"
                    aria-label="Search" style="width: 250px;">
                <button class="btn btn-outline-success me-2" id="search-btn" type="submit">Search</button>
                <a href="<?= site_url('location/regions'); ?>" class="btn btn-outline-success me-2">Voir les listes
                    complètes</a>
            </form>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="container-fluid p-4  text-white text-center height: 100px;">
            <br>
            <h1 class="animated-text">LISTE DES REGIONS</h1>
        </div>

        <div class="row" id="region-list">
            <?php foreach ($regions as $region): ?>
                <div class="col-md-4 mb-4 region-item" data-name="<?= strtolower($region['Nom_region']); ?>">
                    <div class="card">
                        <img src="<?= base_url('public/assets/images/' . $region['cdregion'] . '.jpg'); ?>"
                            class="card-img-top zoom-in" alt="<?= $region['Nom_region']; ?>"
                            style="height: 200px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $region['Nom_region']; ?></h5>
                            <a href="<?= site_url('location/districts/' . $region['cdregion']); ?>"
                                class="btn btn-primary bg-dark zoom-in" style="width: 100%;">A propos du region</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="<?= base_url('public/assets/js/bootstrap.min.js'); ?>"></script>
    <script>
        document.getElementById('search-btn').addEventListener('click', function (event) {
            event.preventDefault();

            const searchInput = document.getElementById('search-input').value.toLowerCase();
            const regionItems = document.querySelectorAll('.region-item');

            let hasResults = false;

            regionItems.forEach(function (item) {
                const regionName = item.getAttribute('data-name');

                if (regionName.includes(searchInput)) {
                    item.style.display = 'block';
                    hasResults = true;
                } else {
                    item.style.display = 'none';
                }
            });


            if (!hasResults) {
                alert('Aucun résultat trouvé pour "' + searchInput + '".');
            }
        });


    </script>
</body>

</html>