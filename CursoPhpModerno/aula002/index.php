<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>Exemplo de PHP</h1>

    <?php
    date_default_timezone_set("America/Sao_Paulo"); //GMT -3 time zone de são paulo
    echo "Hoje é dia " . date("d/M/Y"); //concatenação usa o ponto
    echo " e a hora atual é " . date("G:i:s T");
    ?>


</body>

</html>