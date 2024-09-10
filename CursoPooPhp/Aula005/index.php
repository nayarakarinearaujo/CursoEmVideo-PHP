<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explicação do Código PHP</title>
</head>
<body>
    <!-- <h1>Explicação do Código PHP</h1>
    <p>Este é um exemplo de código PHP que utiliza uma classe para criar e manipular um objeto. O código a seguir faz o seguinte:</p>
    <ul>
        <li>Inclui o arquivo <code>Caneta.php</code> que contém a definição da classe <code>Caneta</code>.</li>
        <li>Criar um novo objeto da classe <code>Caneta</code> e define os atributos usando métodos da classe.</li>
        <li>Mostra as informações da caneta criada.</li>
    </ul>
    
    <h2>Código PHP</h2>
    <pre>
    &lt;?php
    require_once 'Caneta.php';

    // Criando um novo objeto da classe Caneta e declarando os valores
    // dos atributos

    $c1 = new Caneta();
    $c1->setModelo("Bic");

    // Outra forma de fazer
    // $c1->modelo = "Nic";
    $c1->setPonta(0.5);
    // O atributo ponta não pode ser alterado sem o método set

    print "Eu tenho uma caneta {$c1->getModelo()} com ponta {$c1->getPonta()}";

    ?&gt;
    </pre>

    <h2>Detalhes do Código</h2>
    <ul>
        <li><strong>require_once 'Caneta.php';</strong> - Inclui o arquivo PHP que define a classe <code>Caneta</code>.</li>
        <li><strong>$c1 = new Caneta();</strong> - Cria um novo objeto da classe <code>Caneta</code>.</li>
        <li><strong>$c1->setModelo("Bic");</strong> - Define o modelo da caneta usando o método <code>setModelo</code>.</li>
        <li><strong>$c1->setPonta(0.5);</strong> - Define o tamanho da ponta da caneta usando o método <code>setPonta</code>.</li>
        <li><strong>print "Eu tenho uma caneta {$c1->getModelo()} com ponta {$c1->getPonta()}";</strong> - Exibe uma mensagem mostrando o modelo e a ponta da caneta.</li>
    </ul>

    <h2>Saída do Código: Exemplo 2 com construtor</h2> -->

    <p>O código PHP a seguir cria duas instâncias da classe Caneta e as imprime usando <code>print_r()</code>.</p>
    
    <pre>
        <?php
        require_once 'Caneta.php';
        
        $c2 = new Caneta("Bic", "Azul", 0.5);
        $c3 = new Caneta("Pilot", "Preta", 0.1);

        print_r($c2);
        print_r($c3);
        ?>
    </pre>


</body>
</html>
