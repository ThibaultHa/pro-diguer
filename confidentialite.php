<?php 
include 'includes/BDDConnexion.php';
include 'traitement/userbdd.php';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Confidentialité</title>
    <link rel="icon" type="image/png" href="img/logo.png"/>
    <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- Menu -->
<?php include 'includes/nav.php';

//$sql = "SELECT share_coach FROM user WHERE user.id = ".$_SESSION['userId'];
//$result = $conn->query($sql);

?>
<section>
    <article class="page-content">
        <form>
            <p>
                <?php
				
				// On récupère l'autorisation de l'utilisateur si ces données peuvent être consulté par un coath ou non
                $sql = "SELECT share_coach FROM profil WHERE iduser = ".$_SESSION['iduser'];
                $bdd = $db->prepare($sql);
				$bdd->execute();
				$result = $bdd->fetch();
                if (isset($result)) 
				{
                    if ($result[0]) 
						echo '<input type="checkbox" id="shareData" name="shareData" checked>';
                    else 
						echo '<input type="checkbox" id="shareData" name="shareData">';
                }
                ?>
                <label for="shareData">J'autorise à partager mes données avec mon coach carrière</label>
            </p>
        </form>
    </article>
</section>
<<<<<<< HEAD
<footer class="page-content">
    <p>Pied de page qui sert vraiment à rien pour le coup..</p>
</footer>
=======
>>>>>>> 6b5fb750cf30fd782f1b523217090ed8e439bf78
</body>
</html>
