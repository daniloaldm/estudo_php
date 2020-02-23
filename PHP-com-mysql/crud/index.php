<?php 
$conn = require ('connection.php');

$stmt = $conn->prepare('SELECT * FROM users');
$stmt->execute();
$result = $stmt->get_result();
$users = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border: 2px solid black;">
        <thead>
            <tr>
                <th style="border: 2px solid black; text-align: center;">#</th>
                <th style="border: 2px solid black; text-align: center;">email</th>
                <th style="border: 2px solid black; text-align: center;">visualizar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $key=>$user):?>
            <tr>
                <td style="border: 2px solid black; text-align: center;"><?php echo $user['id'];?></td>
                <td style="border: 2px solid black; text-align: center;"><?php echo $user['email'];?></td>
                <td style="border: 2px solid black; text-align: center;">
                    <a href="<?php echo basename(__DIR__).'/../ver.php?id='.$user['id'];?>">ver</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <p><a href="<?php echo basename(__DIR__).'/../adicionar.php';?>">adicionar</a></p>
</body>
</html>