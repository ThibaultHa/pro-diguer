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
						// On récupère les 4 derniers formulaires complété par l'utilisateur
						$bdd = $db->prepare('SELECT * FROM questionaire WHERE userid = :userid ORDER BY questionnaire_id DESC LIMIT 4');
						$bdd->execute(['userid' => $userResult['iduser']]);
						$qResults = $bdd->fetchAll();
						// Impression html
						echo '<tr>';
							// Nom prénom
							echo '<td>' . $userResult['prenom'] . ' ' . $userResult['nom'] . '</td>';
							// synthèse mensuel
							echo '<td>';
								if($userResult['SHARE_coach']) // La communication au manager est autorisé
								{
									if(isset($qResults)) // Affichage des résultats
									{
										echo '<table>';
										foreach ($qResults as $qResult) 
										{
											echo '<tr>';
											echo '<td>';
											echo "<img class='img_emotion' src='img/emotion/" . $qResult['emoji1'] . ".png'>";
											echo '</td>';
											echo '<td>';
											echo "<img class='img_emotion' src='img/emotion/" . $qResult['emoji2'] . ".png'>";
											echo '</td>';
											echo '<td>';
											echo "<img class='img_emotion' src='img/emotion/" . $qResult['emoji3'] . ".png'>";
											echo '</td>';
											echo '</tr>';
										}
										echo '</table>';
									}
									else // Résultat inexistant
									{
										echo 'Aucune information disponible';
									}
								}
								else // elle n'est pas autorisé.
								{
									echo 'Information non partagé';
								}
							echo '</td>'; 
							// IA calcul
							echo '<td>';
								// On récupère les smiley 
								$bdd = $db->prepare('SELECT * FROM emoji');
								$bdd->execute();
								$emojiResults = $bdd->fetchAll();
								// Calcul du score
								if(isset($emojiResults) and $userResult['SHARE_coach'])
								{
									$baseScore = 100;
									$emojiScore = 0;
									foreach ($qResults as $qResult) 
									{
										$emojiScore += $emojiResults[intval($qResult['emoji1'])-1]['emoval'] + $emojiResults[intval($qResult['emoji2'])-1]['emoval'] + $emojiResults[intval($qResult['emoji3'])-1]['emoval'];
									}
									
									$totalScore = $baseScore + $emojiScore;
									
									echo $totalScore;
								}
								else
								{
									// rien
								}
							echo '</td>'; 
						echo '</tr>';
					}
				?>
				</tbody>
			</table>
		</article>
	</section>
</body>
</html>