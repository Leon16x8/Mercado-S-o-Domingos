<?php
require_once("Cliente.php");
require_once("Funcionario.php");
class LoginADM{
    private string $login;
    private string $senha;
    private Funcionario $func;

    public function __construct(string $login, string $senha, Funcionario $func){
            $this->login = $login;
            $this->senha = $senha;
            $this->func = $func;
        }

        public function getLogin() : string{
            return $this->login;
        }
        public function getSenha() : string{
            return $this->senha;
        }

        public function setLogin(string $login) : void{
            $this->login = $login;
        }
        public function setSenha(string $senha) : void{
            $this->senha = $senha;
        }

        public function AcessarConta(loginADM $loginADM, string $login, string $senha)
        {           
            if ($loginADM->getLogin() == $login && $loginADM->getSenha() == $senha)
            {
                echo("<br>(LOGADO COM SUCESSO)");
            echo ("<br><br>|----------PRODUTOS----------|");
                return;
            }   
            echo("<br><br>Login e senha incorretos, digite corretamente.");       
        }

}
?>