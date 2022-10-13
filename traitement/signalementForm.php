<?php

include '../includes/BDDConnexion.php';
// Envoie le questionnaire en bdd
$sql = "SELECT iduser FROM profil WHERE nom like :name AND prenom like :firstname";
$bdd = $db->prepare($sql);
$bdd->execute([
    'name' => $_POST['name'],
    'firstname' => $_POST['firstname']
]);

$signal_userid = $bdd->fetch()[0];

$data = [
    'userid' => $_SESSION['iduser'],
    'signal_userid' => $signal_userid,
    'emoji' => $_POST['emotion'],
    'commentaire' => $_POST['comment']
];
$sql = "INSERT INTO signalement (userid,signal_userid,emoji,commentaire,date_add) VALUES (:userid, :signal_userid, :emoji, :commentaire, NOW())";

$stmt = $db->prepare($sql)->execute($data);

if ($stmt) // Pas d'erreur
{
    header("Location: ../index.php", true);
    die();
}

