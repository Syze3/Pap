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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="/img/favicon/manifest.json">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/estilos.css">

  <title>Amazon Portugal</title>
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

    <div class="container">
      <div id="carouselMain" class="carousel slide carousel-dark" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="0" class="active">⠀</button>
          <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1">⠀</button>
          <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="2">⠀</button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/1.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="img/2.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="img/3.jpg" class="d-block w-100" alt="">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
          <span class="visually-hidden">Próximo</span>
        </button>
        <hr>
      </div>
    </div>

    <main class="flex-fill">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-5">
            <form class="justify-content-center justify-content-md-start mb-3 mb-md-0">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Procurar">
                <button class="btn btn-dark">Procurar</button>
              </div>
            </form>
          </div>
          <div class="col-12 col-md-7">
            <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">
              <form class="d-inline-block">
                <select aria-label="State" class="form-select form-select-sm">
                  <option>Ordenar pelo nome</option>
                  <option>Ordenar pelo menor preço</option>
                  <option>Ordenar pelo maior preço</option>
                </select>
              </form>
              <nav class="d-inline-block me-3">
                <ul class="pagination pagination-sm my-0">
                  <li class="page-item">
                    <a class="page-link" href="index.php">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="index2.php">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="index3.php">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="index4.php">4</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="index5.php">5</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>

        <hr mt-3>

        <div class="row g-3">
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <a href="produto.html">
                <img src="img/4.jpg" class="card-img-top" aria-label="⠀">
              </a>
              <div class="card-header">
                6,99€
              </div>
              <div class="card-body">
                <h5 class="card-title">Sykooria Calças de desporto</h5>
                <p class="card-text truncar-3l">
                  Macio e confortável: as nossas calças desportivas masculinas são projetadas com 95% poliéster 5%
                  elastano.
                  As calças de corrida para homem são muito macias e respiráveis, permitindo que se livre do stress e
                  desfrute do treino e do exercício.
                </p>
              </div>
              <div class="card-footer">
                <a href="carrinho.php" class="btn btn-dark mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <img src="img/5.jpg" class="card-img-top" aria-label="⠀">
              </a>
              <div class="card-header">
                30,90€
              </div>
              <div class="card-body">
                <h5 class="card-title">adidas Core18 Hoody</h5>
                <p class="card-text truncar-3l">
                  Ajuste regular
                  Bolso canguru
                  70% algodão, 30% poliéster
                  Fecho: Pull on
                  Lavar à máquina
                  Manga raglã
                  Casual
                  Capuz com cordão ajustável
                  Punhos e bainha canelados
                </p>
              </div>
              <div class="card-footer">
                <a href="carrinho.php" class="btn btn-dark mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <img src="img/6.jpg" class="card-img-top" aria-label="⠀">
              </a>
              <div class="card-header">
                13,99€
              </div>
              <div class="card-body">
                <h5 class="card-title"> Puma Sport Cush Crew 6P</h5>
                <p class="card-text truncar-3l">
                  Meias desportivas.
                  Com nervuras elásticas na parte superior.
                  Quantidade do pacote de caixas: 6
                  51% poliéster, 37% algodón, 8% poliamida, 4% elastano.
                  Fecho: Elástico
                  Lavar a máquina
                  Sport Cush Crew 6P
                  O logotipo da marca está estampado.
                  Com tecido macio e resistente ao desgaste.
                  As meias oferecem calor e conforto.
                </p>
              </div>
              <div class="card-footer">
                <a href="carrinho.php" class="btn btn-dark mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <img src="img/7.jpg" class="card-img-top" aria-label="⠀">
              </a>
              <div class="card-header">
                20,08€
              </div>
              <div class="card-body">
                <h5 class="card-title">Joma T-shirt para homem manga curta</h5>
                <p class="card-text truncar-3l">
                  Gola redonda
                  Logotipo estampado
                  Sintético
                  Manga curta
                  Normal
                  Respirável
                  Disponível em várias cores
                </p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-light disabled mt-2 d-block">
                  <small>Stock Esgotado</small>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <img src="img/8.jpg" class="card-img-top" aria-label="⠀">
              </a>
              <div class="card-header">
                19,50€
              </div>
              <div class="card-body">
                <h5 class="card-title">Camisola Joma Cairo para homem </h5>
                <p class="card-text truncar-3l">
                  Camisola com gola redonda
                  Possui acabamento canelado no pescoço, punhos e cintura para um ajuste ideal
                  100% poliéster
                  Cairo
                  Feita de poliéster
                  Apresenta o logotipo bordado
                </p>
              </div>
              <div class="card-footer">
                <a href="carrinho.php" class="btn btn-dark mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <img src="img/9.jpg" class="card-img-top" aria-label="⠀">
              </a>
              <div class="card-header">
                51,05€
              </div>
              <div class="card-body">
                <h5 class="card-title">Casaco Jack & Jones</h5>
                <p class="card-text truncar-3l">
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
                </p>
              </div>
              <div class="card-footer">
                <a href="carrinho.php" class="btn btn-dark mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <img src="img/10.jpg" class="card-img-top" aria-label="⠀">
              </a>
              <div class="card-header">
                19,08€
              </div>
              <div class="card-body">
                <h5 class="card-title">Toocool - Calças de mulher</h5>
                elástica Hot Sexy JL-2148</h5>
                <p class="card-text truncar-3l">
                  S adapta-se a uma 38-40 italiana
                  M adapta-se a uma 42 italiana
                  elastano, viscose e poliéster.
                  Alta
                  Evasé
                  L = aproximadamente 44 italiana
                  XL adapta-se a uma 46 italiana
                  XXL adapta-se ao tamanho 48 italiano
                </p>
              </div>
              <div class="card-footer">
                <a href="carrinho.php" class="btn btn-dark mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <img src="img/11.jpg" class="card-img-top" aria-label="⠀">
              </a>
              <div class="card-header">
                38,99€
              </div>
              <div class="card-body">
                <h5 class="card-title">JULY'S SONG pack para correr, ginásio, fitness, desporto</h5>
                <p class="card-text truncar-3l">
                  Material: fibra de poliéster de muito boa qualidade, respirável, macia e absorve a humidade
                  rapidamente, mantendo-o seco enquanto pratica desportos. Tamanho SSUNG EU 30, UK4; tamanho M gemacht
                  EU 32, UK6; tamanho LSUNG EU 34, UK8, SizeXLSUNG EU36, UK10.
                </p>
              </div>
              <div class="card-footer">
                <a href="carrinho.php" class="btn btn-dark mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <img src="img/12.jpg" class="card-img-top" aria-label="⠀">
              </a>
              <div class="card-header">
                29,99€
              </div>
              <div class="card-body">
                <h5 class="card-title">Grace Karin: Vestido elegante para mulher
                  gola redonda</h5>
                <p class="card-text truncar-3l">
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
                </p>
              </div>
              <div class="card-footer">
                <a href="carrinho.php" class="btn btn-dark mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <img src="img/13.jpg" class="card-img-top" aria-label="⠀">
              </a>
              <div class="card-header">
                8,10€
              </div>
              <div class="card-body">
                <h5 class="card-title">Chalier Meias de algodão para menina e mulher, pack de 5</h5>
                <p class="card-text truncar-3l">
                  Excelente qualidade: as nossas lindas meias são feitas com 80% de algodão, 15% de acrílico e 5% de
                  elastano. Elásticas, confortáveis, leves, fáceis de usar e absorventes de suor. Cuidado suave para a
                  pele, deixa-o confortável o dia todo.
                  Tamanho adequado: as nossas meias femininas medem entre 23 e 25 cm. São elásticas e ideais para os
                  seus pés. 5 pares de meias casuais com um design bonito, que podem ser usadas em muitas ocasiões.
                  Material: 80% algodón, 15% acrílico, 5% spandex
                  Lavar a máquina, Lavar a mano
                  Melhor relação de qualidade/preço: a embalagem vem com 5 pares de meias divertidas de algodão. Meias
                  casuais para mulheres: O design encantador e conciso é moderno mas proporciona conforto. Dê alegria às
                  manhãs frias com estas meias ajustadas para manter os dedos quentes e muito confortáveis.
                  Muitas ocasiões adequadas: estas meias casuais com uma mistura de cores dão um toque final divertido
                  às suas roupas. Não precisa de se preocupar com a deformação ou o desvanecimento. Podem ser usadas na
                  rua ou em casa, diariamente ou durante as férias. Têm uma grande utilidade. Presente perfeito para
                  familiares, amigos e aqueles de quem gosta.
                </p>
              </div>
              <div class="card-footer">
                <a href="carrinho.php" class="btn btn-dark mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <img src="img/14.jpg" class="card-img-top" aria-label="⠀">
              </a>
              <div class="card-header">
                33,48€
              </div>
              <div class="card-body">
                <h5 class="card-title">Only Onltahoe Hood Jacket Otw Noos Casaco para mulher</h5>
                <p class="card-text truncar-3l">
                  Casaco acolchoado com capuz.
                  Jaqueta forrada
                  100 % nylon
                  Fecho: não especificado
                  Não especificado
                  casaco acolchoado
                </p>
              </div>
              <div class="card-footer">
                <a href="carrinho.php" class="btn btn-dark mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <img src="img/15.jpg" class="card-img-top" aria-label="⠀">
              </a>
              <div class="card-header">
                18,99€
              </div>
              <div class="card-body">
                <h5 class="card-title">Leggings desportivas de cintura alta para mulher</h5>
                <p class="card-text truncar-3l">
                  Com cintura elástica e confortável para um ajuste seguro e justo
                  O design à prova de agachamento garante que o tecido não fique transparente durante o exercício
                  83% poliéster, 17% elastano
                  Fecho: Cinto
                  Lavar à máquina
                  Esportivo
                  Design testado com propriedades que absorvem a humidade para garantir a secura e o conforto durante o
                  treino
                </p>
              </div>
              <div class="card-footer">
                <a href="carrinho.php" class="btn btn-dark mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
              </div>
            </div>
          </div>

          <hr class="mt-3">

          <div class="row pb-3">
            <div class="col-12">
              <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">
                <form class="d-inline-block">
                  <select aria-label="State" class="form-select form-select-sm">
                    <option>Ordenar pelo nome</option>
                    <option>Ordenar pelo menor preço</option>
                    <option>Ordenar pelo maior preço</option>
                  </select>
                </form>
                <nav class="d-inline-block me-3">
                <ul class="pagination pagination-sm my-0">
                  <li class="page-item">
                    <a class="page-link" href="index.php">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="index2.php">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="index3.php">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="index4.php">4</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="index5.php">5</a>
                    </li>
                  </ul>
                </nav>
              </div>
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

          <div class="col-12 col-md-4 text-center text-decoration-none">

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

            <a href="contacto.php" class="text-decoration-none text-dark">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>