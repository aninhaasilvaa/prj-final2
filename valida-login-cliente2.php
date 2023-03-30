<?php
    session_start();
    include_once '../Conexao.php';

    $pdo = Conexao::conectar();

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($dados['EnviarLogin'])){

    $query_cliente = "SELECT idCliente, nomeCliente, emailCliente, senhaCliente FROM tbCliente WHERE emailCliente = :login";

    $resultado_cliente = $pdo -> prepare($query_cliente);
    $resultado_cliente->bindParam(':login', $dados['login'], PDO::PARAM_STR);
    $resultado_cliente->execute();


    if(($resultado_cliente) AND ($resultado_cliente->rowCount() != 0)){
        $row_cliente = $resultado_cliente->fetch(PDO::FETCH_ASSOC);
        //var_dump($row_cliente);

        if($dados['senha'] == $row_cliente['senhaCliente']){
            $_SESSION['idCliente'] = $row_cliente['idCliente'];
            $_SESSION['nomeCliente'] = $row_cliente['nomeCliente'];
            header("Location: index-cliente.php");
        }else{
            $_SESSION['msg'] = "ERRO: email ou senha incorreta!";
        }

        //CORRIGIR VERIFICAÇÃO DA SENHA//

    }else{
        $_SESSION['msg'] = "ERRO: email ou senha incorreto!";
    }

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset ($_SESSION['msg']);
    }
    }else{
        header("Location: ../parte-nova.php");
    }

    
    
     
?>