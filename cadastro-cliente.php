<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./img/logo-icon.png" type="image/x-icon">

    <link rel="stylesheet" href="../css's/cadastro-cliente.css">

    <link rel="shortcut icon" href="../img/logo-icon.png" type="image/x-icon">
    
    <title>Cadastro do Cliente</title>
</head>

<body>

    <header>
        <div class="logo">
            <a href="../parte-nova.php"><img src="../img/logo2.svg" alt=""></a>
        </div>

        <div class="txtlogin">
        <h1 class="sing-up">Já tem uma conta? <a href="login-cliente.php"> Acesse!</a></h1>
    </div>

    </header>

    <div class="corpo">
    <div class="animacao">
        <img src="../img/welcome-animate.svg" alt="">
    </div>

    <!-- Formulario do cadastro do cliente  -->

    <section id="container">

    <!-- Titulo -->

        <h1 class="title">Faça seu cadastro na Missô</h1>

        <!-- Formulario -->

        <form class="cadastro-cliente" action="cadastra-cliente.php" method="post">

            <h1>Dados pessoais</h1>

            <!-- Dados pessoais -->

            <div class="dados-pessoais">
                <div class="nome">
                    <label for="">Nome Complemento</label>
                    <input type="text" placeholder="Digite seu nome" name="nome" id="nome">
                </div>

                <div class="cpf">
                    <label for="">CPF</label>
                    <input type="text" placeholder="Informe seu cpf" name="cpf" id="cpf">
                </div>
            </div>

            <!-- Email -->

            <div class="forma-contato">
                <div class="email">
                    <label for="">Email</label>
                    <input type="email" placeholder="Digite seu email" name="email" id="email">
                </div>
            </div>

            <!-- Endereços -->

            <h1>Endereço</h1>

            <div class="endereco">

                <div class="cep">
                    <label for="">Cep</label>
                    <input type="text" placeholder="Informe seu cep" name="cep" id="cep">
                </div>

                <div class="logradouro">
                    <label for="">Logradouro</label>
                    <input type="text" placeholder="Informe a sua rua" name="logradouro" id="logradouro">
                </div>

                <div class="numLog">
                    <label for="">Numero</label>
                    <input type="text" placeholder="Numero de sua residência" name="numero" id="numero">
                </div>

                <div class="comp">
                    <label for="">Complemento</label>
                    <input type="text" placeholder="Informe um complemento" name="comp" id="comp">
                </div>

                <div class="bairro">
                    <label for="">Bairro</label>
                    <input type="text" placeholder="Digite o bairro onde mora" name="bairro" id="bairro">
                </div>

                <div class="cidade">
                    <label for="">Cidade</label>
                    <input type="text" placeholder="Digite a cidade onde mora" name="cidade" id="cidade">
                </div>

                <div class="uf">
                    <label for="">UF</label>
                    <select name="uf" id="uf">
                        <option selected id="option">Estado</option>
                        <option id="option">AC</option>
                        <option id="option">AL</option>
                        <option id="option">AP</option>
                        <option id="option">AM</option>
                        <option id="option">BA</option>
                        <option id="option">CE</option>
                        <option id="option">ES</option>
                        <option id="option">GO</option>
                        <option id="option">MA</option>
                        <option id="option">MT</option>
                        <option id="option">MS</option>
                        <option id="option">MG</option>
                        <option id="option">PA</option>
                        <option id="option">PB</option>
                        <option id="option">PR</option>
                        <option id="option">PE</option>
                        <option id="option">PI</option>
                        <option id="option">RJ</option>
                        <option id="option">RN</option>
                        <option id="option">RS</option>
                        <option id="option">RO</option>
                        <option id="option">RR</option>
                        <option id="option">SC</option>
                        <option id="option">SP</option>
                        <option id="option">SE</option>
                        <option id="option">TO</option>
                    </select>
                    
                </div>
            </div>

            <!-- Senha -->

            <h1>Senha</h1>

            <div class="area-senha">
                <div class="senha">
                    <label for="">Senha</label>
                    <input type="password" placeholder="Digite sua senha aqui" name="senha" id="senha">
                </div>
                <div class="senha">
                    <label for="">Confirme sua senha</label>
                    <input type="password" placeholder="Confirme a sua senha" name="confirma-senha" id="confirma-senha">
                </div>
            </div>

            <!-- Botoes-->

            <div class="botao">

                <div class="voltar">
                    <button class="btn">Voltar<a href="../parte-nova.php"></a></button>
                </div>
                <div class="cadastrar">
                    <input class="btn" type="submit" value="Cadastrar" name="Cadastrar">
                </div>

            </div>

        </form>

        <!-- Fim formulario -->

    </section>
    </div>

    


</body>

</html>