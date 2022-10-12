<?php
// Récupère l'utilisateur en bdd et le stock dans des variables de session
$_SESSION['iduser'] = 1;
$bdd = $db->prepare('SELECT * FROM profil WHERE profil.iduser = :id');
$bdd->execute(['id' => $_SESSION['iduser']]);
$results = $bdd->fetchAll();

$_SESSION['nom'] = $results[0]['nom'];
$_SESSION['prenom'] = $results[0]['prenom'];
$_SESSION['statut'] = $results[0]['statut'];
?>