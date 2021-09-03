
<?php

require("./funcoes.php");

$funcionarios = lerArquivo("empresaX.json");

if(isset($_GET["buscarFuncionario"])){

    $funcionarios = buscarFuncionario($funcionarios, $_GET["buscarFuncionario"]);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Empresa X</title>
</head>
<body>
    <h1>Funcionários da Empresa X</h1>
    <p>A empresa conta com <?php echo count($funcionarios)?>
    </p>
    <form>
    <input  type="text" value="<?= isset($_GET["buscarFuncionario"]) ? $_GET["buscarFuncionario"] : "" ?>" name="buscarFuncionario" placeholder="Buscar Funcionário">
    <button>Buscar</button>
    </form>
    <table class="table" border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>Sexo</th>
                <th>Endereço IP</th>
                <th>Pais</th>
                <th>Departamento</th>
            </tr>
            <?php
            foreach($funcionarios as $funcionario) :
            ?>
                <tr>
                    <!-- //Acessar objeto em php -->
                    <td><?= $funcionario->id?></td>
                    <td><?= $funcionario->first_name?></td>
                    <td><?= $funcionario->last_name?></td>
                    <td><?= $funcionario->email?></td>
                    <td><?= $funcionario->gender?></td>
                    <td><?= $funcionario->ip_address?></td>
                    <td><?= $funcionario->country?></td>
                    <td><?= $funcionario->department?></td>
                </tr>
            <?php    
            endforeach;
            ?>
        </table>
</body>
</html>