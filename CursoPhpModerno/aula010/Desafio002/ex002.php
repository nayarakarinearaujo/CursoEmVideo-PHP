<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação com Formulários</title>

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico.png" type="image/x-icon">
</head>

<body>

    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <form action="ex002.php" method="get">

            <h3>Aqui será gerado número de 1 a 100 de forma aleatória.</h3>
            <?php
            //Fazer dessa forma apenas para gerar números protegicos criptografados
            // pois esse método é bem lento
            // $numeroAleatorio = random_int(1, 100);
            
            $numeroAleatorio = mt_rand(1, 100);

            echo "<p>Número gerado $numeroAleatorio</p>";
            ?>

            <input type="submit" value="Gerar número aleatório">

        </form>
    </section>
</body>

</html>