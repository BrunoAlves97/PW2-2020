<?php

    echo "Olá mundo";
    echo "<br><br>";
    $num = 10; 
    $num2 = 20;

    $resultado = $num + $num2; //sinais aritiméticos em php
    echo $resultado; 
    echo "<br><br>"; 
    
    $resultado = $num - $num2; 
    echo $resultado;
    echo "<br><br>";

    $resultado = $num * $num2;
    echo $resultado;
    echo "<br><br>";

    $resultado = $num / $num2;  
    echo $resultado;
    echo "<br><br>";

    $resultado = $num . $num2; //concatenar em PHP " . " é utilizado o ponto.
    echo $resultado;


    //os operadores relacionais são os mesmos ((  <  >  >=  <=  ==  != ))



    echo "<br><br>";
    $numero = 100;

    if($numero > 100)
    {
        echo "<center><h1>Esse numero é maior do que 100! </h1></center>";
    } 
    else if($numero == 100)
    {
        echo "<center><h1>O número é igual a 100!</h1></center>";
    }
    else
    {
        echo "<center><h1>O número é menor do que 100!</h1></center>";
    }

    // outro teste

    echo "<br><br>";
    $num = 10;

   for($x = 0; $x <= 10; $x++)  // tabuada
    {
        echo "<p>" . $num . " X " . $x . " = " . $num * $x . "</p>";
    }

    // outro teste

    echo "<br><br>";
    for($x = 0; $x < 101; $x++) // primeiro parametro é declarado uma variavel para inicio do loop, a segunda é a condição de parada TRUE, a terceira é o incremento no caso 1 em 1.
    {
        echo $x . " ";
    }

    // outro teste

    echo "<br><br>";
    $x = 0;

    while($x < 101) // primeiro é declarado a variável, após isso é feito a impressão do resultado adicionando com x++.
    {
        echo $x . " ";
        $x++;      
    }

    // outro teste

    echo "<br><br>";
    $variavel = 1;

    switch($variavel){   // testa o valor da variavel com os case's abaixo, caso não seja nenhum dos case's ele cai em "default".
        case 1:
            echo "Numero é " . $variavel;
            break;
        case 2:
            echo "Numero é " . $variavel;
            break;
        case 3:
            echo "Numero é " . $variavel;
            break;
        default:
            echo "Inválido";
            break;
    }

    // outro teste

    echo "<br><br>";
    $vetor = array ("teste1","teste2","teste3","teste4","teste5", 1);

    var_dump($vetor); //  valor retornado   ((array(6) { [0]=> string(6) "teste1")) , ele fala que o array tem 6 posições, na posição "[0]" ele fala que é um tipo string com 6 caracteres "teste1", ele tambem permite colocar variaveis de tipo difente como mostrado na posição 5 que é um tipo inteiro e não caracter como os do início [5]=> int(1). 

    // outro teste
        
    echo "<br><br>";
    $vetor2 = array( //
        "v1" => 10,
        "v2" => 20,
        "v3" => 30,
        "v4" => 40,
        "v5" => 50,
    );

    var_dump($vetor2);

    // outro teste
    echo "<br><br>";


    echo $vetor2["v1"] + $vetor2["v5"];

    // outro teste
    echo "<br><br>";

    
    $vetor2 ["v3"] = "Teste"; // a variável é declarada com tipo INT, e foi solicitado a atribuição de um valor tipo Caracter.
    echo $vetor2 ["v3"];
?>