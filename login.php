<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="styleLogin.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="login.php" method="POST"> <!-- a changer par verification.php après -->
                <h1>Connexion</h1>
                
                <label><b> Nom </b></label>
                <input type="text" placeholder="Votre NOM " name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="votre MDP" name="password" required>

                <input type="submit" id='submit' value='Valider' >
                <?php
                include 'includes/BDDConnexion.php';
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                if(isset($_POST['submit'])){
                    $sql = 'SELECT password FROM profil WHERE mail = '.$_POST['username'];
                    $mdp = $db->query($sql);
                    if(isset($mdp) && (crypt($_POST['password'],CRYPT_SHA512) == $mdp)) {
                        $sql =  $sql = 'SELECT iduser FROM profil WHERE mail = '.$_POST['username'];
                        $_SESSION['iduser'] =  $db->query($sql);
                    }
                    else echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>