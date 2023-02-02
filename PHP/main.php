<?php
require_once('produtos.php');
require_once("Endereco.php");
require_once("Funcionario.php");
require_once('Pessoa.php');
require_once("Cliente.php");
require_once("Login.php");

$dt = new Datetime();
setlocale(LC_ALL, 'pt-BR', 'pt-BR.utf-8', 'pt-BR.utf-8', 'portuguese');

$enderecCliente = new Endereco("Avenida Senador Vergueiro","400","Senacão","Centro","São Bernardo do Campo","São Paulo","SP","Brasil","02345000");
$clientCliente= new Cliente("2255555555", "Leonardo", "(11)94569-2198", $enderecCliente);
$enderecFunc = new Endereco("Rua dos Maluco","200","Drogas","Centro","São Bernardo do Campo","São Paulo","SP","Brasil","02745500");
$funcionarioFunc = new Funcionario("22666632545", "Allan Sobrinho", "(11)66666-6666", $enderecFunc, "Masculino", "01", "7000", "Gerente Geral");
$contaFunc = new LoginADM("Allan", "23232", $funcionarioFunc);
$produto1 = new Produto("Pasta de Dente", 2.55, "150");
$produto2 = new Produto("Nutela", 50, "150");

echo "|----------CADASTRO FUNCIONARIO----------|<br>";
echo $funcionarioFunc."<br>";
echo "<br>|----------ENDEREÇO FUNCIONARIO----------|<br><br>".$enderecFunc;
echo "<br><br>|----------CADASTRO CLIENTE----------|<br>";
echo $clientCliente."<br>";
echo "<br>|----------ENDEREÇO CLIENTE----------|<br><br>".$enderecCliente;
echo "<br><BR>|----------VOCÊ GANHOU UM CUPOM POR SE CADASTRAR----------|<br>" . "<br>A CADA 10 COMPRA VOCÊ RECEBE A MEDIA DOS VALORES GASTO PARA NOVA COMPRA NO MERCADO<BR>";
echo $contaFunc->AcessarConta($contaFunc, "Allan", "23232"  );
echo "<br>".$produto1;
echo "<br>".$produto2;
echo $produto1->compra($produto1, 5);
echo "<br><br>Data da Compra: ".strftime('%A, %d/%m/%Y', $dt->getTimestamp());
echo $produto2->compra($produto2, 12);
echo "<br><br>Data da Compra: ".strftime('%A, %d/%m/%Y', $dt->getTimestamp());

?>