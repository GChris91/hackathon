<?php ob_start(); ?>
	<div class="details">
		<h1><a href="/Hackathon/code"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a> Baignade</h1>
		<section class="rgba-green">
			<h3 class="green">Vert</h3>
			<span>
				Qualité de l'air <strong>bonne</strong>. <br/> 
				Concentrations des éléments toxiques contenus
				dans l'air <strong>en dessous</strong> du seuil critique.
			</span>
		</section>
		<section class="rgba-orange">
			<h3 class="orange">Orange</h3>
			<span>
				La qualité de l'air est <strong>moyenne</strong>, 
				<strong>au moins une</strong> concentration parmis les celles des éléments
				toxiques <strong>se rapproche</strong> du seuil critique, aucune ne l'atteint.
			</span>
		</section>
		<section class="rgba-yellow">
			<h3 class="yellow">Jaune</h3>
			<span>
				La qualité de l'air est <strong>moyenne</strong>, 
				<strong>au moins une</strong> concentration parmis les celles des éléments
				toxiques <strong>se rapproche</strong> du seuil critique, aucune ne l'atteint.
			</span>
		</section>
		<section class="rgba-red last">
			<h3 class="red">Rouge</h3>
			<span>
				La qualité de l'air est <strong>mauvaise</strong>, 
				<strong>au moins une</strong> concentration parmis les celles des éléments
				toxiques <strong>dépasse</strong> du seuil critique, aucune ne l'atteint.
			</span>
		</section>

		<p>
			Les <strong>principaux pollueurs</strong> de l'air sont: <br/>
			- Le <strong>PM10</strong>, Particules en suspension <br/>
			- Le <strong>SO2</strong>, dioxyde de soufre <br/>
			- Le <strong>NO2</strong>, Dioxyde d'Azote <br/>
		</p>

		<p>
			Ces trois substances <strong>attaquent les voies respiratoires</strong>
			lorsqu'elles sont présentent en trop grandes quantités dans l'air.
		</p>

		<p>
			Au niveau local, de fortes concentrations de ces produits peuvent conduire à des <strong>dégradations
			des matériaux</strong> puis à des <strong>nécroses</strong> ou une <strong>réduction de croissance</strong> sur les plantes.
		</p>

		<p class="last-p">
			À une échelle plus grande, elles contribuent aux phénomènes de <strong>pluies acides</strong> qui 
			entraînent le <strong>dépérissement des forêts</strong> et la <strong>dégradation des sols</strong>.
		</p>

	</div>
<?php $contents = ob_get_clean(); ?>