<?php 

$categorias = array('infantil', 'adolescentes','adulto');
    print_r($categorias);

    echo("<br/>");

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);
header('location: index.php');

?>
