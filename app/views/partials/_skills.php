<div class="skills_container">
	<h2>Compétences</h2>

	<?php foreach($skillsByGroups as $group => $skills): ?>
	<div class="skill_group">
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
</div>