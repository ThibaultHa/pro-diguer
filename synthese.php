<?php 
include 'includes/BDDConnexion.php';
include 'traitement/userbdd.php';
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Synthèse</title>
  <link rel="icon" type="image/png" href="img/logo.png" />
  <link rel="stylesheet" href="css/default.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- Menu -->
	<?php include 'includes/nav.php';?>
	<section>
		<article class="page-content page-confidentialite">
			<table>
				<thead>
					<tr>
						<th>Prénom Nom</th>
						<th>Suivit Hebdo</th>
						<th>Tendence</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Calvin D</td>
						<td>CONTENT</td> <!-- Affiche 4 semaines utilisateur -->
						<td>...</td> <!-- Affiche un état smile -->
					</tr>
				</tbody>
			</table>
		</article>
	</section>
	<footer class="page-content">
		<p>Pied de page qui sert vraiment à rien pour le coup..</p>
	</footer>
</body>
</html>