<?php

session_start();

$catetorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

/*
var_dump($nome);
var_dump($idade);
*/

//VALIDAÇÔES PARA NOME
if (empty($nome)) {
    $_SESSION['mensagem-de-erro'] = '<h3 style="color:red"> O nome não pode ser vazio, por favor preencha-o novamente<h3>';
    header('location: index.php');
    return;
} else if (strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] = '<h3 style="color:red"> O nome deve conter mais de 3 caracteres<h3>';
    header('location: index.php');
    return;
} else if(strlen($nome) > 40){
    $_SESSION['mensagem-de-erro'] = '<h3 style="color:red"> O nome não pode ser tão grande </h3>';
    header('location: index.php');
    return;
}

//VALIDAÇÕES PARA IDADE
if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = '<h3 style="color:red">Informe um NUMERAL para idade!</h3>';
    header('location: index.php');
    return;
}

//CLASSIFICAÇÃO DA CATEGORIA
if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'infantil') {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " compete na categoria " . $categorias[$i];
            header('location: index.php');
            return;
        }            
    }

} else if ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'adolescente') {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " compete na categoria " . $categorias[$i];
            header('location: index.php');
            return;
        }            
    }

} else {
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'adulto') {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " compete na categoria " . $categorias[$i];
            header('location: index.php');
            return;
        }            
    }

}
