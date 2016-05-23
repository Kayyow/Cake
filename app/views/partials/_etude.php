<div class="etude_container">
    <h2>Études</h2>

    <?php foreach($studies as $study): ?>
    <div class="etudes">
        <span class="date"><?= $study->period ?></span>
        <span class="place"><?= $study->place ?></span> 
        <span class="certificate"><?= $study->qualification ?></span>
    </div>
    <?php endforeach; ?>
    
</div>