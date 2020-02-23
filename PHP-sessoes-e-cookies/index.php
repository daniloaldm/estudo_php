<?php 

require __DIR__.'/session.php';

$user = $_SESSION['user'] ?? null;
if(empty($user['email'])){
    header('location: login.php');
    exit;
}

// if(empty($_POST['email'])){
//     header('location: login.php');
//     exit;
// }
$pathLogout = basename(__DIR__.'/logout.php')

?>
<h1>Página protegida</h1>

<p>Olá, <?php echo $user['email'] ?></p>

<p><a href="<?php echo $pathLogout?>">logout</a></p>