<?php
    require_once("Endereco.php");
    require_once("Pessoa.php");
    class Funcionario extends Pessoa{
        protected string $sexo;
        protected string $id;
        protected string $salario;
        protected string $cargo;

        public function __construct(
            string $cpf,
            string $nome,
            string $telefone,
            Endereco $endereco,
            string $sexo,
            string $id,
            string $salario,
            string $cargo
        )
        {
            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->sexo      = $sexo;
            $this->id        = $id;
            $this->salario   = $salario;
            $this->cargo     = $cargo;
        }//fim do construtor

        public function __get(string $nomeDaVariavelQueVoceDeclarouLaNoConstrutor){
            return $this->$nomeDaVariavelQueVoceDeclarouLaNoConstrutor;
        }//fim do get

        public function __set(string $nomeVariavel, string $valor) : void
        {
            $this->nomeVariavel = $valor;
        }//fim do set

        public function __toString() : string
        {
            return "<br>Nome: ".$this->nome."<br>CPF: ".$this->cpf."<br>Telefone: ".$this->telefone."<br>Sexo: ".$this->sexo."<br>ID: ".$this->id."<br>Cargo: ".$this->cargo."<br>Salário: R$ ".$this->salario;
        }//fim do toString

        public function calcular() : float
        {
            return $this->salario * 0.07;
        }//fim do método
    }//fim do Funcionario
?>