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
  <title>Pesquisar</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./styles/header.css">
  <link rel="stylesheet" href="./styles/search.css">
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
          <input type="text" placeHolder="Pesquisar" value="Camp">
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
      <a href="./perfil.php" class="perfilCard">
        <img src="./assets/myPic.png" alt="" srcset="">
        <h3>Silesio Cipriano</h3>
        <h4>Nampula</h4>
      </a>
    </section>

    <section class="feed">
      <div class="header">
        <h2>Pesquisar</h2>
        <hr/>
      </div>
      <div class="results">
      <a href="/" class="cardResult">
        <div class="left">
          <img src="./assets/picFeed.jpg" alt="" srcset="">  
          <h4>Josef Campbell</h4>
        </div>
        <span>Nampula</span>
      </a>
      
      <a href="/" class="cardResult">
        <div class="left">
          <img src="./assets/picFeed.jpg" alt="" srcset="">  
          <h4>Josef Campbell</h4>
        </div>
        <span>Nampula</span>
      </a>

      <a href="/" class="cardResult">
        <div class="left">
          <img src="./assets/picFeed.jpg" alt="" srcset="">  
          <h4>Josef Campbell</h4>
        </div>
        <span>Nampula</span>
      </a>

      <a href="/" class="cardResult">
        <div class="left">
          <img src="./assets/picFeed.jpg" alt="" srcset="">  
          <h4>Josef Campbell</h4>
        </div>
        <span>Nampula</span>
      </a>

      <a href="/" class="cardResult">
        <div class="left">
          <img src="./assets/picFeed.jpg" alt="" srcset="">  
          <h4>Josef Campbell</h4>
        </div>
        <span>Nampula</span>
      </a>

      <a href="/" class="cardResult">
        <div class="left">
          <img src="./assets/picFeed.jpg" alt="" srcset="">  
          <h4>Josef Campbell</h4>
        </div>
        <span>Nampula</span>
      </a>

    </div>
      
        </section>
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
  <script src="./js/index.js"></script>
  <script src="./js/home.js"></script>
</body>
</html>