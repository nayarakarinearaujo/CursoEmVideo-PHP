<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 02 - POO</title>
</head>
<body>

<?php
// Incluir a definição da classe.
require_once 'Caneta.php';

// Criar uma instância da classe Caneta.
echo "<h1>Objeto 1</h1>";
$c1 = new Caneta;
$c1->modelo = "Bic";
$c1->cor = "Azul";
$c1->ponta = 0.5;
$c1->carga = 100;
$c1->tampada = false;

//Chamando o método tampar
// $c1->tampar();

//Chamando o método rabiscar do objeto c1 instanciado da classe caneta
// $c1->rabiscar();
print_r($c1);

echo "<br/>";

echo "<h1>Objeto 2</h1>";
$c2 = new Caneta;
$c2->modelo = "Bic";
$c2->cor = "Vermelha";
$c2->ponta = 1.0;
$c2->carga = 50;
$c2->tampada = true;

print_r($c2);

?>

</body>
</html>
