<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="/login/auth" method="post">
        <label>E-mail:</label>
        <input name="email" type="text" />
    
        <label>Senha:</label>
        <input name="senha" type="password" />
    
        <button type="submit">Entrar</button>
    </form>
</body>
</html>