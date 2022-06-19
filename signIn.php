<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/Favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/Favicon/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <title>Entrar</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./styles/register.css">
  <link rel="stylesheet" href="./styles/header.css">
</head>
<body>
  <div class="gradientHeroLeft"></div>
  <div class="gradientHeroRight"></div>
  <header>
    <nav>
      <a class="logo" href="/">
        <img src="./assets/icons/logo.svg" alt="">
      </a>
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">
        <li>
          <a href="./index.php">Inicio</a>
        </li>
        <li> <a class="headerLink" href="./signIn.php">Entrar</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <form action="controllers/operations.php?action=<?php echo "login";?>" method="POST">
      <h2>Entrar</h2>
      <span>
        <label for="email">
          Email
        </label>
        <input type="email" id ="email" name="email" required>
      </span>
      <span>
        <label for="email">
          Senha
        </label>
        <input type="password" id ="password" name="password" required>
      </span>
      
      <button type="submit">Entrar</button>
      <p>Não tens uma conta? <a href="./register.php">Criar nova conta</a></p>
    </form>
    <img src="./assets/registerImg.svg" alt="" srcset="">
  </main>
  
  <div class="modalLoading inVisible">
    <img src="./assets/icons/logo.svg" alt="">
    <h2>Aguarde...</h2>
  </div>

  <?php
    if($_SESSION["login"] === -1){
      echo "
      <div class='modalDelete Visible'>
      <div>
        <h2>E-mail ou senha Inválida</h2>
        <span>
          <button id='btn-m'>Tentar Novamente</button>
        </span>
      </div>
      </div>
      ";
      $_SESSION["login"] = 0;
    }
  ?>

  <script src="./js/index.js"></script>
  <script>
    var b = document.getElementById("btn-m");
    b.addEventListener("click", function(){
      document.querySelector(".Visible").style.display = "none";
    })
  </script>

</body>
</html>