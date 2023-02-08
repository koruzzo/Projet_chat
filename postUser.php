<?php session_start();?>

<?php

$pseudo = isset($_POST['pseudo']) ? addslashes($_POST['pseudo']) : false;


if($pseudo ){
    $_SESSION['login'] = $pseudo;  
}

header('location: box.php' );

?>
