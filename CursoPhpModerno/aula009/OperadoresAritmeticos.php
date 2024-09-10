<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos em PHP</title>
</head>
<body>
    <h1>Operadores Aritméticos</h1>
    
    <h2>1. Adição (+)</h2>
    <p>Utilizado para somar dois valores. Exemplo: 5 + 3 resulta em 8.</p>

    <h2>2. Subtração (-)</h2>
    <p>Utilizado para subtrair um valor de outro. Exemplo: 10 - 6 resulta em 4.</p>

    <h2>3. Multiplicação (*)</h2>
    <p>Utilizado para multiplicar dois valores. Exemplo: 4 * 2 resulta em 8.</p>

    <h2>4. Divisão (/)</h2>
    <p>Utilizado para dividir um valor por outro. Exemplo: 8 / 2 resulta em 4.</p>

    <h2>5. Módulo (%)</h2>
    <p>Retorna o resto de uma divisão. Exemplo: 10 % 3 resulta em 1, pois 10 / 3 é 3 com resto 1.</p>

    <h2>6. Exponenciação (**)</h2>
    <p>Eleva um valor à potência de outro. Exemplo: 3 ** 2 resulta em 9 (3 elevado a 2).</p>

    <h2>7. Incremento (++):</h2>
    <p>Adiciona 1 ao valor da variável. Exemplo: i++ significa i = i + 1.</p>

    <h2>8. Decremento (--):</h2>
    <p>Subtrai 1 do valor da variável. Exemplo: i-- significa i = i - 1.</p>

    <h2>Exemplo em PHP:</h2>
    <pre>
    <?php
    $a = 5;
    $b = 3;

    echo "Adição: " . ($a + $b) . "<br>"; // Resultado: 8 (adição)
    echo "Subtração: " . ($a - $b) . "<br>"; // Resultado: 2 (subtração)
    echo "Multiplicação: " . ($a * $b) . "<br>"; // Resultado: 15 (multiplicação)
    echo "Divisão: " . ($a / $b) . "<br>"; // Resultado: 1.6667 (divisão)
    echo "Módulo: " . ($a % $b) . "<br>"; // Resultado: 2 (módulo)
    echo "Exponenciação: " . ($a ** $b) . "<br>"; // Resultado: 125 (exponenciação)
    ?>
    </pre>
</body>
</html>
