<div class="skill_container">
	<h2>Compétences</h2>

	<?php var_dump($skillsByGroups) ?>

	<?php foreach($skillsByGroups as $group => $skills): ?>
	<div class="<?= $group ?>_skill">
		<p class="category"><?= $group ?></p>
		<?php foreach($skills as $skill): ?>
		<div class="skill">
			<p><?= $skill->name ?></p>
			<div class="bar">
				<div class="progress"
					style="width:<?= $skill->level ? $skill->level : 0; ?>%">
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
	<?php endforeach; ?>

	<!-- RESEAU
	<div class="reseau_skill">
		<p class="category"> Réseaux </p>
	</div>
	
	WEB
	<div class="web_skill">
		<p class="category"> Web </p>
	</div>
	
	DEV
	<div class="dev_skill">
		<p class="category"> Développement </p>
	</div>
	
	AUTRES
	<div class="other_skill">
		<p class="category"> Autres </p>
	</div> -->
</div>