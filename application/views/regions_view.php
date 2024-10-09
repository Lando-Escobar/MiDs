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
nav{
    background-color: #55666E;
}

    </style>
    
    <nav class="navbar navbar-expand-lg ">
    <div class="container">
    <a class="navbar-brand" href="#">
        <img src="public/assets/images/" alt="">
    <input  class="form-control me-2" type="search"  id="search-input" placeholder="Nom du region" aria-label="Search">
    <button class="btn btn-outline-success" id="search-btn" type="submit">Search</button>
    <a href="<?= site_url('location/regions'); ?>" class="btn btn-outline-success">Voir les listes complets</a>
    </a>
    </nav>
     
    <div class="container mt-5">
    <div class="container-fluid p-4  text-white text-center height: 100px;">
  <h1 class="animated-text">LISTE DES REGIONS</h1>
  <p class="animated-text">Cliquer sur voir les districts si vous voulez</p> 
</div>

        <div class="row" id="region-list">
            <?php foreach ($regions as $region): ?>
                <div class="col-md-4 mb-4 region-item" data-name="<?= strtolower($region['Nom_region']); ?>">
                    <div class="card">
                        <img src="<?= base_url('public/assets/images/'.$region['cdregion'].'.jpg'); ?>" class="card-img-top zoom-in"  alt="<?= $region['Nom_region']; ?>" style="height: 200px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $region['Nom_region']; ?></h5>
                            <a href="<?= site_url('location/districts/'.$region['cdregion']); ?>" class="btn btn-primary bg-dark zoom-in" style="width: 100%;">Voir les districts</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="<?= base_url('public/assets/js/bootstrap.min.js'); ?>"></script>
    <script>
    
   
document.getElementById('search-btn').addEventListener('click', function(event) {
    event.preventDefault(); 
    
    const searchInput = document.getElementById('search-input').value.toLowerCase();
    const regionItems = document.querySelectorAll('.region-item');

    let hasResults = false; 

    regionItems.forEach(function(item) {
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


