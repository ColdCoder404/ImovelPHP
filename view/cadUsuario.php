<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuario</title>
</head>

<body>
    <form name="cadUsuario" id="cadUsuario" method="post">
        Login:<input type="text" name="login" id="login"><br />
        Senha:<input type="password" name="senha1" id="senha1"><br />
        Confirmação de senha:<input type="password" name="senha2" id="senha2"><br />
        <select name="permissao" id="permissao">
            <option value="0"></option>
            <option value="A">Administrador</option>
            <option value="C">Comum</option>
        </select><br><br>
        <input type="submit" value="Salvar" name="btnSalvar" id="btnSalvar">
    </form>
</body>
<?php 
    if(isset($_POST['btnSalvar'])){
        
        require_once '../controller/UsuarioController.php';
        //chama uma função PHP que permite informar a classe e o método que será acionado
        call_user_func(array('UsuarioController','salvar'));

    }
?>
</html>