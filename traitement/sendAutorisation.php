<?php
include '../includes/BDDConnexion.php';

$autorisation= 0;
if(isset($_POST['shareData']))
{
    $autorisation=1;
}

$data = [
    'userid' => $_SESSION['iduser'],
	'coach' => $autorisation
];

$miseAjour = ("UPDATE profil SET SHARE_coach = :coach where iduser=:userid");
$stmt= $db->prepare($miseAjour)->execute($data);

if($stmt) // Pas d'erreur
{
	header("Location: ../index.php",true);
	die();
}


?>