<?php
// Récupère l'utilisateur en bdd et le stock dans des variables de session
$bdd = $db->prepare('SELECT * FROM user WHERE user.id = :id');
$bdd->execute(['id' => 1]);
$results = $bdd->fetchAll();

$_SESSION['nom'] = $results[0]['nom'];
$_SESSION['prenom'] = $results[0]['prenom'];

?>