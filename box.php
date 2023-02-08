
<?php session_start();?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php require('template/head.php'); 
        
        
        ?>

    </head>
    
    <body>
   


        <form action="postMessage.php" method="post">
            <input type="text" name="message" classe="message" size="80" placeholder="Éditer votre message ici" /> 
            <input class="bouton_env" type="submit" value="Envoyer" /> 
            <a class="bouton_deco" href="traitement/deconnexion.php">Déconnexion</a>
        </form>
                

        <?php 
        

        $liste = $_SESSION['messages'];
        
        foreach($liste as $value) : ?>
                <div>
                    <h2><?= $value['pseudo'] ?></h2>
                    <p><?= $value['message'] ?></p>
                    <hr>

                </div>
        <?php endforeach ?>


    </body>
</html>
