<nav class="menu-principal">
	<div class="logo-appli">
		<p>Bienvenue <?php echo $_SESSION['prenom']; ?> <?php echo $_SESSION['nom']; ?></p>
		<p><?php echo $_SESSION['statut']; ?></p>
	</div>
	<div class="menu-appli">
	<a href="index.php">Profil</a>
	<a href="signalement.php">Signalement</a>
	<a href="confidentialite.php">Confidentialite</a>
	<?php
		if($_SESSION['statut'] == 'coath')
			echo '<a href="synthese.php">Synthèse</a>';
	?>
	<a href="logout.php">Déconnecter</a>
	</div>
</nav>
