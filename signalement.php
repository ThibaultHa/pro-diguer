<?php
include 'includes/BDDConnexion.php';
include 'traitement/userbdd.php';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Report</title>
    <link rel="icon" type="image/png" href="img/logo.png"/>
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<<<<<<< HEAD
	<!-- Menu -->
	<?php include 'includes/nav.php';?>
	<section>
		<article  class="page-content">
			<p>Avis :</p>
		</article>
	</section>
	<footer class="page-content">
		<p>Pied de page qui sert vraiment à rien pour le coup..</p>
	</footer>
=======
<!-- Menu -->
<?php include 'includes/nav.php'; ?>
<section>
    <article class="page-content">
        <h3>Information sur la personne que vous souhaitez signaler </h3>
        <form action="signalement.php" method="POST">
            <p>
                <label><b>Nom </b></label>
                <input type="text" name="name" placeholder="Crinchon" required>
            </p>
            <p>
                <label><b>Prénom </b></label>
                <input type="text" name="firstname" placeholder="Mathis" required>
            </p>
            <br/>
            <p>
            <h3>Votre ressentie sur cette personne :</h3>
            <table>
                <tbody>
                <tr>
                    <?php
                    $i = 1;
                    for ($colonne = 1; $colonne <= 7; $colonne++) {
                        echo "<td>";
                        echo "<input type='checkbox' id='emotion_" . $i . "' name='emotions[]' value='" . $i . "'> <img class='img_emotion' src='img/emotion/" . $i . ".png'>";
                        echo "</td>";
                        $i++;
                    }
                    ?>
                </tr>
                <tbody>
            </table>
            </p>
            <h2>Commentaire</h2>
            <textarea name="comment" rows="12" cols="35" required>Commentaire</textarea><br>
            <input type="submit" name="submit" id='submit' value='Valider'>
        </form>
    </article>
</section>
>>>>>>> 6b5fb750cf30fd782f1b523217090ed8e439bf78
</body>
</html>