<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos Especiais em PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }

        h1,
        h2 {
            color: #333;
        }

        pre {
            background: #f4f4f4;
            border-left: 3px solid #ccc;
            padding: 10px;
            overflow: auto;
        }

        code {
            background: #e2e2e2;
            padding: 2px 5px;
            border-radius: 4px;
        }
    </style>
</head>

<body>

    <!-- 
    Métodos get e set você da acesso ao atributo sem dar 
    acesso direto ao atributo.
    
    -->


    <h1>Métodos Especiais (Mágicos) em PHP</h1>
    <p>Para situações especiais na programação orientada a objetos, em PHP, os métodos especiais são conhecidos como métodos mágicos. Aqui está um resumo:</p>

    <h2>__construct()</h2>
    <p><strong>O que é?</strong> Método construtor.<br>
        <strong>Quando é usado?</strong> Chamado automaticamente quando um objeto da classe é criado.<br>
        <strong>Propósito:</strong> Inicializar propriedades e configurar o objeto.
    </p>
    <pre><code>
class Exemplo {
    public function __construct() {
        echo "Objeto criado!";
    }
}
$obj = new Exemplo(); // Saída: Objeto criado!
    </code></pre>

    <h2>__destruct()</h2>
    <p><strong>O que é?</strong> Método destruidor.<br>
        <strong>Quando é usado?</strong> Chamado automaticamente quando um objeto é destruído ou sai do escopo.<br>
        <strong>Propósito:</strong> Liberar recursos ou realizar limpeza.
    </p>
    <pre><code>
class Exemplo {
    public function __destruct() {
        echo "Objeto destruído!";
    }
}
$obj = new Exemplo();
unset($obj); // Saída: Objeto destruído!
    </code></pre>

    <h2>__get($nome)</h2>
    <p><strong>O que é?</strong> Método para acesso a propriedades inacessíveis.<br>
        <strong>Quando é usado?</strong> Quando uma propriedade inacessível ou inexistente é acessada.<br>
        <strong>Propósito:</strong> Permitir o acesso a propriedades não definidas diretamente.
    </p>
    <pre><code>
class Exemplo {
    private $dados = ['nome' => 'João'];

    public function __get($nome) {
        return $this->dados[$nome] ?? 'Propriedade não encontrada';
    }
}
$obj = new Exemplo();
echo $obj->nome; // Saída: João
    </code></pre>

    <h2>__set($nome, $valor)</h2>
    <p><strong>O que é?</strong> Método para configuração de propriedades inacessíveis.<br>
        <strong>Quando é usado?</strong> Quando uma propriedade inacessível ou inexistente é definida.<br>
        <strong>Propósito:</strong> Permitir a definição de propriedades não definidas diretamente.
    </p>
    <pre><code>
class Exemplo {
    private $dados = [];

    public function __set($nome, $valor) {
        $this->dados[$nome] = $valor;
    }
}
$obj = new Exemplo();
$obj->idade = 30;
    </code></pre>

    <h2>__call($nome, $argumentos)</h2>
    <p><strong>O que é?</strong> Método para chamadas a métodos inacessíveis.<br>
        <strong>Quando é usado?</strong> Quando um método inacessível ou inexistente é chamado.<br>
        <strong>Propósito:</strong> Manipular chamadas a métodos que não existem.
    </p>
    <pre><code>
class Exemplo {
    public function __call($nome, $argumentos) {
        echo "Método $nome chamado com argumentos: " . implode(', ', $argumentos);
    }
}
$obj = new Exemplo();
$obj->teste('arg1', 'arg2'); // Saída: Método teste chamado com argumentos: arg1, arg2
    </code></pre>

    <h2>__toString()</h2>
    <p><strong>O que é?</strong> Método para conversão de objeto em string.<br>
        <strong>Quando é usado?</strong> Quando o objeto é tratado como uma string.<br>
        <strong>Propósito:</strong> Definir a representação em string do objeto.
    </p>
    <pre><code>
class Exemplo {
    public function __toString() {
        return "Representação do objeto";
    }
}
$obj = new Exemplo();
echo $obj; // Saída: Representação do objeto
    </code></pre>

    <h2>__invoke()</h2>
    <p><strong>O que é?</strong> Método para tornar o objeto invocável.<br>
        <strong>Quando é usado?</strong> Quando o objeto é chamado como uma função.<br>
        <strong>Propósito:</strong> Permitir que o objeto seja chamado como uma função.
    </p>
    <pre><code>
class Exemplo {
    public function __invoke($param) {
        echo "Método __invoke chamado com argumento: $param";
    }
}
$obj = new Exemplo();
$obj('teste'); // Saída: Método __invoke chamado com argumento: teste
    </code></pre>

    <h2>Resumo</h2>
    <p>Métodos especiais em PHP são usados para gerenciar a criação, destruição, acesso e manipulação de propriedades e métodos de objetos de forma dinâmica e automática. Eles fornecem um controle avançado sobre como um objeto se comporta em diferentes situações.</p>
</body>

</html>