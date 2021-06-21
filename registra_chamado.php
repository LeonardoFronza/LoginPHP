<?php 
    session_start();

    //Trabalhando no texto
    $titulo     = str_replace('#', '-', $_POST['titulo']);
    $categoria  = str_replace('#', '-', $_POST['categoria']);
    $descricao  = str_replace('#', '-', $_POST['descricao']);
    
    $texto = $_SESSION['id'] . '#' .$titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //Abrindo Arquivo.
    $arquivo = fopen('arquivo.txt','a');
    //Escrevendo o texto
    fwrite($arquivo, $texto);
    //fechando o arquivo
    fclose($arquivo);

    //Voltando 
    header('Location: abrir_chamado.php')
?>