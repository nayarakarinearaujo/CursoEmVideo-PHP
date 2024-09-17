<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!--5.51 -->

    <section>
        <h1>Trabalhando com números aleatórios</h1>

        <form action="ex002.php" method="get">

            <?php

            $cotacao = 5.51;
            $real = 1000;

            $dolar = $real / $cotacao;

            // Formatar os valores
            //$realFormatado = number_format($real, 2, ',', '.'); // Formato brasileiro
            //$dolarFormatado = number_format($dolar, 2, '.', ','); // Formato americano

            //echo "<p>Seus R\$ $realFormatado equivalem a US\$ $dolarFormatado.</p>";

            //* Outra forma de fazer

            // Criar formatadores para cada moeda
            $formatterReal = new NumberFormatter('pt_BR', NumberFormatter::CURRENCY);
            $formatterDolar = new NumberFormatter('en_US', NumberFormatter::CURRENCY);

            // Formatando os valores
            $realFormatado = $formatterReal->formatCurrency($real, 'BRL');
            $dolarFormatado = $formatterDolar->formatCurrency($dolar, 'USD');

            // Exibindo os valores formatados
            echo "<p>Seus $realFormatado equivalem a $dolarFormatado.</p>";

            ?>


        </form>
    </section>
</body>

</html>