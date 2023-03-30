<?php
    require_once '../MODEL/Cliente.php';
    require_once '../Conexao.php';

    class ClienteDao{

        public static function cadastrar($cliente){
            $conexao = Conexao :: conectar();

            $queryInsert = "INSERT INTO tbcliente(nomeCliente, cpfCliente, emailCliente, senhaCliente,
             logradouroCliente, numLogCliente, compCliente, bairroCliente, cidadeCliente, ufCliente,
              cepCliente) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $prepareStatement = $conexao -> prepare ($queryInsert);

            $prepareStatement -> bindValue (1, $cliente -> getNomeCliente());
            $prepareStatement -> bindValue (2, $cliente -> getCpfCliente());
            $prepareStatement -> bindValue (3, $cliente -> getEmailCliente());
            $prepareStatement -> bindValue (4, $cliente -> getSenhaCliente());
            $prepareStatement -> bindValue (5, $cliente -> getLogradouroCliente());
            $prepareStatement -> bindValue (6, $cliente -> getNumLogCliente());
            $prepareStatement -> bindValue (7, $cliente -> getCompCliente());
            $prepareStatement -> bindValue (8, $cliente -> getBairroCliente());
            $prepareStatement -> bindValue (9, $cliente -> getCidadeCliente());
            $prepareStatement -> bindValue (10, $cliente -> getUfCliente());
            $prepareStatement -> bindValue (11, $cliente -> getCepCliente());

            $prepareStatement -> execute();
            
            return 'Cadastrou';
        }

        public static function listar(){
            $conexao = Conexao :: conectar();
            $querySelect = "SELECT idCliente, nomeCliente, emailCliente FROM tbCliente";
            $resultado = $conexao -> query($querySelect);
            $lista = $resultado -> fetchAll();
            return $lista;
        }

        public static function consultar(){
            $conexao = Conexao :: conectar();
            $stmt = $conexao->prepare("select nomeCliente from tbCliente");
            $stmt->execute();

            $query = "SELECT COUNT(idCliente) AS qtd FROM tbCliente";
            $resultadoCliente = $conexao->query($query);
            $qtdCliente = $resultadoCliente -> fetchAll(PDO::FETCH_COLUMN);
            return $qtdCliente;
        }
    }
    
?>