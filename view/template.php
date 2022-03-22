<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo BASE_URL ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo BASE_URL ?>assets/img/favicon.png">
  <title>
    Tell About
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?php echo BASE_URL?>assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?php echo BASE_URL ?>assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="<?php echo BASE_URL ?>assets/js/42d5adcbca.js" type="text/javascript"></script>
  <link href="<?php echo BASE_URL ?>assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo BASE_URL ?>assets/css/soft-design-system.css" rel="stylesheet" />
</head>

<body class="about-us">
  <!-- Navbar  -->
  <nav class="navbar navbar-expand-lg  position-fixed blur border-bottom z-index-3 shadow w-100 mt-1 d-none d-lg-block my-3 py-2">
  <div class="container-fluid">
    <a class="navbar-brand font-weight-bolder ms-3" href="<?= BASE_URL ?>"  data-placement="bottom">
      TellAbout
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="navbar-nav navbar-nav-hover mx-auto">
        <li class="nav-item px-3">
          <a class="nav-link" href="<?php echo BASE_URL?>">
            Home
          </a>
        </li>

        <li class="nav-item px-3">
          <a class="nav-link" href="<?php echo BASE_URL?>post/">
            Post
          </a>
        </li>

        <li class="nav-item px-3">
          <a class="nav-link"  href="<?php echo BASE_URL?>user/login/">
            Entrar/Cadastrar
          </a>
        </li>
      </ul>
      <!-- Dropdown of perfil -->
      <?php if (isset($_SESSION['IdOfUser']) and !empty($_SESSION['IdOfUser'])) : ?>
      <ul class="navbar-nav">
      <div class="dropdown">
      <button class="btn bg-gradient-dark  btn-round mb-0 me-1 dropdown-toggle"  type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <a href="javascript:;" class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="<?php echo BASE_URL ?>assets/img/team-4.jpg">                
            </a>             
        </button>
            <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item border-radius-md" href="<?php echo BASE_URL?>user/perfil">Meu perfil</a></li>
              <li><a class="dropdown-item border-radius-md" href="<?php echo BASE_URL?>user/post">Meus post</a></li>
              <li><a class="dropdown-item border-radius-md" href="<?php echo BASE_URL?>post/new">Criar post</a></li>
              <li><a class="dropdown-item border-radius-md" href="<?php echo BASE_URL?>user/update">Editar Perfil</a></li>
              <li><a class="dropdown-item border-radius-md" href="<?php echo BASE_URL?>/home/exit">Sair</a></li>
            </ul>
          </div>
      </ul>
      <?php endif ?>
      <!-- End Dropdown -->
    </div>
  </div>
</nav>

</div>
  <!-- End Navbar -->
  <!-- -------- START HEADER 7 w/ text and video ------- -->
  <header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url('<?php echo BASE_URL ?>assets/img/oceam.jpg');">
      <span class="mask bg-gradient-info opacity-8"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mx-auto my-auto">
            <h1 class="text-white">Post fotos</h1>
            <p class="lead mb-4 text-white opacity-8">Compartilhe cada os melhores momentos da sua vida.</p>
            <button class="btn bg-white text-dark"><a href="<?php echo BASE_URL . 'user/new' ?>">Create Account</a></button>
            <h6 class="text-white mb-2 mt-5">rede social</h6>
            <div class="d-flex justify-content-center">
              <a href="javascript:;"><i class="fab fa-facebook text-lg text-white me-4"></i></a>
              <a href="javascript:;"><i class="fab fa-instagram text-lg text-white me-4"></i></a>
              <a href="javascript:;"><i class="fab fa-twitter text-lg text-white me-4"></i></a>
              <a href="javascript:;"><i class="fab fa-google-plus text-lg text-white"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="position-absolute w-100 z-index-1 bottom-0">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="moving-waves">
            <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
            <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
            <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
            <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,1" />
          </g>
        </svg>
      </div>
    </div>
  </header>
  
  <?php $this->loadView($viewName, $viewData) ?>


  <footer class="footer pt-5 mt-5">
    <hr class="horizontal dark mb-5">
    <div class="container">
      <div class=" row">
        <div class="col-md-3 mb-4 ms-auto">
          <div>
            <h6 class="text-gradient text-primary font-weight-bolder">Soft UI Design System</h6>
          </div>
          <div>
            <h6 class="mt-3 mb-2 opacity-8">Social</h6>
            <ul class="d-flex flex-row ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim/" target="_blank">
                  <i class="fab fa-facebook text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                  <i class="fab fa-twitter text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                  <i class="fab fa-dribbble text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                  <i class="fab fa-github text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                  <i class="fab fa-youtube text-lg opacity-8"></i>
                </a>
              </li>
            </ul>
          </div>
      </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-gradient text-primary text-sm">Navegação</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="" target="_blank">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="" target="_blank">
                  Post
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="" target="_blank">
                  Cadastro
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
          <div>
            <h6 class="text-gradient text-primary text-sm">Legal</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/terms" target="_blank">
                  Terms & Conditions
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/privacy" target="_blank">
                  Privacy Policy
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">
                  Licenses (EULA)
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12">
          <div class="text-center">
            <p class="my-4 text-sm">
              All rights reserved. Copyright © <script>
                document.write(new Date().getFullYear())
              </script> Soft UI Design System by
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="<?php echo BASE_URL ?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo BASE_URL ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo BASE_URL ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="<?php echo BASE_URL ?>assets/js/plugins/countup.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="<?php echo BASE_URL ?>assets/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="<?php echo BASE_URL ?>assets/js/soft-design-system.min.js" type="text/javascript"></script>
</body>

</html>
