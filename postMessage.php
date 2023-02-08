

<?php session_start();?>

<?php

$message = isset($_POST["message"]) ? addslashes($_POST['message']) : false;
/*
if(!empty($_SESSION['message']))
{ 
    $_SESSION['message'] = $_POST['message'];
    header('location: box.php' );
}
*/

$_SESSION['messages'][] = [

        'pseudo' => $_SESSION['login'],
        'message' => $message,
];

header('location: box.php' );


?>
