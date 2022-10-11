<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Confidentialité</title>
    <link rel="icon" type="image/png" href="img/logo.png"/>
    <link rel="stylesheet" href="css/default.css">
</head>
<body>
<header>
    <p>Gestion de la confidentialité</p>
</header>
<!-- Menu -->
<?php include 'includes/nav.php';
<<<<<<< HEAD
$conn = include 'includes/BDDConnexion.php';
$sql = "SELECT share_coach FROM user WHERE user.id = " . $_SESSION['userId'];
$result = $conn->query($sql);
=======
//$conn = include 'includes/BDDConnexion.php';
//$sql = "SELECT share_coach FROM user WHERE user.id = ".$_SESSION['userId'];
//$result = $conn->query($sql);
>>>>>>> a8320aa5e429f44ab886c92fc662e1a33d56673c
?>
<section>
    <article>
        <form>
            <p>
                <?php if (isset($result)) {
                    if ($result == true) echo '<input type="checkbox" id="shareData" name="shareData" checked>';
                    else echo '<input type="checkbox" id="shareData" name="shareData">';
                    }
                ?>
                <label for="shareData">J'autorise à partager mes données avec mon coach carrière</label>
            </p>
        </form>
    </article>
</section>
<footer>
    <p>Pied de page qui sert vraiment à rien pour le coup..</p>
</footer>
</body>
</html>
