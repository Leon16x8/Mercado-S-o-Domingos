<?php
    

    class Produto{
        
        protected string $nomedoProduto;
        protected string $valordoProduto;
        protected string $quantidadeEstoque;
        
        public function __construct(string $nomedoProduto, string $valordoProduto, string $quantidadeEstoque){
            $this->nomedoProduto = $nomedoProduto;
            $this->valordoProduto = $valordoProduto;
            $this->quantidadeEstoque = $quantidadeEstoque;
        }

        public function __get(string $nomeDaVariavel){
            return $this->$nomeDaVariavel;
        }//fim do get

        public function __set(string $nomeVariavel, string $valor) : void
        {
            $this->nomeVariavel = $valor;
        }//fim do set

        public function __toString() : string
        {
            return "<br>Produto: ".$this->nomedoProduto."<br>Valor: R$ ".$this->valordoProduto."<br>Estoque: ".$this->quantidadeEstoque;
        }//fim do toString

        public function compra(Produto $produto, int $quantidadeEscolhida){
            if($quantidadeEscolhida <= $produto->quantidadeEstoque){
                echo "<br><br>  |-----COMPRA EFETUADA COM SUCESSO-----|";
                echo "<br><br>Produto: " . $produto->nomedoProduto;
                echo "<br>Valor Total: R$ " . $produto->valordoProduto * $quantidadeEscolhida;
                echo "<br>Quantidade escolhida: ". $quantidadeEscolhida;
                echo "<br><br>Estoque Atualizado: ".$produto->quantidadeEstoque - $quantidadeEscolhida;   
            }else{
                echo "<br><br> |-----A QUANTIDADE ESCOLHIDA NÃO TEM EM NOSSA LOJA-----|";
                return;
            }
            
            if($quantidadeEscolhida >= 10){
                echo "<br><br>GANHOU CUPOM PARA PROXIMA COMPRA DE: R$ ".$produto->valordoProduto / 2;
                return;
            }
        }

    }

?>