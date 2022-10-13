<article class="page-content">
	<!-- Humeur -->
	<p>Mon humeur : 
	<?php
		$id = $_SESSION['iduser']; // Requis pour l'exec de calculScore
		include 'score/calculScore.php';
	?>
	</p>
	
	<!-- Conseil -->
	<?php
	
	$ilyadesconseils = true;
	
	// doublon pas performant mais bon 
	// On récupère les 4 derniers formulaires complété par l'utilisateur
	$bdd = $db->prepare('SELECT emoji1, emoji2, emoji3 FROM questionaire WHERE userid = :userid ORDER BY questionnaire_id DESC LIMIT 2');
	$bdd->execute(['userid' => $_SESSION['iduser']]);
	$qResults = $bdd->fetchAll();
	
	// Liste des smiley utilisés
	$listEmoji = array();
	foreach ($qResults as $qResult) 
	{
		array_push($listEmoji, $qResult['emoji1'], $qResult['emoji2'], $qResult['emoji3']);
	}
	array_unique($listEmoji);
	
	if(!empty($listEmoji)) // Il y a des conseils à afficher
	{
		// On récupère les smiley 
		//$bdd = $db->prepare('SELECT * FROM emoji');
		//$bdd->execute();
		//$emojiResults = $bdd->fetchAll();

		$check = array(); // Sert a vérifier si le conseil a déjà été donné

		foreach ($listEmoji as $i)
		{
			// Récupération des conseils associés à l'émoji
			$bdd = $db->prepare('SELECT conseil.titre, conseil.leConseil FROM conseil, emojiconseil WHERE conseil.coseilId = emojiconseil.conseil_Id AND emojiconseil.emoji_Id = ' . $i);
			$bdd->execute();
			$conseilResults = $bdd->fetchAll();
			
			// Affichage écran
			if(!empty($conseilResults))
			{
				foreach ($conseilResults as $conseilResult)
				{
					// On ajoute seulement le conseil si il n'a pas été déjà donnée
					if(!in_array($conseilResult['titre'], $check, false))
					{
						echo "<div class='conseil'>";
						echo "<fieldset>";
							echo "<legend>" . $conseilResult['titre'] . "</legend>";
							echo "<p>" . $conseilResult['leConseil'] . "</p>";
						echo "</fieldset>";
						echo "</div>";
						
						array_push($check, $conseilResult['titre']);
					}
				}
			}
		}

		// Les conseils
		//$bdd = $db->prepare('SELECT * FROM conseil');
		//$bdd->execute();
		//$conseilResults = $bdd->fetchAll();

		// Assos conseil / smiley
		//$bdd = $db->prepare('SELECT * FROM emojiconseil');
		//$bdd->execute();
		//$Results = $bdd->fetchAll();
	}
	else // Aucun conseil à afficher
	{
		echo "<p>Comment allez vous ?</p>";
	}
	
	?>
	
</article>