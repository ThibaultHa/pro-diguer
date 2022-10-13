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
<!-- Menu -->
<?php include 'includes/nav.php'; ?>
<section>
    <article class="page-content">
        <h3>Information sur la personne que vous souhaitez signaler </h3>
        <form action="traitement/signalementForm.php" method="POST">
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
                    <td>
                        <input type='radio' id='emotion_1' name='emotion' value='1'> <img class='img_emotion' src='img/emotion/1.png'>
                    </td>
                    <td>
                        <input type='radio' id='emotion_2' name='emotion' value='2'> <img class='img_emotion' src='img/emotion/2.png'>
                    </td>
                    <td>
                        <input type='radio' id='emotion_3' name='emotion' value='3'> <img class='img_emotion' src='img/emotion/3.png'>
                    </td>
                    <td>
                        <input type='radio' id='emotion_4' name='emotion' value='4'> <img class='img_emotion' src='img/emotion/4.png'>
                    </td>
                    <td>
                        <input type='radio' id='emotion_5' name='emotion' value='5'> <img class='img_emotion' src='img/emotion/5.png'>
                    </td>
                </tr>
                <tbody>
            </table>
            </p>
            <h2>Commentaire</h2>
            <textarea name="comment" rows="12" cols="35" required></textarea><br>
            <input type="submit" name="submit" id='submit' value='Valider'>
        </form>
    </article>
</section>
</body>
</html>