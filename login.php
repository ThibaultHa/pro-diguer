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
                    $bdd->execute(['mail' => $_POST['username']]);
                    if($bdd->fetch()){
                        $bdd->execute(['mail' => $_POST['username']]);
                        $mdp = $bdd->fetch()[0];
                        $cryptpass = crypt($_POST['password'],'$6$rounds=5000$usesomesillystringforsalt$');
                        if(isset($mdp) && (strcmp($cryptpass,$mdp) == 0)) {
                            $bdd = $db->prepare('SELECT iduser FROM profil WHERE mail = :mail');
                            $bdd->execute(['mail' => $_POST['username']]);
                            $_SESSION['iduser'] =  $bdd->fetch()[0];
                            header("Location: ./index.php",true);
                            die();
                        }
                        else echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    }else echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>