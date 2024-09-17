<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor de moedas</h1>
        <div id="din">
            <?php
            $cotacao = 5.51;
            $real = $_REQUEST["din"] ?? 0;
            $dolar = $real / $cotacao;
            // Criar formatadores para cada moeda
            $formatterReal = new NumberFormatter('pt_BR', NumberFormatter::CURRENCY);
            $formatterDolar = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
            // Formatando os valores
            $realFormatado = $formatterReal->formatCurrency($real, 'BRL');
            $dolarFormatado = $formatterDolar->formatCurrency($dolar, 'USD');
            // Exibindo os valores formatados
            echo "<p>Seus $realFormatado equivalem a <strong>$dolarFormatado</strong>.</p>";
            ?>
        </div>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>

</html>