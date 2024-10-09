<!-- application/views/district_details_view.php -->
<h2>Détails du District : <?= $district['Nom_District']; ?></h2>
<ul>
    <li><strong>Population :</strong> <?= $district['Population_District']; ?></li>
    <li><strong>Nombre de Communes :</strong> <?= $district['Nombre_Commune']; ?></li>
    <li><strong>Nombre de Fokontany :</strong> <?= $district['Nombre_Fokotany']; ?></li>
</ul>
<a href="<?= site_url('location/districts/'.$district['cdregion']); ?>">Retour à la liste des districts</a>
<a href="<?= site_url('location/regions'); ?>">Retour à la liste des régions</a>