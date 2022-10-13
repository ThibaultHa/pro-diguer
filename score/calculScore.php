<?php
	// Calcul et affiche un smiley selon le score d'un utilisateur
	
	// On récupère les 4 derniers formulaires complété par l'utilisateur
	$bdd = $db->prepare('SELECT * FROM questionaire WHERE userid = :userid ORDER BY questionnaire_id DESC LIMIT 4');
	$bdd->execute(['userid' => $id]);
	$qResults = $bdd->fetchAll();
	
	// On récupère les smiley 
	$bdd = $db->prepare('SELECT * FROM emoji');
	$bdd->execute();
	$emojiResults = $bdd->fetchAll();
	
	// Calcul
	$baseScore = 100;
	$emojiScore = 0;
	foreach ($qResults as $qResult) 
	{
		$emojiScore += $emojiResults[intval($qResult['emoji1'])-1]['emoval'] + $emojiResults[intval($qResult['emoji2'])-1]['emoval'] + $emojiResults[intval($qResult['emoji3'])-1]['emoval'];
	}
		
	$totalScore = $baseScore + $emojiScore;
		
	echo $totalScore;

?>