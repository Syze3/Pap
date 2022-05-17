<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['passworde']) == true))
    {
      unset($_SESSION['email']);
      unset($_SESSION['passworde']);
      header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>
<!doctype html>
<html lang="pt-pt">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="/img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/estilos.css">

  <title>Conclusão da Compra</title>
  <style>
    body {
      background-color: rgb(255, 255, 255);
    }
  </style>
</head>

<body>
  <div class="d-flex flex-column wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom shadow-sm mb-3  ">
      <div class="container">
        <a class="navbar-brand" href="/"><b>Amazon Portugal</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
          <span class="navbar-toggler-icon">⠀⠀⠀⠀⠀⠀⠀⠀⠀</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav flex-grow-1">
            <li class="nav-item">
              <a class="nav-link text white active" href="index.php">Principal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="contacto.php">Contacto</a>
            </li>
            </li>
          </ul>
          <div style="color: white;">
            <ul class="navbar-nav">
              <?php
                  echo "<h5>Olá Sr.(a) <u>$logado</u></h5>";
              ?>
              <div class="d-flex">
                <a href="sair.php" class="btn btn-danger me-5">Sair</a>
              <li class="nav-item">
                <span class="badge rounded-pill bg-light text-black position-absolute ms-3 mt-0"
                  title="5 produto(s) no carrinho"><small>5</small></span>
                <a href="carrinho.php" class="nav-link text-white">⠀
                  <i class="bi-cart" style="font-size:20px;line-height:24px;"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <main class="flex-fill">
      <div class="container">
        <h1>Confira os Itens</h1>
        <h3>Confira os Itens e clique em<b> Continuar </b>para prosseguir para a <b>seleção do endereço de entrega</b>.</h3>
        <ul class="list-group mb-3">
          <li class="list-group-item py-3">
            <div class="row g-3">
              <div class="col-4 col-md-3 col-lg-2">
                <a href="#">
                  <img src="img/8.jpg" class="img-thumbnail" aria-label="⠀">
                </a>
              </div>
              <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                <h4>
                  <b><a href="#" class="text-decoration-none text-dark">
                      Camisola Joma Cairo para homem</a></b>
                </h4>
                <h5>
                  Camisola com gola redonda,
                  Possui acabamento canelado no pescoço, punhos e cintura para um ajuste ideal,
                  100% poliéster,
                  Apresenta o logotipo bordado.
                </h5>
              </div>

            </div>
          <li class="list-group-item py-3">
            <div class="row g-3">
              <div class="col-4 col-md-3 col-lg-2">
                <a href="#">
                  <img src="img/9.jpg" class="img-thumbnail" aria-label="⠀">
                </a>
              </div>
              <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                <h4>
                  <b><a href="#" class="text-decoration-none text-dark">
                    Casaco Jack & Jones</a></b>
                </h4>
                <h5>
                  Casaco para homem
                  Detalhes clássicos de motociclistas
                  Mistura de poliéster
                  Fecho: Fecho de correr
                  Lavar à máquina
                  Estilo do colar: Gola alta
                  Manga comprida
                  Coat
                  Bainha ajustável nas costas
                  Composição do material: material exterior: 88% poliéster, 12% viscose; forro: 100% poliéster; material
                  de enchimento: 100% poliéster
                </h5>
              </div>
          <li class="list-group-item py-3">
            <div class="row g-3">
              <div class="col-4 col-md-3 col-lg-2">
                <a href="#">
                  <img src="img/12.jpg" class="img-thumbnail" aria-label="⠀">
                </a>
              </div>
              <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                <h4>
                  <b><a href="#" class="text-decoration-none text-dark">
                    Grace Karin: Vestido elegante para mulher gola redonda</a></b>
                </h4>
                <h5>
                  Vestido de chiffon para mulher feito de 100% poliéster, o tecido é leve e respirável, macio e
                  confortável.
                  Composição dos materiais: Chiffon
                  Manga 3/4 com fenda
                  Fecho: Zip
                  Recomenda-se lavar à mão ou a seco
                  Manga comprida
                  coquetel
                  O corpo é forrado, não é transparente
                  Pode ser combinado com qualquer salto alto ou outros sapatos que goste, mostrando o charme feminino
                  sexy único
                  Adequado para muitas ocasiões, como casamentos, coquetéis, festas noturnas formais, banquetes,
                  formaturas, casamentos, promessas, festas de boas-vindas e ocasiões especiais.
                </h5>
              </div>
          <li class="list-group-item py-3">
            <div class="row g-3">
              <div class="col-4 col-md-3 col-lg-2">
                <a href="#">
                  <img src="img/14.jpg" class="img-thumbnail" aria-label="⠀">
                </a>
              </div>
              <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                <h4>
                  <b><a href="#" class="text-decoration-none text-dark">
                    Only Onltahoe Hood Jacket Otw Noos Casaco para mulher</a></b>
                </h4>
                <h5>
                  Casaco acolchoado com capuz.
                  Jaqueta forrada
                  100 % nylon
                  Fecho: não especificado
                  Não especificado
                  casaco acolchoado
                </h5>
              </div>
          <li class="list-group-item py-3">
            <div class="row g-3">
              <div class="col-4 col-md-3 col-lg-2">
                <a href="#">
                  <img src="img/5.jpg" class="img-thumbnail" aria-label="⠀">
                </a>
              </div>
              <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                <h4>
                  <b><a href="#" class="text-decoration-none text-dark">
                    Adidas Core18 Hoody</a></b>
                </h4>
                <h5>
                  Ajuste regular
                  Bolso canguru
                  70% algodão, 30% poliéster
                  Fecho: Pull on
                  Lavar à máquina
                  Manga raglã
                  Casual
                  Capuz com cordão ajustável
                  Punhos e bainha canelados
                </h5>
              </div>
              <li class="list-group-item pt-5 pb-0">
                <div class="text-end">
                  <h4 class="text-dark mb-3">Valor Total: 165,41€</h4>
                  <a href="carrinho.php" class="btn btn-outline-dark btn-lg mb-3">Voltar ao Carrinho</a>
                  <a href="conclusao_pagamento.php" class="btn btn-dark btn-lg ms-2 mb-4">Continuar</a>
                </div>
              </li>

            </div>
      </div>
  </div>

  </main>
  <footer class="footer left border-top text-muted bg-light">

    <div class="container">

      <div class="row py-3">

        <div class="col-12 col-md-4 text-center">
          &copy; 2022 - Amazon Portugal <br>
          Rua Silva da Sousa, 42, Portugal/Leiria<br>
          CP 2430-123

        </div>

        <div class="col-12 col-md-4 text-center">

          <a href="privacidade.php" class="text-decoration-none text-dark">
            Politica de Privacidade
          </a> <br>

          <a href="sobre.php" class="text-decoration-none text-dark">
            Sobre a Amazon
          </a> <br>

          <a href="termos.php" class="text-decoration-none text-dark">
            Termos e Usos da Amazon
          </a> <br>

          <a href="trocas.php" class="text-decoration-none text-dark">
            Trocas e Devoluções
          </a> <br>

        </div>

        <div class="col-12 col-md-4 text-center">

          <a href="contacto..php" class="text-decoration-none text-dark">
            Contacto Pelo Site
          </a> <br> E-mail: <a href="email@dominio.com" class="text-decoration-none text-dark">
            email@dominio.com
          </a> <br> Telefone: <a href="Contacto:00351262777888" class="text-decoration-none text-dark">
            (+351) 1262777888
          </a> <br>

        </div>

      </div>

    </div>

  </footer>
  </div>
  <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript"></script>
</body>

</html>