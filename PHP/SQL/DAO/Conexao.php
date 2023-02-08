<?php
    namespace PHP\SQL\DAO; 
    
    class Conexao{
        public function Conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','Mercado');
                if($conn){
                    return $conn;
                }
                echo "<br>|----------NÃO DEU BOM CZ!----------|";
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do conectar
    }//FIm da Classe

?>