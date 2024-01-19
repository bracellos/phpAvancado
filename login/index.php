<?php
require_once "../bot.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="logar.php" method="POST">
        <input type="text" name="usuario" placeholder="Usuário">
        <input type="password" name="senha" placeholder="Senha">
        <button type="submit">LOGIN</button>
    </form>
    <?php
    $msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
    echo "<p>{$msg}</p>";
    ?>
</body>
</html>