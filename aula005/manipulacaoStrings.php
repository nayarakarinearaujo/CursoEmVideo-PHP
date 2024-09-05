<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
</head>

<body>
    <h1>Manipulação de Strings</h1>

    <?php

    //! STRINGS EM PHP
    /*
    Simbolo de concatenação em php é ponto .
    */

    //* Interpolação de strings

    $nome = "Nayara";
    $sobrenome = "Araújo";

    echo "Olá $nome $sobrenome!😀 <br> ";

    //* Concatenando com constante

    const ESTADO = "São Paulo";

    echo "Moro no estado de " . ESTADO . "<br>";

    echo "Estamos no ano de " . date('Y') . "<br>";

    //* Escape sequences
    /*
    /n Nova linha
    /t Tabulação horizontal
    \\ Barra invertiva
    $/
    */

    $sobrenome = "Araújo"; // Atribui "Araújo" à variável $sobrenome
    $apelido = "Naty";     // Atribui "Naty" à variável $apelido

    // Exibe o nome, apelido entre aspas e sobrenome
    // O apelido está entre aspas usando a técnica de escape com \", sempre usar aspas duplas
    echo "$nome \"$apelido\" $sobrenome <br>";
    // Saída será algo como: Nome "Naty" Araújo

    //* tabulação
    //Não funciona porque está no html
    echo "$nome \t\t \"$apelido\" \t\t$sobrenome <br>";


    //* Sintaxe Heredoc
    //Heredoc: Interpola variáveis.
    
    $curso = "Engenharia de Software";
    $ano = "2024";

    echo <<< FRASE
    Estou estudando 
    $curso em $ano
    <br>
    FRASE;

    //* Sintaxe Nowdoc
    //Nowdoc: Não interpola variáveis (trata tudo como texto literal).

    $curso = "Engenharia de Software";
    $ano = "2024";
    
    echo <<< 'FRASE'
    Estou estudando 
    $curso em $ano
    FRASE;
    

    ?>

</body>

</html>