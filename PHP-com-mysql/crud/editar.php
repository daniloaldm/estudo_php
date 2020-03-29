<?php 

$conn = require ('connection.php');
$id = $_GET['id'] ?? null;
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_POST['email'] ?? null;

    $stmt = $conn->prepare('UPDATE  users SET email = ? WHERE id = ?');
    $stmt->bind_param('si', $email, $id);
    $stmt->execute();    

    $path = basename(__DIR__).'/../';
    header('location: '. $path);

}

$stmt = $conn->prepare('SELECT * FROM users WHERE id = ?');
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
    <h1>Editar Usuário</h1>

    <form action="<?php echo basename(__DIR__).'/../editar.php?id='.$id;?>" method="POST">
        <input type="text" name="email" value="<?php echo $user['email'];?>">
        <input type="submit" value="atualizar">
    </form>

    <p><a href="<?php echo basename(__DIR__).'/../';?>">voltar</a></p>    
</body>
</html>