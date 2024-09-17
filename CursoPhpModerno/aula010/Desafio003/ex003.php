<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<!--5.51 -->

<section>
        <h1>Trabalhando com números aleatórios</h1>
        
        <form action="ex002.php" method="get">

            <?php
            
            $cotacao = 5.51;

            $real = 1000;

            $dolar = $real / $cotacao;

            echo "<p>Seus R\$ $real equivalem a US\$ $dolar.</p>"

            ?>

            <input type="submit" value="Gerar número aleatório">

        </form>
    </section>
</body>
</html>