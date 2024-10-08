<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style-tela3.css">
  <title>Sistema</title>
</head>

<body data-bs-theme="" class="body">
  <!--NAVBAR-->

  <nav class="navbar col-12 position-fixed navbar-expand-lg  navbar-custom" data-bs-theme="dark" style="z-index:999;">
    <div class="container-fluid col-11 m-auto">
      <a class="navbar-brand" href="#"><img id="logotelecall" src="imagens/imagens-tela3/logo-telecall.png"
          style="margin-right: 1rem;" alt="logo-telecall"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" >Home</a>
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
              <li><a class="dropdown-item" href="NumMas.php">Número máscara</a></li>
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

  <!--IMAGEM EM CARROSSEL-->
  <div id="carouselExampleControls" class="carousel slide carousel-fade col-11 m-auto" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagens/imagens-tela3/PABX2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagens/imagens-tela3/CEL-EMPRESARIAL-2-1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagens/imagens-tela3/INTERNET-DEDICADA.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--O QUE É CPAAS-->
  <hr>
  <div class="row row-cols-1 row-cols-md-2 g-4 col-9 m-auto">

    <div class="m-auto">
      <img src="imagens/imagens-tela3/cpaas_1.png" alt="Celular Telecall" style="width: 90%; margin-right: -2rem;">
    </div>
    <div class="cpaas col-6 m-auto">
      <h1 class="text-right">O que é CPaaS?</h1>
      <h3 class="text-right">
        O futuro da comunicação já chegou!
      </h3>
      <p class="text-right">
        O CPaaS (Plataforma de Comunicação como Serviço) é a solução perfeita para o seu negócio. O serviço oferece a
        estrutura completa para que canais de comunicação como mensagens de texto SMS, chamadas de vídeo e de voz,
        e-mail, e outros, estejam integrados de forma fácil nos sistemas das empresas.
      </p>

    </div>
  </div>
  <hr>

  <!--JANELAS DE SERVIÇOS-->
  <div class="titleservice">
    <h1 class=" col-10 m-auto text-center">Serviços</h1>
  </div>

  <div class="row row-cols-1 row-cols-md-4 g-4 col-11 m-auto">
    <div class="col">
      <div class="card">
        <img src="imagens/imagens-tela3/2FA2-1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">2FA</h5>
          <p class="card-text">Método de segurança de gerenciamento de identidade e acesso.</p>
          <div class="text-center">
            <a href="2FA.php" class="btn btn-primary">Saiba mais</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="imagens/imagens-tela3/numero-mascara2-1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Número máscara</h5>
          <p class="card-text">Tecnologia desenvolvida para gerenciar contatos telefônicos das empresas.</p>
          <div class="text-center">
            <a href="NumMas.php" class="btn btn-primary">Saiba mais</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="imagens/imagens-tela3/google-verified-calls2-1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Google Verified Calls</h5>
          <p class="card-text">Recurso que identifica a origem dos números durante as ligações.</p>
          <div class="text-center">
            <a href="GoogleVC.php" class="btn btn-primary">Saiba mais</a>
          </div>
        </div>
      </div>
    </div>


    <div class="col">
      <div class="card">
        <img src="imagens/imagens-tela3/sms-programavel2-1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">SMS Programável</h5>
          <p class="card-text">Programe suas notificações por SMS para serem enviados quando quiser.</p>
          <div class="text-center">
            <a href="SMSProg.php" class="btn btn-primary">Saiba mais</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--UTILIZAÇÕES-->
  <div class="titleutility">
    <h1 class=" col-10 m-auto text-center">Utilizações</h1>
  </div>

  <div class="row row-cols-1 row-cols-md-4 g-4 col-11 m-auto">
    <div class="icons">
      <i class="fa-solid fa-boxes-stacked fa-6x text-center card-img-top" style="color:#0c4c7c"></i>
      <h3 class="text-center">Logística</h1>
        <p class="text-center" style="font-weight: 500;">Acesso seguro com 2FA.

          Uso de números mascarados para proteção de funcionário e cliente.

          Mantenha o cliente informado sobre entrega e serviços. </p>
    </div>
    <div class="icons">
      <i class="fa-solid fa-cart-flatbed fa-6x text-center card-img-top" style="color:#0c4c7c"></i>
      <h3 class="text-center">Varejo</h1>
        <p class="text-center" style="font-weight: 500;">Compra segura com 2FA.

          Avisos sobre compras e entregas.

          Upsell com novas ofertas e vantagens via SMS</p>
    </div>
    <div class="icons">
      <i class="fa-solid fa-phone fa-6x text-center card-img-top" style="color:#0c4c7c"></i>
      <h3 class="text-center">Call Center</h1>
        <p class="text-center" style="font-weight: 500;">Melhore taxas de abertura utilizando alertas SMS para
          confirmações.

          Economia de números com o uso de um único número máscara por todos os agentes.</p>
    </div>
    <div class="icons">
      <i class="fa-solid fa-user-nurse fa-6x text-center card-img-top" style="color:#0c4c7c"></i>
      <h3 class="text-center">Saúde</h1>
        <p class="text-center" style="font-weight: 500;">Acesso seguro com 2FA.

          Melhore o agendamento e reduza faltas com lembretes por SMS.

          Tokens de autorização para procedimentos com 2FA.</p>
    </div>
  </div>

  <!--POR QUE A TELECALL/IMAGEM DO CELULAR-->
  <hr>
  <div class="row row-cols-1 row-cols-md-3 g-4 col-10 m-auto">
    <div class="why col-6 m-auto">
      <h1 class="text-right">Por que a Telecall?</h1>
      <p class="text-right">
        CONFIANÇA Empresas que já conhecem e confiam no nosso trabalho
      </p>
      <p>
        AGILIDADE Aplicativos de rápida implementação para qualquer negócio
      </p>
      <p>
        GARANTIA DE REDE Rede própria de alta capacidade e controle total ponta a ponta
      </p>
      <p>
        SUPORTE AO CLIENTE Representantes locais de vendas e suporte
      </p>
      <p>
        PREÇO Melhor custo benefício para um conjunto completo de serviços
      </p>
    </div>
    <div class="m-auto">
      <img src="imagens/imagens-tela3/celular-telecall.png" alt="Celular Telecall" style="width: 150%;">
    </div>
  </div>


  <!--SOBRE NÓS  -->
  <hr>
  <div class="sobre col-8 m-auto">
    <h2 class="text-center" id="sobre-nos">Sobre nós</h2>
    <p class="text-justify" style="font-weight: 500;">A Telecall é uma operadora de telecomunicações brasileira que
      oferece a seus clientes o mais
      alto padrão de qualidade, velocidade e acessibilidade em soluções de comunicação. Serviços que incluem uma ampla
      gama de valores agregados, oferecendo aos clientes operações mais produtivas, inovadoras e eficazes. Com mais de
      20 anos de experiência na indústria global, a Telecall hoje é sinônimo de qualidade e eficiência.</p>
  </div>
  <hr>


  <!--RODAPÉ -->
  <footer>
    <div class="text-center">
      <div class="col-11 m-auto">
        <h2 class="text-center">Contato</h2>
        <div class="col-1 m-auto" style="width: 130px;">
          <a href="https://api.whatsapp.com/send?phone=552130301010&text=%23Comercial" target="_blank">
            <i class="fa-brands fa-whatsapp"></i>
          </a>

          <a href="https://www.facebook.com/TelecallBr/?locale=pt_BR" target="_blank">
            <i class="fa-brands fa-facebook"></i>
          </a>

          <a href="#" target="_blank"></a>
          <i class="fa-brands fa-instagram"></i>
          </a>

          <a href="https://www.linkedin.com/company/telecall/" target="_blank">
            <i class="fa-brands fa-linkedin"></i>
          </a>
        </div>
      </div>
      <p class="">(21) 3030-1010</p>
      <p class="">Copyright © 2023 | Telecall. Todos os direitos reservados.</p>

    </div>
  </footer>
  <script src="javascript/script-tela3.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


</body>

</html>