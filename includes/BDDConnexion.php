<?php
$servername = 'localhost';
$username = 'root';
$password = '';

session_start();
$_SESSION['userId'] = 1;

//On établit la connexion
$conn = new mysqli($servername, $username, $password);

//On vérifie la connexion
if($conn->connect_error){
    die('Erreur : ' .$conn->connect_error);
}else return $conn;
?>