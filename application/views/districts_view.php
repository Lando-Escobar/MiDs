<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap.min.css'); ?>">
    <title>LISTE DISTRICTS</title>
</head>
<body>
    <style>
         body {
            background-color: #f7f7f7;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        h2 {
            color: #4a4a4a;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
        }
        ul.list-group li a {
            color: #495057;
            font-size: 18px;
            font-weight: 500;
        }
        ul.list-group li a:hover {
            text-decoration: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            padding: 10px;
        }
        .list-group-item {
            border: none;
            padding: 12px 20px;
        }
        .list-group-item + .list-group-item {
            margin-top: 10px;
        }
        nav a.btn {
            margin-top: 30px;
            display: inline-block;
        }
    </style>
<div class="container">
<div class="card mt-5 shadow-sm">
<div class="card-body">
<h2>Districts de la région <?= $region_name; ?></h2>
<ul class="list-group">
    <?php if (!empty($districts)): ?>
        <?php foreach ($districts as $district): ?>
                <li class="list-group-item">
                <a href="<?= site_url('location/district/'.$district['code_Districts']); ?>">
                    <?= $district['Nom_District']; ?>
                </a> 
                
            </li>
        <?php endforeach; ?>
        <br><a href="<?= site_url('location/regions'); ?>"class="btn btn-outline-primary">Retour à la liste des régions</a>
    <?php else: ?>
        <li class="list-group-item">Aucun district trouvé pour cette région.</li>
        <a href="<?= site_url('location/regions'); ?>"class="btn btn-outline-primary">Retour à la liste des régions</a>
    <?php endif; ?>
</ul> 
<script src="<?= base_url('public/assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>

