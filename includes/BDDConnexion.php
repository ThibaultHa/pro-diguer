<?php
session_start();

$username = 'root';
$password = 'root';
$host = 'localhost';
$base = 'pro-diguer';

//On établit la connexion
//$conn = new mysqli($servername, $username, $password);
try
{
	// On se connecte à MySQL
	$db = new PDO('mysql:host='.$host.';dbname='.$base.';charset=utf8', $username, $password);
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
?>
