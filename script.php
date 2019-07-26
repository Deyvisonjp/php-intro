<?php

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
    echo 'O nome não pode ser vazio';
    return;
}
if (strlen($nome) < 3){
    echo 'O nome deve conter mais de 3 caracteres';
    return;
}
if (strlen($nome) > 40){
    echo '<h3>O nome não pode ser tão grande </h3>';
    return;
}

//VALIDAÇÔES PARA IDADE
if(!is_numeric($idade)){
    echo "<h3>Informe um NUMERAL para idade!</h3>";
    return;
}

/*
if (strlen($nome) < 3) {
    echo 'O nome deve conter mais de 3 caracteres';
    return;
}

if (strlen($nome) > 40) {
    echo "O nome é muito extenso";
    return;
}

if (!is_numeric($idade)) {
    echo "Informe um número para idade";
    return;
}
*/

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'infantil')
            echo "O nadador " . $nome . " compete na categoria " . $categorias[$i];
    }

} else if ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adolescente')
            echo "O nadador " . $nome . " compete na categoria adolescente";
    }

} else {
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'adulto')
            echo "O nadador " . $nome . " compete na categoria adulto";
    }

}
