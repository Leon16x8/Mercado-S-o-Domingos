<?php
require_once('produtos.php');

$produto1 = new Produto("Pasta de Dente", "2,50", "150");
$produto2 = new Produto("Nutela", "50", "150");

echo $produto1;
echo "<br>".$produto2;
echo $produto1->compra($produto1, 10);
echo $produto2->compra($produto2, 10);

?>