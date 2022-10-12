<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="styleLogin.css" media="screen" type="text/css" />
    </head>
    <body>
    <?php
    include 'includes/BDDConnexion.php';
    if(isset($_SESSION['iduser'])){
        header("Location: ./index.php",true);
        die();
    }
    ?>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="login.php" method="POST"> <!-- a changer par verification.php après -->
                <h1>Connexion</h1>
                
                <label><b> Nom </b></label>
                <input type="text" placeholder="Email" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="MDP" name="password" required>

                <input type="submit" name="submit" id='submit' value='Valider' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                if(isset($_POST['submit'])){
                    $bdd = $db->prepare('SELECT password FROM profil WHERE mail = :mail');
                    $mdp = $bdd->execute(['mail' => $_POST['username']]);
                    if(isset($mdp) && (crypt($_POST['password'],'$6$rounds=5000$usesomesillystringforsalt$') == $mdp)) {
                        $bdd = $db->prepare('SELECT password FROM profil WHERE mail = :mail');
                        $_SESSION['iduser'] =  $bdd->execute(['mail' => $_POST['username']]);
                        header("Location: ./index.php",true);
                        die();
                    }
                    else echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";

                }else echo 'submit non set'
                ?>
            </form>
        </div>
    </body>
</html>