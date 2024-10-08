<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>O que é Número Máscara?</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css/NumMas.css">
</head>

<body>
  <nav class="navbar col-12 position-fixed navbar-expand-lg navbar-custom" data-bs-theme="dark" style="z-index:999;">
    <div class="container-fluid col-11 m-auto">
      <a class="navbar-brand" href="tela3.php"><img src="imagens/imagens-tela3/logo-telecall.png"
          style="margin-right: 1rem;" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="tela3.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sobre-nos">Sobre nós</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Serviços
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="2FA.php">Two factory authentication</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Número máscara</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="GoogleVC.php">Google verified calls</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="SMSProg.php">SMS programável</a></li>
            </ul>
          </li>

          </ul>

          <?php

          //inicia uma sessão php para acessar as variáveis de sessão.
          session_start();

          /*Verifica se o usuário NÃO(!) está autenticado, se realmente não estiver
          o usuário será redirecionado novamente para a página de login*/
          if (isset($_SESSION["CPF"])) {
            $nome = $_SESSION["nome"];
            $cpf = $_SESSION["CPF"];
            
              
          }

          /*Armazenam o nome e o sobrenome do usuário a partir
          das variáveis de sessão*/

          ?>

          <button type="button" class="switch btn btn-outline-success" id="btnSwitch"
            style="width: 4%; -webkit-border-radius: 50px;
          -moz-border-radius: 50px;-o-border-radius: 50px; -ms-border-radius: 50px; border-radius: 50px; margin-right: 1rem; background-color: #0c4c7c;"><i class="fa-regular fa-moon"
              style="font-size: 15px;"></i></button>

          <?php 
          //se o usuário estiver na sessão e se for do tipo 1, modifica a navbar
              if (isset($_SESSION["CPF"]) && isset($_SESSION['tipo']) && $_SESSION['tipo'] == 1) {
                echo '<a href="dadoscadastrais.php" style="text-decoration:none;"><i class="fa-regular fa-user fa-sm" style="margin-right: 5px;"></i>',$nome,'</a>';
                echo '<a href="encerrasessao.php" id=idencerra style="text-decoration:none; margin-left: 15px;"><i class="fa-solid fa-arrow-right-from-bracket" style="font-size: 15px;"></i> Sair</a>';
            } else {
              echo '<a href="tela1.html" id=idencerra style="text-decoration:none; margin-right: 15px;"><i class="fa-solid fa-arrow-right-to-bracket" style="font-size: 15px"></i> Login</a>';
              echo '<a href="tela2.html" style="text-decoration:none;"><i class="fa-regular fa-user fa-sm" style="margin-right: 5px; "></i>Cadastre-se</a>';

            }
          ?>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <br>
  <div class="conteudo">
    <h1>O que é Número Máscara?</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4 col-10 m-auto">
      <div>
        <p>
          "Número Máscara" é um conceito utilizado em programação para formatar e exibir números de maneira padronizada,
          seguindo uma determinada máscara ou padrão predefinido. A máscara determina a forma como o número é
          apresentado,
          incluindo a quantidade de dígitos, símbolos e espaços utilizados.
        </p>

        <p>
          A aplicação de uma máscara em um número permite tornar sua exibição mais legível e compreensível para os
          usuários,
          além de facilitar a entrada de dados em formulários e campos de texto. Com a máscara, é possível definir como
          os
          números são separados por vírgulas, pontos, barras ou outros caracteres, bem como a posição dos zeros,
          símbolos
          monetários e decimais.
        </p>
      </div>

      <div class="image-container m-auto">
        <img src="imagens/imagens-4telas/NumMas.png" id="nm" alt="Número Máscara" />
      </div>
    </div>
    <div class="row col-10 m-auto">
      <p>
        Por exemplo, uma máscara comum para formatar números de telefone no Brasil seria "(99) 9999-9999", onde os
        dígitos
        entre parênteses representam o código de área, seguido de um espaço, e os demais dígitos estão separados por um
        hífen.
      </p>

      <p>
        O uso de números máscara é comum em diversos contextos, como em formulários de cadastro, campos de pagamento,
        exibição de dados financeiros, entre outros. Eles ajudam a garantir a consistência e a precisão na apresentação
        e
        coleta de números, facilitando a compreensão por parte dos usuários.
      </p>

      <p>
        A implementação de números máscara geralmente é realizada por meio de bibliotecas ou plugins JavaScript, que
        fornecem recursos para definir e aplicar as máscaras desejadas nos campos numéricos de um site ou aplicativo.
      </p>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>

</html>