<?php 
include 'includes/BDDConnexion.php';
include 'traitement/userbdd.php';
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Questionnaire</title>
  <link rel="icon" type="image/png" href="img/logo.png" />
  <link rel="stylesheet" href="css/default.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- Menu -->
	<?php include 'includes/nav.php';?>
	
	<section>
		<article class="page-content">
			<form method="GET" id="questionnaire_form"></form>
			<fieldset>
				<legend>Choisi 3 émotions représentant ta semaine :</legend>
				<?php include 'includes/tableauQ.php';?>
				<button type="submit">Valider !</button>
			</fieldset>
			
		</article>
	</section>
	<footer>
		
	</footer>
</body>
</html>