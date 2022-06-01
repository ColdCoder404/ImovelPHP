<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Imóveis</title>
</head>

<body>
    <form name="cadImoveis" id="cadImoveis" method="post">
        Id:<input type="text" name="id" id="id"><br />
        Descrição:<input type="text" name="desc" id="desc"><br />
        Foto:<input type="file" name="foto" id="foto"><br />
        Valor:<input type="text" name="valor" id="valor"><br />
        Tipo:<select name="tipo" id="tipo">
            <option value="0"></option>
            <option value="A">Casa Térrea</option>
            <option value="B">Sobrado</option>
            <option value="C">Apartamento</option>
        </select><br><br>
        <input type="submit" value="Salvar" name="btnSalvar" id="btnSalvar">
    </form>
</body>
<?php 
    if(isset($_POST['btnSalvar'])){
        
        require_once '../controller/ImovelController.php';
        call_user_func(array('ImovelController','salvar'));

    }
?>
</html>