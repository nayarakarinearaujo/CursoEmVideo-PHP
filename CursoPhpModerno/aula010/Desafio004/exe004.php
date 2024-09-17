<!DOCTYPE html>
<html lang="pt-br">

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

            //* Cotação vinda da API do Banco do brasil
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $inicio = urlencode($inicio);
            $fim = urlencode($fim);


            $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='{$inicio}'&@dataFinalCotacao='{$fim}'&\$top=1&\$orderby=dataHoraCotacao%20desc&\$format=json&\$select=cotacaoCompra,dataHoraCotacao";

            $dados = file_get_contents($url);

            if ($dados === false) {
                echo 'Erro ao acessar URL';
                exit;
            }

            $dados = json_decode($dados, true);

            if ($dados === null) {
                echo 'Erro ao decodificar JSON.';
                exit;
            }

            $cotacao = $dados['value'][0]['cotacaoCompra'];

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