<?php

//recebe o nome do arquivo
function lerArquivo($nomeArquivo){
    //le o arquivo como string
    $arquivo = file_get_contents($nomeArquivo);
//transforma a string em array
    $jsonArray = json_decode($arquivo);

    return $jsonArray;
}

function buscarFuncionario($funcionarios, $nome){

    $funcionariosFiltro = [];    
    foreach($funcionarios as $funcionario){
            if($funcionario->first_name == $nome){
                $funcionariosFiltro[] = $funcionario;
            } 
    
        }
        return $funcionariosFiltro;
    }

    