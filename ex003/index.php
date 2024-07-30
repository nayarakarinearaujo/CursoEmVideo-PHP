<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 003</title>
</head>
<body>

<?php 

// $ representa variável
//Variável pode ser alterada
$nome = "Nayara";
$sobrenome = "Araújo";

//Constante sempre com letras maiúsculas
const PAIS = "Brasil";

//PAIS = "E.U.A"; //Constante não pode ser modificada

//Interpolação de constante é com ponto
echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;

//Regras para nomes identificadores
/* 
1 - Vaiáveis sempre comçea com o símbolo $

2 - O segunda caractere pode ser letra ou o símbolo _

3 - Aceita caracteres [a-z], [A-Z], [0-9], e [ _ ]

4 - Aceita caracteres da tabela ASCII a partir de 128

5 - Aceita caracteres acentuados como á, õ, ç

6 - A linguagem é case sensitive em relação aos nomes

7 - Nomes especiais como $this não podem ser usados

/* Recomendaçõs para dar nomes

1 - Tente dar nomes claros e de fácil identificação

2 - Evite nomes muito curtos ou muito longos

3 - Defina um padrão e siga em todo o projeto

4 - Para variáveis, dÊ preferencias a letras minúsculas

5 - Para constantes, dê preferencia a letras maiúsculas

6 - Use camelCase para métodos e atributos

7 - Use SNAKE_CASE para nomear constantes

*/


?>

</body>
</html>