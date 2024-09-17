
<?php

$inicio = date("m-d-Y", strtotime("-7 days"));
$fim = date("m-d-Y");

$inicio = urlencode($inicio);
$fim = urlencode($fim);


$url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='{$inicio}'&@dataFinalCotacao='{$fim}'&\$top=1&\$orderby=dataHoraCotacao%20desc&\$format=json&\$select=cotacaoCompra,dataHoraCotacao";

    $dados = file_get_contents($url);

    if($dados === false) {
        echo 'Erro ao acessar URL';
        exit;
    }

    $dados = json_decode($dados, true);

    if($dados === null) {
        echo 'Erro ao decodificar JSON.';
        exit;
    }


    //Mostrar estruta de variável
    echo '<pre>';
    var_dump($dados);
    echo '<pre>';

    $cotacao = $dados['value'][0]['cotacaoCompra'];

    echo "a cotação foi {$cotacao}";

?>
   
