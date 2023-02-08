
<?php session_start();?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php require('template/head.php');?>
    </head>
    
    <body class="body2">
        <div class="zone_text">
            <?php 
                foreach ($_SESSION['messages'] as $data) 
                {
                    echo  $data['pseudo'] . ' dit : ' . $data['message'] . '<br>';
                }
            ?>
        </div>   
        <form action="postMessage.php" method="post" class="formu_box">
            <input type="text" name="message" class="barre_box" placeholder="Éditer votre message ici" /> 
            <div class="bouton_pack">
                <input class="bouton_box" type="submit" value="Envoyer" /> 
                <a class="bouton_a_box" href="traitement/deconnexion.php">Déconnexion</a>
            </div>

        </form>      
        
    </body>
</html>
