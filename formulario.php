<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="" method= "POST"> <!-- post esconde as informações na barra do navegador-->
        <label for="num1">Valor 1:</label>
        <br>
        <input type="text" placeholder="Digite o primeiro valor" name="num1" id="num1">
        <br><br>
        <label for="num2">Valor 2:</label>
        <br>
        <input type="text" placeholder="Digite o segundo valor" name="Valor 2" id="num2">
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php

        $num1 = $_POST['num1'];
        $num1 = $_POST['num2'];

    ?>


</body>
</html>

