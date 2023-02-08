

<?php session_start();?>

<?php

$message = isset($_POST['message']) ? addslashes($_POST['message']) : false;

$_SESSION['messages'][] = [

        'pseudo' => $_SESSION['login'],
        'message' => $message,
];


header('location: box.php' );


?>
