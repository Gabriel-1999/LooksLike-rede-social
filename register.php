<?php session_start(); 
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
  <title>LooksLike</title>
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
    <form action="controllers/operations.php?action=<?php echo "create";?>" method="POST">
      <h2>Registar</h2>
      <span>
        <label for="name">
          Nome
        </label>
        <input type="text" id ="name" name="name" required>
      </span>
      <span>
        <label for="email">
          Email
        </label>
        <input type="email" id ="email" name="email" required>
      </span>
      <div class="shortInput">
        <span>
          <label for="password">
            Senha
          </label>
          <input type="password" id ="password" name="password" required>
        </span>
        <span>
          <label for="birthday">
            Data Nascimento
          </label>
          <input type="date" id="birthday" name="birthday" required>
        </span>
        <span>
          <label for="phone">
            Telefone
          </label>
          <input type="text" id ="phone" name="phone" required>
        </span>
        <span>
          <label for="city">
            Cidade
          </label>
          <input type="text" id ="city" name="city"  required>
        </span>
      </div>
      <button type="submit">Registar</button>
      <p>Já tens uma conta? <a href="signIn.php">Entrar</a></p>
    </form>
    <img src="./assets/registerImg.svg" alt="" srcset="">
  </main>
 
  <div class="modalLoading inVisible">
    <img src="./assets/icons/logo.svg" alt="">
    <h2>Aguarde...</h2>
  </div>

  <div class="modalDelete inVisible">
    <div>
      <h2>Email ou senha invalida</h2>
      <span>
        <button>Tentar</button>
      </span>
    </div>
    </div>
      <?php if($_SESSION["created"] === 0){
        echo "
        <div class='modalDelete Visible'>
        <div>
          <h2>Conta criada com sucesso</h2>
          <span>
            <button id='btn-m'>Fechar</button>
          </span>
        </div>
        </div>
        ";
        $_SESSION["created"] = -1;
      }
      else{
        if($_SESSION["created"] === 1){
          echo "
          <div class='modalDelete Visible'>
          <div>
            <h2>O nome do Utilizador já Existe!</h2>
            <span>
              <button id='btn-m'>Fechar</button>
            </span>
          </div>
          </div>
          ";
          $_SESSION["created"] = -1;
        }
        else{
          if($_SESSION["created"] === 2){
            echo "
            <div class='modalDelete Visible'>
            <div>
              <h2>O E-mail já está em uso, use outro!</h2>
              <span>
                <button id='btn-m'>Fechar</button>
              </span>
            </div>
            </div>
            ";
            $_SESSION["created"] = -1;
          }
          else{
            if($_SESSION["created"] === 3){
              echo "
              <div class='modalDelete Visible'>
              <div>
                <h2>Número do Celular deve ter 9 Dígitos!</h2>
                <span>
                  <button id='btn-m'>Fechar</button>
                </span>
              </div>
              </div>
              ";
              $_SESSION["created"] = -1;
            }else{
              if($_SESSION["created"] === 4){
                echo "
                <div class='modalDelete Visible'>
                <div>
                  <h2>Número de Telefone deve ter 9 Dígitos!</h2>
                  <span>
                    <button id='btn-m'>Fechar</button>
                  </span>
                </div>
                </div>
                ";
                $_SESSION["created"] = -1;
              }
              else{
                  if($_SESSION["created"] === 5){
                    echo "
                    <div class='modalDelete Visible'>
                    <div>
                      <h2>O Telefone inserido já está em uso!</h2>
                      <span>
                        <button id='btn-m'>Fechar</button>
                      </span>
                    </div>
                    </div>
                    ";
                    $_SESSION["created"] = -1;
                  }
              }
            }
          }
        }
      }
      ?>

  <script src="js/index.js"></script>
  <script>
    var b = document.getElementById("btn-m");
    b.addEventListener("click", function(){
      document.querySelector(".Visible").style.display = "none";
    })
  </script>

</body>
</html>