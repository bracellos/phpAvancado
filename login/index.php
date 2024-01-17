<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="../sqlInjection.php" method="POST">
        <input type="text" name="usuario" placeholder="Usuário">
        <input type="password" name="senha" placeholder="Senha">
        <button type="submit">LOGIN</button>
    </form>
</body>
</html>