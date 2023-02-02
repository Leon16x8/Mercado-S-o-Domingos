<?php
    class Endereco{
        private string $logradouro;
        private string $numero;
        private string $complemento;
        private string $bairro;
        private string $cidade;
        private string $estado;
        private string $UF;
        private string $pais;
        private string $CEP;

        //Método construtor
        public function __construct(
            string $logradouro, 
            string $numero, 
            string $complemento, 
            string $bairro,
            string $cidade,
            string $estado,
            string $UF,
            string $pais,
            string $CEP)
        {
            $this->logradouro  = $logradouro;
            $this->numero      = $numero;
            $this->complemento = $complemento;
            $this->bairro      = $bairro;
            $this->cidade      = $cidade;
            $this->estado      = $estado;
            $this->UF          = $UF;
            $this->pais        = $pais;
            $this->CEP         = $CEP;
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
            return "Longradouro: ".$this->logradouro."<br>Numero: ".$this->numero."<br>Complemento: ".$this->complemento.
            "<br>Bairro: ".$this->bairro."<br>Cidade: ".$this->cidade."<br>Estado: ".$this->estado."<br>UF: ".$this->UF."<br>Pais: ".$this->pais."<br>CEP: ".$this->CEP;
        }//fim do toString

    }//fim da classe endereço
?>