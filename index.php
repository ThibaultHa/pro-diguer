<?php
include 'includes/BDDConnexion.php';
if(!isset($_SESSION['iduser'])){
    header("Location: ./login.php",true);
    die();
}
include 'traitement/userbdd.php';
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Profil</title>
  <link rel="icon" type="image/png" href="img/logo.png" />
  <link rel="stylesheet" href="css/default.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- Menu -->
	<?php
    include 'includes/nav.php';
    ?>

    
	
	<section>
		<!-- 2 situations : l'utilisateur doit compléter son formulaire ou n'a rien à faire -->
		<!-- Doit compléter son formulaire -->
		<?php
			$check = true;
			if($check) // Doit compléter son formulaire
			{
				include 'includes/verrouProfil.php';
			}
			else // Tout est ok
			{
				include 'includes/pageProfil.php';
			}
		?>
	</section>
</body>
</html>