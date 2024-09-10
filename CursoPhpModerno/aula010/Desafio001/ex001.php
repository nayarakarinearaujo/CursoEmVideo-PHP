<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>



    <section>

        <h1>Resultado Final</h1>


        <!-- 
    //$nome = $_GET['nome'] ?? "Nome não fornecido"; -->

        <?php

        $num = $_GET['number'] ?? "Número não fornecido";

        $antecessor = $num - 1;
        $sucessor = $num + 1;

        echo "<p>O número escolhido foi <strong>$num</strong></br></p>";
        echo "<p>O seu antecessor é: <strong>$antecessor</strong><br></p> ";
        echo "<p>O seu sucessor é: <strong>$sucessor</strong><br></p>";

        ?>
        <input type="button" value=" ⬅ Voltar" onclick="history.go(-1)">
    </section>


</body>

</html>