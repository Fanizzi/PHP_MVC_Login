<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Dados</title>
</head>
<body>
    <form action="/login/save" method="post">
        <fieldset>
            <legend> Alterar Senha </legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome"> Nome: </label>
            <input type="text" name="nome" id="nome" value="<?= $model->nome ?>" />

            <label for="email"> Email: </label>
            <input type="text" name="email" id="email" value="<?= $model->email ?>" /> 

            <label for="senha_atual"> Senha Atual: </label>
            <input type="password" name="senha_atual" id="senha_atual" value="<?= $model->senha_atual ?>" />

            <br><br><br>

            <label for="nova_senha"> Nova Senha: </label>
            <input type="password" name="nova_senha" id="nova_senha" value="<?= $model->nova_senha ?>" />

            <br> <br>

            <button type="submit"> Alterar </button>
        </fieldset>
    </form>
</body>
</html>