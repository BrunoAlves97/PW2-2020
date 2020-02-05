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
    echo "<br><br><br><br><br><br>";


    //os operadores relacionais são os mesmos ((  <  >  >=  <=  ==  != ))


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

    echo "<br><br><br><br>";

   for($i = 1; $i = 100; $i++)
    {
        echo $i;
    }

?>