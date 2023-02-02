<?php
    require_once("Endereco.php");
    require_once("Pessoa.php");
    class Cliente extends Pessoa{

        public function __construct(
            string $cpf, 
            string $nome, 
            string $telefone, 
            Endereco $endereco
            )
        {
            parent::__construct($cpf, $nome, $telefone, $endereco);//Chame a classe Pessoa
        }//fim do construtor

        public function __get(string $atributo) : string
        {
            return $atributo;
        }

        public function __set(string $atributo, string $valor) : void
        {
            $this->$atributo = $valor;
        }

        public function __toString() : string
        {
        return "<br>CPF: " . $this->cpf . "<br>Nome: " . $this->nome . "<br>Telefone: " . $this->telefone;
        }//fim do toString
    }//fim da classe
?>
