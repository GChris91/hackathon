<?php ob_start(); ?>
	<div class="Message">
		<h1>Qualité de l'air</h1>
		<section class="rgba-green">
			<h3 class="green">Vert</h3>
			<span>
				L'air est propre.
				Concentration de ... inférieur à ....
				Concentration de ... inférieur à ....
				Concentration de ... inférieur à ....
			</span>
		</section>
		<section class="rgba-green">
			<h3 class="green">Jaune</h3>
			<span>
				L'air est propre.
				Concentration de ... supérieur à ....
				Concentration de ... inférieur à ....
				Concentration de ... inférieur à ....
			</span>
		</section>
		<section class="rgba-green">
			<h3 class="green">Orange</h3>
			<span>
				L'air est propre.
				Concentration de ... supérieur à ....
				Concentration de ... supérieur à ....
				Concentration de ... inférieur à ....
			</span>
		</section>
		<section class="rgba-green">
			<h3 class="green">Rouge</h3>
			<span>
				L'air est propre.
				Concentration de ... supérieur à ....
				Concentration de ... supérieur à ....
				Concentration de ... supérieur à ....
			</span>
		</section>
	</div>

	<p>
		Les principaux pollueurs de l'air sont ...
	</p>

	<p>
		Une pollution élevée de l'air peut causer ...
		Il est recommandé de ne pas ...
	</p>
<?php $contents = ob_get_clean(); ?>