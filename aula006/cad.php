<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico.png" type="image/x-icon">

</head>

<body>

    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>

        <?php
        /*
        A função var_dump() exibe a estrutura completa de uma variável, 
        incluindo o tipo e valor. Quando usada com $_GET, ela mostra todos 
        os dados que foram passados na URL ou pelo formulário utilizando o método GET.
        */ 

        // $_GET é uma variável especial no PHP chamada superglobal
        // var_dump($_GET) 

        /*
        var_dump($_REQUEST) 
        $_REQUEST é uma superglobal no PHP que contém os dados enviados por meio de
         GET, POST, ou COOKIES. Ela é uma combinação de $_GET, $_POST, e $_COOKIE, 
         permitindo que você acesse os dados enviados independentemente do método usado para a requisição.
        */

        $nome = $_GET['nome'] ?? "Nome não fornecido";
        $sobrenome = $_GET['sobrenome'] ?? "Sobrenome não fornecido";
        echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome! Esté é o meu site!</strong></p>";


        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>

    </main>

</body>

</html>