<?php
session_start();
if(!isset($_SESSION["user-login"])){
  header("Location: signIn.php");
  die();
}
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
  <title>Other perfil</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./styles/header.css">
  <link rel="stylesheet" href="./styles/perfil.css">
</head>
<body>
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
        <li class="input">
          <input type="text" placeholder="Pesquisar">
          <a href="./search.php">
            <img src="./assets/icons/search.svg" alt="">
          </a>
        </li>
        <li>
          <a href="./home.php">Inicio</a>
        </li>
        <li>
          <a href="./perfil.php">Perfil</a>
        </li>
        <li> <a class="headerLink" href="./signIn.php">Sair</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <div class="topColor"></div>
    <section class="perfil">
      <h2>Perfil</h2>
      <hr/>
      <div class="gradient"></div>
      <div href="./perfil.php" class="perfilCard">
        <img src="./assets/myPic.png" alt="" srcset="">
        <h4>20</h4>
        <h3>Silesio Cipriano</h3>
        <h4>Nampula</h4>
        <hr/>
        <h4>scipriano@gmail.com</h4>
        <h4>842022009</h4>
      </div>
    </section>

    <section class="feed">
      <div class="header">
        <h2>Fotos</h2>
        <hr/>
      </div>
      <div class="pictures">
        <button>
          <img src="./assets/userPics/picUser1.jpg" alt="" srcset="">
        </button>
        <button>
          <img src="./assets/userPics/picUser2.jpg" alt="" srcset="">
        </button>
        <button>
          <img src="./assets/userPics/picUser3.jpg" alt="" srcset="">
        </button>
        <button>
          <img src="./assets/userPics/picUser4.jpg" alt="" srcset="">
        </button>
        <button>
          <img src="./assets/userPics/picUser5.jpg" alt="" srcset="">
        </button>
        <button>
          <img src="./assets/userPics/picUser6.jpg" alt="" srcset="">
        </button>
        <button>
          <img src="./assets/userPics/picUser7.jpg" alt="" srcset="">
        </button>
      </div>
     
    </section>

    <section class="anuncio">
      <div class="gradient02">
      </div>
      <h2>Anúncio</h2>
      <hr/>
      <a href="/">
        <img src="./assets/anuncio.svg" alt="">
      </a>
    </section>
  </main>

  <div class="modalImage inVisible">
    <div class="cardPost">
      <div class="top">
        <div>
          <img src="./assets/myPic.png" alt="">
          <span>
            <h3>Silesio Cipriano</h3>
            <p>2 horas atras</p>
          </span>
        </div>
        <button>
          <img src="./assets/icons/x.svg" alt="" srcset="">
        </button>

        </div>
      <div class="content">
        <p>As pessoas costumam dizer que a motivação não dura sempre. Bem, nem o efeito do banho, por isso recomenda-se diariamente.</p>
        <img src="./assets/picFeed.jpg" alt="" srcset="">
      </div>
      <div class="contentBottom">
        <div>
          <button class="like"  onclick="handleLike()">
          <svg width="40" height="40" viewBox="0 0 46 44" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.701 21.0628C-0.802668 13.2461 2.12333 4.31175 10.3297 1.66808C14.6463 0.275084 19.411 1.09642 22.9997 3.79608C26.3947 1.17108 31.3343 0.284417 35.6463 1.66808C43.8527 4.31175 46.7973 13.2461 44.296 21.0628C40.3993 33.4527 22.9997 42.9961 22.9997 42.9961C22.9997 42.9961 5.72833 33.5974 1.701 21.0628Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
            <path opacity="0.4" d="M32.3333 9.63333C34.83 10.4407 36.594 12.669 36.8063 15.2847" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
          <span>198</span>
        </div>
        <div class="secondaryAction">
           
        </div>
        </div>
    </div>
  </div>

  <div class="modalDelete inVisible">
    <div>
      <h2>Deseja mesmo deletar  a foto?</h2>
      <span>
        <button>Sim</button>
        <button>Nao</button>
      </span>
    </div>
    </div>

  <div class="modalVerImage inVisible">
    <button class="top">
      <img src="./assets/icons/x.svg" alt="" srcset="">
    </button>
    <img src="./assets/userPics/picUser2.jpg" alt="" srcset="">
  </div>
  <script src="./js/index.js"></script>
  <script src="./js/home.js"></script>
</body>
</html>