<div class="experience_container">
    <h2>Expériences</h2>

    <?php foreach($experiences as $exp): ?>
    <div class="experience">
        <span><?= $exp->period ?></span> <?= $exp->label ?>
    </div>
    <?php endforeach; ?>
</div>