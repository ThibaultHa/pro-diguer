<nav>
	<p>Bienvenue <?php echo $_SESSION['prenom']; ?> <?php echo $_SESSION['nom']; ?></p>
	<p><?php echo $_SESSION['statut']; ?></p>
	<br>
	<p><a href="index.php">Profil</a></p>
	<p><a href="signalement.php">Signalement</a></p>
	<p><a href="confidentialite.php">Confidentialite</a></p>
	<p><a href="synthese.php">Synthèse</a></p>
	<br>
	<p><a href="login.php">Déconnecter</a></p>
</nav>