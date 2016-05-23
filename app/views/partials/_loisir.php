<div class="loisir_container">
    <h2>Loisirs</h2>
    <p class="loisirs">
        <?php foreach($leisures as $idx => $leisure): ?>
            <?php if ($idx != 0): ?><span>•</span><?php endif; ?>
            <?= $leisure->name ?>
        <?php endforeach; ?>
    </p>
</div>