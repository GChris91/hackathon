<?php ob_start(); ?>
	<div class="details">
		<h1>Baignade</h1>
		<section class="rgba-green">
			<h3 class="green">Vert</h3>
			<span>
				Eau de <strong>bonne</strong> qualité. <br/> 
				Risque sanitaire <strong>très</strong> faible
			</span>
		</section>
		<section class="rgba-yellow">
			<h3 class="yellow">Jaune</h3>
			<span>
				Qualité des eaux <strong>moyenne</strong><br/>
				Risque sanitaire <strong>existant</strong> mais reste cependant <strong>modéré</strong>.
			</span>
		</section>
		<section class="rgba-orange">
			<h3 class="orange">Orange</h3>
			<span>
				<strong>Mauvaise</strong> qualité des eaux <br/> Risque sanitaire <strong>élevé</strong> <br/>Baignade <strong>déconseillée</strong>
			</span>
		</section>
		
		<section class="rgba-red last">
			<h3 class="red">Rouge</h3>
			<span>
				Risque sanitaire <strong>AVÉRÉ</strong><br/>
				Baignade <strong>INTERDITE</strong>
			</span>
		</section>

		

	</div>
<?php $contents = ob_get_clean(); ?>