<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>

<body>

    <!-- Tipos Primitivos Escalares:

    $sobrenome = "Silva" - É uma string

    $idade = 31 - É int ou integer

    $peso = 70.5 - É double, float ou real (Real deixou de existir apartir da versão 7.4)

    $casado = true - É boolean ou bool
 -->

    <!-- Outras Categorias de tipos primitivos:
    
    compostos: array, object

    especiais: null, resource, callabe, mixed
 -->

    <h1>Teste de tipos primitivos</h1>

    <?php
    // 0x = hexadecimal  
    //0b = binário  
    //0 = Octal
    // $num = 010;
    // echo "O valor da variável é $num ";


    // $v = 300;
    // var_dump($v);

    $num = 3e2; // 3 x 10(2)
    // echo "O valor é $num"

    //Array
    $vet = [6, 2, 9 ,3 ,5];
    var_dump($vet);

    ?>

</body>

</html>