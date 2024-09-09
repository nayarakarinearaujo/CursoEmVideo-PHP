<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Manipulação de Strings</title>

    <style>
       body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
 
        h1 {
            color: #333;
            border-bottom: 2px solid #666;
            padding-bottom: 10px;
        }

        h2 {
            color: #555;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }

        h3 {
            text-decoration: underline;
            color: #666;
        }

        ul {
            list-style-type: none;
            padding-left: 0;
        }

        ul li {
            margin-bottom: 5px;
        }

        p {
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <h1>Manipulação de Strings</h1>

    <?php

    //! STRINGS EM PHP
    /*
    Simbolo de concatenação em php é ponto .
    */

    //* Interpolação de strings
    echo "<h2>Interpolação de strings</h2>";

    $nome = "Nayara";
    $sobrenome = "Araújo";

    echo "Olá $nome $sobrenome!😀 <br> ";

    //* Concatenando com constante
    echo "<h2>Concatenando com constante</h2>";

    const ESTADO = "São Paulo";

    echo "Moro no estado de " . ESTADO . "<br>";

    echo "Estamos no ano de " . date('Y') . "<br>";

    //* Escape sequences
    echo "<h2>Escape sequences</h2>";
    echo "<ul>
    <li>\\n Nova linha</li>
    <li>\\t Tabulação horizontal</li>
    <li>\\\\ Barra invertida</li>
    <li>\\\" Aspas duplas</li>
    <li>\\' Aspas simples</li>
    <li>\\\$ Cifrão</li>
    </ul>";

    echo "<p>Exemplo de novas linhas:\nLinha 1\nLinha 2\n</p>";
    echo "<p>Exemplo de tabulação:\tColuna1\tColuna2\n</p>";
    echo "<p>Exemplo de barra invertida: C:\\Program Files\n</p>";
    echo "<p>Exemplo de aspas duplas: \"Texto\"\n</p>";
    echo "<p>Exemplo de aspas simples: \'Texto\'\n</p>";
    echo "<p>Exemplo de cifrão: \\n</p>";

    echo "<h3>Exemplo no código</h3>";
    $sobrenome = "Araújo"; // Atribui "Araújo" à variável $sobrenome
    $apelido = "Naty";     // Atribui "Naty" à variável $apelido

    // Exibe o nome, apelido entre aspas e sobrenome
    // O apelido está entre aspas usando a técnica de escape com \", sempre usar aspas duplas
    echo "$nome \"$apelido\" $sobrenome <br>";
    // Saída será algo como: Nome "Naty" Araújo

    //* tabulação
    echo "<h2>Tabulação</h2>";
    echo "<p>Não funciona porque está no html</p>";

    echo "$nome \t\t \"$apelido\" \t\t$sobrenome <br>";


    //* Sintaxe Heredoc
    echo "<h2>Sintaxe Heredoc</h2>";
    echo "<p>Heredoc: Interpola variáveis.</p>";


    $curso = "Engenharia de Software";
    $ano = "2024";

    echo <<< FRASE
    Estou estudando 
    $curso em $ano
    <br>
    FRASE;

    //* Sintaxe Nowdoc
    echo "<h2>Sintaxe Nowdoc</h2>";
    echo "<p>Nowdoc: Não interpola variáveis (trata tudo como texto literal)</p>";

    $curso = "Engenharia de Software";
    $ano = "2024";

    echo <<< 'FRASE'
    Estou estudando 
    $curso em $ano
    FRASE;


    ?>

</body>

</html>