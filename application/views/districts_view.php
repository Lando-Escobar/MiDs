<!-- application/views/districts_view.php -->
<h2>Districts de la région <?= $region_name; ?></h2>
<ul>
    <?php if (!empty($districts)): ?>
        <?php foreach ($districts as $district): ?>
            <>
                <a href="<?= site_url('location/district/'.$district['code_Districts']); ?>">
                    <?= $district['Nom_District']; ?>
                </a> 
                
            </li>
            
        <?php endforeach; ?>
        <br><nav><a href="<?= site_url('location/regions'); ?>">Retour à la liste des régions</a></nav>
    <?php else: ?>
        <li>Aucun district trouvé pour cette région.</li>
        <a href="<?= site_url('location/regions'); ?>">Retour à la liste des régions</a>
    <?php endif; ?>
</ul>
