<?php session_start();?>

<?php

$pseudo = $_POST['pseudo'];
/*
if(!empty($_SESSION['pseudo']))
{ 
    $_SESSION['pseudo'] = $_POST['pseudo']; 
    header('location: box.php' );
}
*/
if($pseudo ){
    $_SESSION['login'] = $pseudo;  
}

/*
$_SESSION[] = [

        'pseudo' => $pseudo,
        'message' => $message,
];
*/
header('location: box.php' );

?>
