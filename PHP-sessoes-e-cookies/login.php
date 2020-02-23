<?php 

require __DIR__.'/session.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['user'] = [
        'email' => $_POST['email']
    ];

    header('location: index.php');
    exit;
}
 
// $path = basename(__DIR__.'/index.php');
?>

<h1>Login</h1>

<form action="" method="POST">

    <input type="text" name="email">
    <input type="submit" name="enter">

</form>