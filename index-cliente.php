<?php
session_start();
include_once '../Conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css's/style.css">

    <link rel="stylesheet" href="../css's/cardapio.css">

    <link rel="stylesheet" href="../css's/style-cadastra-cliente.css">

    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <script defer src="https://cdn.lordicon.com/pzdvqjsp.js"></script>

    <!-- Link do icon na guia  -->
    <link rel="shortcut icon" href="../img/logo-icon.png" type="image/x-icon">

    <title>Bem vindo ao misso!</title>

</head>

<body>

    <header id="home">

        <div class="logo">
            <img src="../img/logo2.svg" alt="">
        </div>

        <div class="title">
            <h1>Bem Vindo(a), <?php echo $_SESSION['nomeCliente']; ?>!</h1>
        </div>

        <div class="nav">
            <ul>
                <a href="#promo">
                    <lord-icon src="https://cdn.lordicon.com/cjieiyzp.json" trigger="hover" colors="primary:#333333,secondary:#ff7f7c" style="width:70px;height:70px">
                    </lord-icon>
                </a>
                <a href="#menu">
                    <lord-icon src="https://cdn.lordicon.com/zbdlroww.json" trigger="hover" colors="primary:#ff7f7c,secondary:#333" style="width:60px;height:60px">
                    </lord-icon>
                </a>

                <a href="#">
                    <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="hover" colors="primary:#333333,secondary:#ff7f7c" style="width:70px;height:70px">
                    </lord-icon>
                </a>
                <a href="logaout.php">
                    <lord-icon src="https://cdn.lordicon.com/dxjqoygy.json" trigger="hover" colors="primary:#333,secondary:#ff7f7c" style="width:60px;height:60px">
                    </lord-icon>
                </a>
            </ul>
        </div>
    </header>

    <!-- Parte das promoções -->
    <br><br><br>

    <section class="popular" id="popular">

        
        <h1 id="promo" class="heading">Nossas <span>Promoções</span> Imperdíveis </h1>

        <div class="box-container">


            <div class="box">

                <img src="../img/img-cliente/camarao-empanado.png" alt="">
                <h3>Camarão Empanado</h3>

                <a href="#" class="btn">Peça Agora</a>
            </div>

            <div class="box">

                <img src="../img/img-cliente/Acelga-Maki.png" alt="">
                <h3>Acelga Maki</h3>

                <a href="#" class="btn">Peça Agora</a>
            </div>

            <div class="box">

                <img src="../img/img-cliente/Futomaki.png" alt="">
                <h3>Futomaki</h3>

                <a href="#" class="btn">Peça Agora</a>
            </div>

            <div class="box">

                <img src="../img/img-cliente/hotroll.png" alt="">
                <h3>HotRoll</h3>

                <a href="#" class="btn">Peça Agora</a>
            </div>

            <div class="box">

                <img src="../img/img-cliente/sashimi-de-polvo.png" alt="">
                <h3>Sashimi de Polvo</h3>

                <a href="#" class="btn">Peça Agora</a>
            </div>

            <div class="box">

                <img src="../img/img-cliente/Temaki.png" alt="">
                <h3>Temaki de Salmão</h3>

                <a href="#" class="btn">Peça Agora</a>
            </div>

            <div class="box">

                <img src="../img/img-cliente/Tepan-de-Salmao.jpeg" alt="">
                <h3>Tepan de Salmão</h3>

                <a href="#" class="btn">Peça Agora</a>
            </div>

            <div class="box">

                <img src="../img/img-cliente/uramaki.png" alt="">
                <h3>Uramaki</h3>

                <a href="#" class="btn">Peça Agora</a>
            </div>

            <div class="box">

                <img src="../img/img-cliente/yakissoba.jpeg" alt="">
                <h3>Yakissoba Especial</h3>

                <a href="#" class="btn">Peça Agora</a>
            </div>


        </div>

    </section>

    <!-- Fim das promoções -->

    <!-- Inicio do Menu -->



    <?php

        include_once '../DAO/ProdutoDao.php';
            try {
                $listaproduto = ProdutoDao::listar();
            } catch(Exception $e) {
                echo '<pre>';
                    print_r($e);
                echo '</pre>';
                echo $e->getMessage();
            }
        ?>

    <section class="popular" id="popular">

        <h1 id="menu" class="heading">Nosso <span>Menu</span> Especial </h1>

        <div class="box-container">
            
        <?php foreach($listaproduto as $produto){ ?>

            <div class="box">
                <span class="price"> A partir de R$ <?php echo $produto['precoProduto']; ?> </span>
                <img src="../img/<?php echo $produto['fotoProduto']; ?>" alt="<?php echo $produto['nomeProduto']; ?>">
                <h3><?php echo $produto['nomeProduto']; ?></h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">Peça Agora</a>
            </div>
        <?php } ?>

        </div>
        

    </section>

    <!-- Fim do menu -->



    <br><br><br><br><Br>

    <div class="body-footer">
        <footer>
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
            </div>

            <ul class="social_icon">
                <li><a href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a></li>

                <li><a href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a></li>

                <li><a href="#">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a></li>

                <li><a href="#">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a></li>

            </ul>
            <ul class="menu">
                <li><a href="#menu">Menu</a></li>
                <li><a href="#promo">Promoções</a></li>
            </ul>
            <p>©2022 All rights reserved by Missô</p>
        </footer>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>