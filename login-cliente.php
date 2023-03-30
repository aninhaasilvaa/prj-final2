<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css's/login-cliente.css">
    <title>Login Cliente</title>
</head>
<body>

<header>
    <div class="logo">
        <a href="../parte-nova.php"><img src="../img/logo2.svg" alt=""></a>
    </div>

    <div class="txtcadastro">
        <h2 class="sing-up">Novo Usuario? <a href="cadastro-cliente.php"> Entre</a></h2>
    </div>
        
</header>

<section id="container">

    <div class="animacao">
        <img src="../img/login-cliente.svg" alt="">
    </div>

    <div class="area-login">

        <h1 class="title">Bem-Vindo de Volta!</h1>
        <h3 class="sub-title">Faça seu login para continuar</h3>
            
            <form class="form-login" name="form-login" action="valida-login-cliente2.php" method="post">
                    <div class="user">
                        <label for="exampleInputEmail">Usuário</label>
                        <input type="text" placeholder="Insira seu email" name="login" class="form-control">
                    </div>

                    <div class="user">
                        <label for="exempleInputPassword">Senha</label>
                        <input type="password" placeholder="Insira sua senha" name="senha" class="form-control">
                    </div>
                    
                    <div class="botao">
                        <button class="btn">Voltar<a href="../parte-nova.php"></a></button>  
                        <input class="enviar" type="submit" value="Confirmar" name="EnviarLogin">  
                    </div>
            </form>
    </div>

</section>





</body>