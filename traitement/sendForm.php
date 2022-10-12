<?php
include '../includes/BDDConnexion.php';
// Envoie le questionnaire en bdd

// On récupère les données du formulaire
$emotions = $_POST['emotions'];


$data = [
    'userid' => $_SESSION['iduser'],
    'emoji1' => $emotions[0],
    'emoji2' => $emotions[1],
	'emoji3' => $emotions[2]
];
$sql = "INSERT INTO questionaire (userid, emoji1, emoji2, emoji3, questionaire_date) VALUES (:userid, :emoji1, :emoji2, :emoji3, NOW())";

$stmt= $db->prepare($sql)->execute($data);

if($stmt) // Pas d'erreur
{
	header("Location: ../index.php",true);
    die();
}

?>