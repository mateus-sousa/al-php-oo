<?php

spl_autoload_register(function($namespaceClasse){
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $namespaceClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR ,$caminhoArquivo);

    $caminhoArquivo .= '.php';
    
    //file_exists verifica se um arquivo existe e retorna true ou false
    if(file_exists($caminhoArquivo)){
        require $caminhoArquivo;
    }
});