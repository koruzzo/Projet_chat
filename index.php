<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php require('template/head.php'); ?>
    </head>
    
    <body>
        
    
            <p>Bienvenue sur le Super-Tchat</p>

            <p>Insérez votre pseudo choisi:</p>    
            <form action="postUser.php" method="post">          
                <input type="text" name="pseudo" id="pseudo" /> 
                <input type="submit" value="Envoyer" />                   
            </form>
        


    </body>
</html>
