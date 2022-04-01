<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        div {
            margin-bottom: 5px;
        }
    </style>
    <title>Login</title>
</head>
<body>
    <form action="HandleLogin.php" method="POST">
        <div>
            <label for="user">Nome: </label>
            <input type="text" name="login" id="user" required>
        </div>
        <div>
            <label for="pwd">Senha: </label>
            <input type="password" name="password" id="pwd" required>
        </div>
        <input type="submit" value="logar">
    </form>
</body>
</html>