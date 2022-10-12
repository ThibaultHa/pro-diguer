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
		<article class="page-content">
			<table>
				<thead>
					<tr>
						<th>Prénom Nom</th>
						<th>Suivit Hebdo</th>
						<th>Tendence</th>
					</tr>
				</thead>
				<?php
				// Récpération des données utilisateurs nécessaires pour afficher le tableau
				$bdd = $db->prepare('SELECT * FROM profil');
				$bdd->execute();
				$userResults = $bdd->fetchAll();
				
				?>
				<tbody>
				<?php
					foreach ($userResults as $userResult) 
					{
						echo '<tr>';
							echo '<td>' . $userResult['prenom'] . ' ' . $userResult['nom'] . '</td>';
							echo '<td>CONTENT</td>'; 
							echo '<td>...</td>'; 
						echo '</tr>';
					}
				?>
				</tbody>
			</table>
		</article>
	</section>
</body>
</html>