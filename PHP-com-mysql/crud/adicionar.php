<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $conn = require ('connection.php');
    $email = $_POST['email'] ?? null;
    $stmt = $conn->prepare('INSERT INTO users (email) VALUES (?)');
    $stmt->bind_param('s', $email);
    $stmt->execute();    

    $path = basename(__DIR__).'/../';
    header('location: '. $path);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Adicionar Usuário</h1>

    <form action="<?php echo basename(__DIR__).'/../adicionar.php';?>" method="POST">
        <input type="text" name="email">
        <input type="submit" value="enviar">
    </form>

    <p><a href="<?php echo basename(__DIR__).'/../';?>">voltar</a></p>    
</body>
</html>