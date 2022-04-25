<?php
  if(isset($_POST['submit']))
  {
      session_start();
      include_once('config.php');

      $email = $_POST['email'];
      $nome = $_POST['username'];
      $morada = $_POST['morada'];
      $passworde = $_POST['passworde'];
      
      include_once('config.php');
      $email = $_POST['email'];
      $nome = $_POST['username'];
      $morada = $_POST['morada'];
      $passworde = $_POST['passworde'];

      $result = mysqli_query($conexao, "INSERT INTO clientes(email, nome, morada, passworde)
      VALUES('$email', '$nome', '$morada', '$passworde')");

      header('Location:login.php');
  }
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

  <title>Registar</title>
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
              <a class="nav-link text white active" href="index.html">Principal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="contacto.html">Contacto</a>
            </li>
            </li>
          </ul>
          <div class="align-self-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="criar.php" class="nav-link text-white">Criar conta</a>
              </li>
              <li class="nav-item">
                <a href="login.php" class="nav-link text-white">Entrar</a>
              </li>
              <li class="nav-item">
                <span class="badge rounded-pill bg-light text-black position-absolute ms-3 mt-0"
                  title="5 produto(s) no carrinho"><small>5</small></span>
                <a href="/carrinho.html" class="nav-link text-white">⠀
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
        <div class="row justify-content-center">
            <form action="criar.php" method="POST">
              <div class="card" data-step>
                <h3 class="step-title">Coloque os seus Dados</h3>
                <div class="form-floating">
                  <input type="email" class="form-control" name="email" placeholder="name@example.com" required style="margin-bottom:20px;">
                  <label for="email">Endereço de Email</label>
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control" name="passworde" placeholder="Password" required style="margin-bottom:20px;">
                  <label for="passworde">Palavra-Passe</label>
                </div>
                <div class="form-floating">
                  <input type="text" class="form-control" name="username" placeholder="Username" required style="margin-bottom:20px;">
                  <label for="username">Nome de Utilizador</label>
                </div>
                <div class="form-floating">
                  <input type="text" class="form-control" name="morada" placeholder="Username" required style="margin-bottom:20px;">
                  <label for="morada">Coloque a sua Morada</label>
                </div>
                  <input class="btn btn-lg btn-dark" name="submit" id="submit" type="submit" style="display: flex; margin: auto;"/>
                </div>
      
              </div>
            </form>

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

            <a href="privacidade.html" class="text-decoration-none text-dark">
              Politica de Privacidade
            </a> <br>

            <a href="sobre.html" class="text-decoration-none text-dark">
              Sobre a Amazon
            </a> <br>

            <a href="termos.html" class="text-decoration-none text-dark">
              Termos e Usos da Amazon
            </a> <br>

            <a href="trocas.html" class="text-decoration-none text-dark">
              Trocas e Devoluções
            </a> <br>

          </div>

          <div class="col-12 col-md-4 text-center">

            <a href="contacto.html" class="text-decoration-none text-dark">
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
</body>

</html>