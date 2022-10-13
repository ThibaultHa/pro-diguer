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

//On récupère les signalements
$bdd = $db->prepare('SELECT *  FROM signalement WHERE signal_userid = :id ORDER BY signal_id DESC LIMIT 4');
$bdd->execute(['id' => $id]);
$signalements = $bdd->fetchAll();

// On récupère les profil
$bdd = $db->prepare('SELECT * FROM profil');
$bdd->execute();
$profils = $bdd->fetchAll();


// Calcul Questionnaire
$baseScore = 100;
$emojiScore = 0;
foreach ($qResults as $qResult) {
    $emojiScore += $emojiResults[intval($qResult['emoji1']) - 1]['emoval'] + $emojiResults[intval($qResult['emoji2']) - 1]['emoval'] + $emojiResults[intval($qResult['emoji3']) - 1]['emoval'];
}

//Calcul Signalement :
$poids_user = 0.3;
$poids_coath = 2;
$signalementScore = 0;
foreach ($signalements as $signalement) {
    //Véérification si l'utilisateru qui à fait le signalement est un coath ou non
    if(strcmp($profils[intval($signalement['userid'])]['iduser'],'coath')) $user_coath = true;
    else $user_coath = false;
    //Calcule
    if($user_coath)$signalementScore += ($emojiResults[intval($signalement['emoji']) - 1]['emoval']) * $poids_coath;
    else $signalementScore += ($emojiResults[intval($signalement['emoji']) - 1]['emoval']) * $poids_user;

}

$totalScore = $baseScore + $emojiScore + $signalementScore;

echo $totalScore;

?>