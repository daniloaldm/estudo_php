<?php 
$conn = require ('connection.php');
$id = $_GET['id'] ?? null;

$stmt = $conn->prepare('SELECT * FROM users where id = ?');
$stmt->bind_param('i', $id);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <h1><?php echo $user['email'];?></h1>
    <p>O id deste usuário é <?php echo $user['id']; ?></p>

    <p>
        <a href="<?php echo basename(__DIR__).'/../editar.php?id='.$user['id'];?>">editar</a>
        <a href="<?php echo basename(__DIR__).'/../remover.php?id='.$user['id'];?>">remover</a>
    </p>

    <p><a href="<?php echo basename(__DIR__).'/../';?>">voltar</a></p>    
</body>
</html>