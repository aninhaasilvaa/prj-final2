<?php include "verifica-logado-adm.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css's/area-produto.css">
    <link rel="stylesheet" href="../css's/adm.css">

    <script src="https://cdn.lordicon.com/qjzruarw.js"></script>

    <title>Area do Cliente</title>
</head>

<body>

    <div class="side-menu">
        <header>

            <div class="brand-name">
                <img src="../img/logo2.svg" alt="">
            </div>
        </header>

        <ul>
            <a href="./adm.php">
                <li>
                    <lord-icon src="https://cdn.lordicon.com/tbfrtmlu.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;<span>dashboard</span>
                </li>
            </a>
            <a href="./produto.php">
                <li>
                    <lord-icon src="https://cdn.lordicon.com/zdiigbly.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;<span>produtos</span>
                </li>
            </a>
            <a href="./cadastro-categoria.php">
                <li>
                    <lord-icon src="https://cdn.lordicon.com/hursldrn.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;<span>categorias</span>
                </li>
            </a>
            <a href="./area-cliente.php">
                <li>
                <lord-icon src="https://cdn.lordicon.com/dxjqoygy.json" trigger="hover" colors="primary:#fff,secondary:#fff" style="width: 50px;height:50px"></lord-icon>&nbsp;<span>clientes</span>
                </li>
            </a>
            <a href="./.php">
                <li>
                    <lord-icon src="https://cdn.lordicon.com/mjmrmyzg.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;<span>vendas</span>
                </li>
            </a>
        </ul>
    </div>

    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit">
                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="hover" colors="primary:#121331,secondary:#e74c4c" style="width:20px;height:20px"></lord-icon>
                    </button>
                </div>
                <div class="user">
                    <button id="sair"><a href="logout-adm.php">Sair</a></button>
                    <div class="img-case">
                        <img src="../img/user.png" width="40px" height="40px" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content" id="content">
            <div class="cards" id="cards">
                <div class="card" id="card">
                    <div class="box" id="box">

                        <h3>Clientes</h3>


                    </div>
                    <div class="icon-case">
                    <lord-icon src="https://cdn.lordicon.com/dxjqoygy.json" trigger="hover" colors="primary:#e74c4c,secondary:#e74c4c" style="width:80px;height:80px"></lord-icon>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Clientes</h2>
                        <a href="#" class="btn">Ver Tudo</a>
                    </div>
                    <table>
                        <tr>
                            <td style="font-weight: bolder;">ID do Cliente</td>
                            <td style="font-weight: bolder;">Nome do cliente</td>
                            <td style="font-weight: bolder;">Email do cliente</td>
                        </tr>
                        <?php
                        require_once '../DAO/ClienteDao.php';
                        try {
                            $listacliente = ClienteDao::listar();
                        } catch (Exception $e) {
                            echo '<pre>';
                            print_r($e);
                            echo '</pre>';
                            echo $e->getMessage();
                        }
                        ?>
                        <?php foreach ($listacliente as $cliente) { ?>
                            <tr>
                                <th scope="row"><?php echo $cliente['idCliente']; ?></th>
                                <td><?php echo $cliente['nomeCliente']; ?></td>
                                <td><?php echo $cliente['emailCliente'] ?></td>
                                <td>ícone</td>
                                <td>@ícone</td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>