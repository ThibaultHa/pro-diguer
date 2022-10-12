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
                    $sql = "SELECT share_coach FROM user WHERE user.id = ".$_SESSION['iduser'];
                    $db->query($sql);
                if (isset($result)) {
                    if ($result == true) echo '<input type="checkbox" id="shareData" name="shareData" checked>';
                    else echo '<input type="checkbox" id="shareData" name="shareData">';
                    }
                ?>
                <label for="shareData">J'autorise à partager mes données avec mon coach carrière</label>
            </p>
        </form>
    </article>
</section>
<footer class="page-content">
    <p>Pied de page qui sert vraiment à rien pour le coup..</p>
</footer>
</body>
</html>
