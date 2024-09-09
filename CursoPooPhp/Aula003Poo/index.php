<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibilidade</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        main {
            padding: 10px;
            margin: 10px;
        }

        h1,
        h2,
        h3 {
            color: #0056b3;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 2em;
            border-bottom: 2px solid #0056b3;
            padding-bottom: 10px;
            margin-top: 20px;
        }

        h2 {
            font-size: 1.5em;
            margin-top: 20px;
        }

        h3 {
            font-size: 1.2em;
            margin-top: 15px;
        }

        p {
            margin: 0 0 10px;
            padding: 0;
        }

        ul {
            margin: 0;
            padding: 0 0 0 20px;
        }

        li {
            margin-bottom: 10px;
        }

        strong {
            color: #007bff;
        }

        em {
            color: #555;
        }

        code {
            background-color: #eee;
            padding: 5px;
            border-radius: 3px;
            font-size: 0.9em;
        }

        hr {
            border: 0;
            height: 2px;
            background: #0056b3;
            margin: 20px 0;
        }

        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
    </style>
</head>

<body>
    <main>
        <section>
            <h1>UML: Linguagem de Modelagem Unificada</h1>
            <p>O <strong>UML</strong> (Linguagem de Modelagem Unificada) é uma linguagem padrão usada para visualizar e documentar sistemas de software. Um dos diagramas mais importantes do UML é o <strong>Diagrama de Classes</strong>.</p>

            <h2>O que é o Diagrama de Classes?</h2>
            <p>Representa a estrutura estática de um sistema, mostrando classes, seus atributos e métodos, e os relacionamentos entre elas. Usado para modelar a organização e as relações entre objetos no código, facilitando o planejamento do software.</p>

            <h3>Elementos principais:</h3>
            <ul>
                <li><strong>Classe:</strong> Representa um "molde" para objetos. Exemplo: <em>Pessoa</em>.</li>
                <li><strong>Atributos:</strong> As características da classe (por exemplo, <em>nome</em>, <em>idade</em>).</li>
                <li><strong>Métodos:</strong> As ações que a classe pode realizar (por exemplo, <em>falar()</em>, <em>andar()</em>).</li>
                <li><strong>Relacionamentos:</strong> Mostra como as classes interagem, como herança, associação, agregação, etc.</li>
            </ul>

            <h3>Exemplo simples de diagrama de classes:</h3>
            <p>Classe <strong>Carro</strong> com atributos <em>marca</em>, <em>modelo</em> e métodos <em>acelerar()</em>, <em>frear()</em>.</p>

            <p>O Diagrama de Classes ajuda a visualizar a arquitetura do sistema antes da implementação.</p>


        </section> <!--
       Modificadores de visibilidade:
    
        + publico: todos podem ver e usar o atributo, a classe atual
        e todas as outras classes.
    
        - privado: somente a classe atual pode usar
    
        # protejido: a classe atual e todas as suas subclasses
    
       -->
        <hr>
        <section>
            <h1>Modificadores de Visibilidade</h1>
            <p>Modificadores de visibilidade definem como os atributos e métodos de uma classe podem ser acessados.</p>
            <h2>Tipos de Modificadores:</h2>
            <ul>
                <li><strong>+ Público:</strong> Todos podem ver e usar o atributo ou método, seja a classe atual ou qualquer outra classe.</li>
                <li><strong>- Privado:</strong> Apenas a classe atual pode acessar e usar o atributo ou método.</li>
                <li><strong># Protegido:</strong> A classe atual e todas as suas subclasses podem acessar o atributo ou método.</li>
            </ul>
            <h2>Exemplo:</h2>
            <pre>
            <code>
                class Pessoa {
            public $nome;          // Público: qualquer classe pode acessar
            private $idade;        // Privado: somente a própria classe pode acessar
            protected $cpf;        // Protegido: acesso permitido para a classe e suas subclasses
                }
            </code>
            </pre>
        </section>
    </main>

</body>

</html>