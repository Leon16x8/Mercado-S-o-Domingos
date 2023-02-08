<?php
    namespace PHP\SQL\DAO;

    require_once("Conexao.php");

    use PHP\SQL\DAO\Conexao;
    
    class Inserir{
        public function CadastrarFunc(Conexao $conexao, string $nomeDaTabela, string $nome, string $telefone, string $endereco, string $sexo, string $bairro, string $funcao, int $salario){
            try{
                $conn = $conexao->Conectar();//Abrindo conexao com banco
                $sql = "insert into $nomeDaTabela (codigo, nome, telefone, endereco, sexo, bairro, funcao, salario) values ('', '$nome', '$telefone', '$endereco', '$sexo', '$bairro', '$funcao', '$salario')";//Escrevi o script
                $result = mysqli_query($conn, $sql);//Executa a ação do script no banco

                mysqli_close($conn);//fechando a conexão com sucesso!

                if($result){
                    echo "|-----------Funcionario Cadastrado com Sucesso-----------|";
                    return $result;
                }
                return "<br><br>Não Inserido!";
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do cad

        public function CadastrarCliente(Conexao $conexao, string $nomeDaTabela, string $cpf, string $nome, string $telefone, string $endereco){
            try{
                $conn = $conexao->Conectar();//Abrindo conexao com banco
                $sql = "insert into $nomeDaTabela (cpf, nome, telefone, endereco) values ('$cpf', '$nome', '$telefone', '$endereco')";//Escrevi o script
                $result = mysqli_query($conn, $sql);//Executa a ação do script no banco

                mysqli_close($conn);//fechando a conexão com sucesso!

                if($result){
                    echo "|-----------Cliente Cadastrado com Sucesso-----------|";
                    return $result;
                }
                return "<br><br>Não Inserido!";
            }catch(Except $erro){
                echo $erro;
            }
        }

        public function CadastrarProduto(Conexao $conexao, string $nomeDaTabela, string $produto ,string $estoque, string $valor){
            try{
                $conn = $conexao->Conectar();//Abrindo conexao com banco
                $sql = "insert into $nomeDaTabela (codigo, nomeProduto, estoque, valor) values ('', '$produto', '$estoque', '$valor')";//Escrevi o script
                $result = mysqli_query($conn, $sql);//Executa a ação do script no banco

                mysqli_close($conn);//fechando a conexão com sucesso!

                if($result){
                    echo "|-----------Produto Cadastrado pelo Funcionario-----------|";
                    return $result;
                }
                return "<br><br>Não Inserido!";
            }catch(Except $erro){
                echo $erro;
            }
        }

    }//fim da class
?>