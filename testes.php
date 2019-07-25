<?php 

    /*Exemplos de arrays 
    ---------------------------------------------------------*/
    echo(" <hr/> <h3> Exemplos com arrays </h3> ");
    $categorias = array('infantil', 'adolescentes','adulto');
    print_r($categorias);

    echo("<br/>");

    $array = array('Gol', 'Pálio', 'Celta', 'Ka');
    $array [] = 'Vectra';
    print_r($array);

    echo("<br/>");

    /*Exemplos básicos 
    ---------------------------------------------------------*/
    //SOMA
    $variavel = [];
    $a=2;
    $b=3;
    $x = $b + $a;
    echo(" $b + $a = ");
    print_r($x);

    echo("<hr/><h3> Mostrar tipo das variaveis </h3>");
    //Imprimir tipos de variaveis
    $nome = 'Deyvison'; $num = 5; $valor = 55.7;
    var_dump($nome); echo(' || ');
    var_dump($num); echo(' || ');
    var_dump($valor); echo(' || ');

    //Condicionais
    echo("<hr/><h3> Condicionais </h3>");
    $idade = 68;

    if ($idade >= 0 && $idade <= 12){
        echo 'Infantil';
    }
    else if($idade >= 13 && $idade <= 18){
        echo 'Adolescente';
    }
    else {
        echo 'Adulto';
    }

    //Laços de repetição
    echo("<hr/><h3> Repetição </h3>");
    echo '<h3>As categoria existentes são: </h3>';
    for ($i = 0; $i < count($categorias); $i++) {
        echo $categorias[$i] . '<br/>';
    }


?>