<?php
namespace PHP\SQL\DAO;

require_once("Conexao.php");

use PHP\SQL\DAO\Conexao;

class Atualizar{
    public function atualizar(Conexao $conexao, string $campo, string $novoDado, string $codigo, string $nomeDaTabela){
        
        try{
            $conn = $conexao->Conectar();
            $sql = "update $nomeDaTabela set $campo = '$novoDado' where codigo = '$codigo'";
            $result = mysqli_query($conn, $sql);

            mysqli_close($conn);

            if($result){
                echo "<br><br>|------------Atualizado com Sucesso------------|";
                return;
            }
            echo "<br><br>|------------Impossivel Atualizar------------|";
 
        }catch(Except $erro){
            echo $erro;
        }
    }
}
?>