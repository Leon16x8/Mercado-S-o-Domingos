<?php
use PHP\SQL\DAO\Atualizar;
use PHP\SQL\DAO\Consultar;
use PHP\SQL\DAO\Excluir;
use PHP\SQL\DAO\Inserir;
use PHP\SQL\DAO\Conexao;

require_once('produtos.php');
require_once("Endereco.php");
require_once("Funcionario.php");
require_once('Pessoa.php');
require_once("Cliente.php");
require_once("Login.php");
require_once('SQL/DAO/Conexao.php');
require_once("SQL/DAO/Inserir.php");
require_once("SQL/DAO/Consultar.php");
require_once("SQL/DAO/Atualizar.php");
require_once("SQL/DAO/Excluir.php");


/*
$dt = new Datetime();
setlocale(LC_ALL, 'pt-BR', 'pt-BR.utf-8', 'pt-BR.utf-8', 'portuguese');

echo "<br><br>Data da Compra: ".strftime('%A, %d/%m/%Y', $dt->getTimestamp());
*/

echo "|----------- Teste de Banco de Dados -----------|<br><br>";
$conexao = new Conexao();//Permissão para acessar os método da classe Conexao
$conexao->Conectar();//Abrindo conexao com o banco de dados

echo "|----------- Cadastrando Funcionario -----------|<br><br>";
$cadastrarfunc = new Inserir();
$cadastrarfunc->CadastrarFunc($conexao, 'funcionario', 'Claudia Pereira Barreto', '(11)96565-5574', 'Rua Adonias Pinto, 223', 'Masculina', 'Pirapikinha', 'Jovem Aprendiz', '200.00');

echo "<br><br>|----------- Cadastrando Cliente -----------|<br><br>";
$cadastrarcliente = new Inserir();
$cadastrarcliente->CadastrarCliente($conexao, 'cliente', '22566654570', 'Dj Azeitona', '(11)96582-8922', 'Rua dos Amigos, 546');

echo "<br><br>|----------- Cadastrando Produto -----------|<br><br>";
$cadastrarProduto = new Inserir();
$cadastrarProduto->CadastrarProduto($conexao, 'produtos', 'Sabonete Liquido Nivea Men', '800', '20.00');

echo "<br><br>|----------- Mercado São Domingos -----------|<br><br>";
$consultarProdutos = new Consultar();
$consultarProdutos->consultarTudo($conexao, 'produtos');




?>