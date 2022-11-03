<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hervé Jacqueson - Portfolio</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
</head>

<body>
  <header class="py-4">
    <nav class="navbar navbar-expand-md fixed-top navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand text-uppercase fw-bold" href="#">
          <span class="bg-primary bg-gradient p-1 rounded-3 text-light">Hervé</span> Jacqueson
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#hervejacqueson">Qui suis-je ?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#expertise">Expertise</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>

    <!-- Hervé Jacqueson -->
    <section id="hervejacqueson" class="my-5">
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-12 col-md-6">
            <h1 class="fw-bold"><b class="fw-bold">Hervé Jacqueson</b> Développeur Web Junior</h1>
            <h2 class="fw-light">Bienvenue dans mon portfolio</h2>
            <a href="#expertise" class="btn btn-primary mt-5">Mon expertise web</a>
          </div>
          <div class="col-12 col-md-6" style="display: flex;justify-content: center;">
            <img src="../img/portrait.png" alt="Hervé Jacqueson" class="w-75">
          </div>
        </div>
      </div>
    </section>

    <!-- Expertise -->
    <section id="expertise" class="py-5 bg-light">
      <div class="container">
        <h2 class="mb-0">Mon expertise</h2>
        <h3 class="fw-light fs-5">Développement web</h3>
        <!-- Developpement -->
        <div class="row align-items-center gy-4 mt-4">
            <!-- Progress bar -->
            <div class="col-12 col-md-7">
              <div class="mb-3 p-3 bg-white">
                <div class="row align-items-center">
                  <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                    <div class="d-flex align-items-center">
                      <i class="fab fa-html5 fa-2x me-3 text-primary"></i>
                      <p class="fw-bold m-0">HTML5</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="progress shadow">
                      <div class="progress-bar progress-bar-striped progress-bar-animated w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                        aria-valuemax="100" data-bs-toggle="tooltip" title="100%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-3 p-3 bg-white">
                <div class="row align-items-center">
                  <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                    <div class="d-flex align-items-center">
                      <i class="fab fa-css3-alt fa-2x me-3 text-primary"></i>
                      <p class="fw-bold m-0">CSS3</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="progress shadow">
                      <div class="progress-bar progress-bar-striped progress-bar-animated w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                        aria-valuemax="100" data-bs-toggle="tooltip" title="100%">
                      </div>
                    </div>
                  </div>
                </div>    
              </div>
              <div class="mb-3 p-3 bg-white">
                <div class="row align-items-center">
                  <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                    <div class="d-flex align-items-center">
                      <i class="fab fa-sass fa-2x me-3 text-primary"></i>
                      <p class="fw-bold m-0">SASS</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="progress shadow">
                      <div class="progress-bar progress-bar-striped progress-bar-animated w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100" data-bs-toggle="tooltip" title="75%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-3 p-3 bg-white">
                <div class="row align-items-center">
                  <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                    <div class="d-flex align-items-center">
                      <i class="fab fa-js fa-2x me-3 text-primary"></i>
                      <p class="fw-bold m-0">JS</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="progress shadow">
                      <div class="progress-bar progress-bar-striped progress-bar-animated w-75" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                        aria-valuemax="100" data-bs-toggle="tooltip" title="75%">
                      </div>
                    </div>
                  </div>
                </div>  
              </div>
              <div class="mb-3 p-3 bg-white">
                <div class="row align-items-center">
                  <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                    <div class="d-flex align-items-center">
                      <i class="fab fa-bootstrap fa-2x me-3 text-primary"></i>
                      <p class="fw-bold m-0">BS5</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="progress shadow">
                      <div class="progress-bar progress-bar-striped progress-bar-animated w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100" data-bs-toggle="tooltip" title="75%">
                      </div>
                    </div>
                  </div>
                </div>                           
              </div>
              <div class="mb-3 p-3 bg-white">
                <div class="row align-items-center">
                  <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                    <div class="d-flex align-items-center">
                      <i class="fab fa-react fa-2x me-3 text-primary"></i>
                      <p class="fw-bold m-0">React</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="progress shadow">
                      <div class="progress-bar progress-bar-striped progress-bar-animated w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                        aria-valuemax="100" data-bs-toggle="tooltip" title="50%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-12 offset-md-1 col-md-4">
              <img src="./img/code.jpg" alt="écran montrant du code php" class="w-100">
          </div>
        </div>


    <section id="portfolio" class="py-5">
      <div class="container">
        <h2 class="mb-0">Mon portfolio</h2>
        <h3 class="fw-light fs-5">Projets perso et pro</h3>

        <div class="row gy-4 gy-md-0 mt-4">
          <div class="col-xs-12 col-sm-6 col-lg-3">
            <div class="card mb-4" style="height: 450px;">
              <img src="/img/Booki.png" class="card-img-top" alt="Page d'Accueil Booki">
              <div class="card-body overflow-scroll">
                <h4 class="card-title">Booki</h4>
                <p class="card-text">
                  Booki est un site factice de planification de voyage, 
                  en langage HTML et CSS.</br>  
                  </p>
              </div>
              <div class="card-footer">
                <p>
                  <a href="https://hjacqueson.github.io/Booki/" target="_blank">Faîtes vous une idée</a></br>
                  <a href="https://github.com/HJacqueson/Ohmyfood" target="_blank">GitHub</a>  
                </p>
                <a class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#infoBooki"
                   aria-controls="infoBooki">Prévisualisation</a>
              </div>
              <div class="offcanvas offcanvas-bottom h-100" tabindex="-1" id="infoBooki"
                   aria-labelledby="titleBooki">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="titleBooki">Booki</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                          aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <!-- Carousel -->
                  <div id="carouselBooki" class="carousel slide shadow h-100" data-bs-ride="carousel"
                       data-bs-touch="true">
                    <div class="carousel-inner h-100">
                      <div class="carousel-item w-100 active" data-bs-interval="10000">
                        <img src="./img/Booki.png" class="d-block w-100" alt="Image slide Booki 1">
                      </div>
                      <div class="carousel-item w-100" data-bs-interval="2000">
                        <img src="/img/Booki 1.png" class="d-block w-100" alt="Image slide Booki 2">
                      </div>
                      <div class="carousel-item w-100">
                        <img src="/img/Booki 2.png" class="d-block w-100" alt="Image slide Booki 3">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBooki"
                            data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(100%);"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselBooki"
                            data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(100%);"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-lg-3">
            <div class="card mb-4" style="height: 450px;">
              <img src="/img/Ohmyfood.png" class="card-img-top" alt="Page d'Accueil Ohmyfood">
              <div class="card-body overflow-scroll">
                <h4 class="card-title">Ohmyfood</h4>
                <p class="card-text">Ohmyfood est un site factice de planification de voyage, 
                  en langage HTML et CSS. Il contient de nombreuses animations CSS.</br>
                </p>
              </div>
              <div class="card-footer">
                <p>
                  <a href="https://hjacqueson.github.io/Ohmyfood/index.html" target="_blank">Faîtes vous une idée</a></br>
                  <a href="https://github.com/HJacqueson/Ohmyfood" target="_blank">GitHub</a>
                </p>
                <a class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#infoOhmyfood"
                   aria-controls="infoOhmyfood">Prévisualisation</a>
              </div>
              <div class="offcanvas offcanvas-bottom h-100" tabindex="-1" id="infoOhmyfood"
                   aria-labelledby="titleOhmyfood">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="titleOhmyfood">Ohmyfood</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                          aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <!-- Carousel -->
                  <div id="carouselOhmyfood" class="carousel slide shadow h-100" data-bs-ride="carousel"
                       data-bs-touch="true">
                    <div class="carousel-inner h-100">
                      <div class="carousel-item w-100 active" data-bs-interval="10000">
                        <img src="/img/Ohmyfood.png" class="d-block w-100" alt="Image slide Ohmyfood 1">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 1</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item w-100" data-bs-interval="2000">
                        <img src="/img/Ohmyfood 1.png" class="d-block w-100" alt="Image slide Ohmyfood 2">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 2</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item w-100">
                        <img src="/img/Ohmyfood 2.png" class="d-block w-100" alt="Image slide Ohmyfood 3">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 3</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item w-100">
                        <img src="/img/Ohmyfood 3.png" class="d-block w-100" alt="Image slide Ohmyfood 4">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 3</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselOhmyfood"
                            data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(100%);"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselOhmyfood"
                            data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(100%);"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-lg-3">
            <div class="card" style="height: 450px;">
              <img src="/img/La Panthère.png" class="card-img-top" alt="Page d'Accueil Agence La Panthère">
              <div class="card-body overflow-scroll">
                <h4 class="card-title">La Panthère</h4>
                <p class="card-text">La Panthère est un site factice d'Agence de designe Web, 
                  en langage HTML et CSS. Il a été conçu pour respecter au maximum les normes WCAG d'accessibilité.</br>
                </p>
              </div>
              <div class="card-footer">
                <p>
                  <a href="https://hjacqueson.github.io/La_Panthere/" target="_blank">Faîtes vous une idée</a></br>
                  <a href="https://github.com/HJacqueson/La_Panthere" target="_blank">GitHub</a>  
                </p>
                <a class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#infoLapanthere"
                   aria-controls="infoLapanthere">Prévisualisation</a>
              </div>
              <div class="offcanvas offcanvas-bottom h-100" tabindex="-1" id="infoLapanthere"
                   aria-labelledby="titleLapanthere">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="titleLapanthere">La Panthère</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                          aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <!-- Carousel -->
                  <div id="carouselLapanthere" class="carousel slide shadow h-100" data-bs-ride="carousel"
                       data-bs-touch="true">
                    <div class="carousel-inner h-100">
                      <div class="carousel-item w-100 active" data-bs-interval="10000">
                        <img src="/img/La Panthère.png" class="d-block w-100" alt="Image slide La Panthère 1">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 1</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item w-100" data-bs-interval="2000">
                        <img src="/img/La Panthère 1.png" class="d-block w-100" alt="Image slide La Panthère 2">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 2</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item w-100">
                        <img src="/img/La Panthère 2.png" class="d-block w-100" alt="Image slide La Panthère 3">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 3</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item w-100">
                        <img src="/img/La Panthère 3.png" class="d-block w-100" alt="Image slide La Panthère 4">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 3</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item w-100">
                        <img src="/img/La Panthère 4.png" class="d-block w-100" alt="Image slide La Panthère 5">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 3</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item w-100">
                        <img src="/img/La Panthère 5.png" class="d-block w-100" alt="Image slide La Panthère 6">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 3</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselLapanthere"
                            data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(100%);"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselLapanthere"
                            data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(100%);"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-lg-3">
            <div class="card" style="height: 450px;">
              <img src="/img/Kanap.png" class="card-img-top" alt="Page d'Accueil Kanap">
              <div class="card-body overflow-scroll">
                <h4 class="card-title">Kanap</h4>
                <p class="card-text">Kanap est un site factice de e-commerce de vente de canapés. Il est en langages HTML, SASS et Javascript</p>
              </div>
              <div class="card-footer">
                <p>
                  <a href="https://github.com/HJacqueson/Kanap" target="_blank">GitHub</a>  
                </p>
                <a class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#infoKanap"
                   aria-controls="infoKanap">Prévisualistation</a>
              </div>
              <div class="offcanvas offcanvas-bottom h-100" tabindex="-1" id="infoKanap"
                   aria-labelledby="titleKanap">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="titleKanap">Projet 4</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                          aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <!-- Carousel -->
                  <div id="carouselKanap" class="carousel slide shadow h-100" data-bs-ride="carousel"
                       data-bs-touch="true">
                    <div class="carousel-inner h-100">
                      <div class="carousel-item w-100 active" data-bs-interval="10000">
                        <img src="/img/Kanap.png" class="d-block w-100" alt="Image slide Kanap 1">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 1</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item w-100" data-bs-interval="2000">
                        <img src="/img/Kanap 1.png" class="d-block w-100" alt="Image slide Kanap 2">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 2</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item w-100">
                        <img src="/img/Kanap 2.png" class="d-block w-100" alt="Image slide Kanap 3">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 3</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item w-100">
                        <img src="/img/Kanap 3.png" class="d-block w-100" alt="Image slide Kanap 4">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 3</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item w-100">
                        <img src="/img/Kanap 4.png" class="d-block w-100" alt="Image slide Kanap 5">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 3</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselKanap"
                            data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(100%);"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselKanap"
                            data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(100%);"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row gy-4 gy-md-0 mt-4">
          <div class="col-xs-12 col-sm-6 col-lg-3">
            <div class="card" style="height: 450px;">
              <img src="/img/Piiquante.png" class="card-img-top" alt="Page d'Accueil Piiquante">
              <div class="card-body overflow-scroll">
                <h4 class="card-title">Piiquante</h4>
                <p class="card-text">
                  Piiquante est un application factice gastronomique de sauces piquantes, 
                  en langage Javascript. J'ai conçu essentiellement l'API REST de backend, entièrement en JS, grâce à Node.js et le Framework Express.js</br>  
                  </p>
              </div>
              <div class="card-footer">
                <p>
                  <a href="https://github.com/HJacqueson/Piiquante" target="_blank">GitHub</a>
                </p>
                <a class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#infoPiiquante"
                   aria-controls="infoPiiquante">Prévisualisation</a>
              </div>
              <div class="offcanvas offcanvas-bottom h-100" tabindex="-1" id="infoPiiquante"
                   aria-labelledby="titlePiiquante">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="titlePiiquante">Piiquante</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                          aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <!-- Carousel -->
                  <div id="carouselPiiquante" class="carousel slide shadow h-100" data-bs-ride="carousel"
                       data-bs-touch="true">
                    <div class="carousel-inner h-100">
                      <div class="carousel-item w-100 active" data-bs-interval="10000">
                        <img src="./img/Piiquante.png" class="d-block w-100" alt="Image slide Piiquante 1">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 1</h5>
                          <p>Booki est un site factice de planification de voyage, 
                            en langage HTML et CSS.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item w-100" data-bs-interval="2000">
                        <img src="/img/Piiquante 1.png" class="d-block w-100" alt="Image slide Piiquante 2">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 2</h5>
                          <p>Booki est un site factice de planification de voyage, 
                            en langage HTML et CSS.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item w-100">
                        <img src="/img/Piiquante 2.png" class="d-block w-100" alt="Image slide Piiquante 3">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 3</h5>
                          <p>Booki est un site factice de planification de voyage, 
                            en langage HTML et CSS.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item w-100">
                        <img src="/img/Piiquante 3.png" class="d-block w-100" alt="Image slide Piiquante 4">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 3</h5>
                          <p>Booki est un site factice de planification de voyage, 
                            en langage HTML et CSS.</p>
                        </div> -->
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPiiquante"
                            data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(100%);"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselPiiquante"
                            data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(100%);"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-lg-3">
            <div class="card" style="height: 450px;">
              <img src="/img/Groupomania.png" class="card-img-top" alt="Page d'Accueil Groupomania">
              <div class="card-body" style="overflow: scroll;">
                <h4 class="card-title">Groupomania</h4>
                <p class="card-text">Groupomania est un Réseau Social d'entreprise factice, 
                  en langage Javascript. J'ai conçu l'application dans son ensemble. Pour le frontend, je me suis servi des frameworks React.js et Bootstrap. Pour le backend, je me suis servi de Node.js et du framework Express.js.
              </div>
              <div class="card-footer">
                <p>
                  <a href="https://github.com/HJacqueson/Groupomania" target="_blank">GitHub</a></br>
                </p>
                <a class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#infoGroupomania"
                   aria-controls="infoGroupomania">Prévisualisation</a>
              </div>
              <div class="offcanvas offcanvas-bottom h-100" tabindex="-1" id="infoGroupomania"
                   aria-labelledby="titleGroupomania">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="titleGroupomania">Groupomania</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                          aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <!-- Carousel -->
                  <div id="carouselGroupomania" class="carousel slide shadow h-100" data-bs-ride="carousel"
                       data-bs-touch="true">
                    <div class="carousel-inner h-100">
                      <div class="carousel-item w-100 active" data-bs-interval="10000">
                        <img src="/img/Groupomania.png" class="d-block w-100" alt="Image slide Groupomania 1">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 1</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item w-100" data-bs-interval="2000">
                        <img src="/img/Groupomania 1.png" class="d-block w-100" alt="Image slide Groupomania 2">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 2</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item w-100">
                        <img src="/img/Groupomania 2.png" class="d-block w-100" alt="Image slide Groupomania 3">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 3</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item w-100">
                        <img src="/img/Groupomania 3.png" class="d-block w-100" alt="Image slide Groupomania 4">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 3</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item w-100">
                        <img src="/img/Groupomania 4.png" class="d-block w-100" alt="Image slide Groupomania 5">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 3</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item w-100">
                        <img src="/img/Groupomania 5.png" class="d-block w-100" alt="Image slide Groupomania 6">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 3</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div> -->
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselGroupomania"
                            data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(100%);"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselGroupomania"
                            data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(100%);"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
          <!-- </div> -->
        </div>
      </div>
    </section>
    <section id="contact" class="py-5 bg-light">
      <div class="container">
        <h2 class="mb-0">Un projet de création de Site Web ?</h2>
        <h3 class="fw-light fs-5">N'hésitez pas à me contacter</h3>

        <div class="row gy-4 mt-4">
          <div class="col-12 col-md-5">
            <img src="../img/shake-hands.jpg" alt="Image d'une tasse de café" width="100%" class="rounded-3 shadow">
          </div>
          <div class="col-12 offset-md-1 col-md-6">

            <!-- Formulaire -->
            <form class="row" method="post">
              <div class="col-6 my-2">
                <label for="prenom" class="form-label">Prénom</label>
                <input name="prenom" type="text" class="form-control" id="prenom" required>
              </div>
              <div class="col-6 my-2">
                <label for="nom" class="form-label">Nom</label>
                <input name="nom" type="text" class="form-control" id="nom" required>
              </div>
              <div class="col-12 my-2">
                <label for="email" class="form-label">Address Mail</label>
                <input name="email" type="email" class="form-control" id="email" required>
              </div>
              <div class="col-6 my-2">
                <label for="sujet" class="form-label">Sujet</label>
                <input name="sujet" type="sujet" class="form-control" id="sujet" required>
              </div>
              <div class="col-12 my-2">
                <label for="message" class="form-label">Message</label>
                <textarea name="message" class="form-control" id="message" rows="3" required></textarea>
              </div>
              <div class="col-12 my-2">
                <button type="submit" class="btn btn-primary w-100">Envoyer</button>
              </div>
            </form>
            <?php
            if(isset($_POST['message'])) {
                $message = "Ce message vous a été envoyé via le site herve-jacqueson.fr
                Prénom : " .  $_POST['prenom'] . "
                Nom : " . $_POST['nom'] . "
                Email : " . $_POST['email'] . "
                Message : " . $_POST['message'];
                $retour = mail("herve.jacqueson@gmail.com", $_POST['sujet'], $message, "From:hervejacqueson@msn.com\r\nReply-to:" . $_POST['email']);    
                if ($retour) {
                    $alert = "Votre message a bien été envoyé";
                    echo "<script type='text/javascript'>alert('$alert');</script>";
                }
            }        
            ?>
          </div>
        </div>
      </div>
    </section>

  </main>
  <footer class="border-top">
    <div class="container py-5">
      <div class="row gy-4 align-items-center">
        <div class="col-12 col-md-4">
          <a class="navbar-brand text-dark text-uppercase fw-bold" href="https://youtu.be/Ep_blZhvI2A">
            <span class="bg-primary bg-gradient p-1 rounded-3 text-light">Hervé</span> Jacqueson
          </a>
        </div>
        <div class="col-12 col-md-4 text-md-center">
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#" class="text-decoration-none text-dark" data-bs-toggle="modal"
                 data-bs-target="#mentionsLegales">Mentions légales</a>
            </li>
          </ul>
        </div>
        <div class="col-12 col-md-4 text-md-end">
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <href="https://linkedin.com/in/hjacqueson" target="_blank" title="linkedIn" class="text-decoration-none text-dark" data-bs-toggle="tooltip" title="linkedIn" name="linkedIn">
                <i class="fab fa-linkedin fa-2x"></i>
          </href>
            </li>
            <li class="list-inline-item">
              <href="https://twitter.com/HJacqueson" target="_blank" title="Twitter" class="text-decoration-none text-dark" data-bs-toggle="tooltip" title="Twitter" name="Twitter">
                <i class="fab fa-twitter-square fa-2x"></i>
          </href>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="mentionsLegales" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content" id="exampleModalLabel">
          <div class="modal-header">
            <h4 class="modal-title">Mentions Légales</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="background-image: url(/img/jurasic-park.webp);">
            
            <h3>1 - Édition du site</h3>
            <p>
                En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site internet https://herve-jacqueson.fr/ l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi:
                Propriétaire du site : Jacqueson Hervé - Contact : herve.jacqueson@gmail.com - Tél : 0671049817 - Adresse : 20 rue des oeillets, 84000 Avignon.
                Directeur de la publication : Jacqueson Hervé - Contact : herve.jacqueson@gmail.com
                Hébergeur : Hostinger - Tél : 08 92 97 70 93 - Adresse : 143 Rue Emile Julien, 34070 Montpellier, France
                Délégué à la protection des données : Jacqueson Hervé - Contact : herve.jacqueson@gmail.com
            </p>
            <h3>2 - Propriété intellectuelle et contrefaçons.</h3>
            <p>
                Jacqueson Hervé est propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, architecture, icônes et sons.
                Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de Jacqueson Hervé.
                Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.
            </p>
            <h3>3 - Limitations de responsabilité.</h3>
            <p>
                Jacqueson Hervé ne pourra être tenu pour responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site https://herve-jacqueson.fr/.
                Jacqueson Hervé décline toute responsabilité quant à l’utilisation qui pourrait être faite des informations et contenus présents sur https://herve-jacqueson.fr/.
                Jacqueson Hervé s’engage à sécuriser au mieux le site https://herve-jacqueson.fr/, cependant sa responsabilité ne pourra être mise en cause si des données indésirables sont importées et installées sur son site à son insu.
                Des espaces interactifs (espace contact ou commentaires) sont à la disposition des utilisateurs. Jacqueson Hervé se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données.
                Le cas échéant, Jacqueson Hervé se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie …).
            </p>
            <h3>4 - CNIL et gestion des données personnelles.</h3>
            <p> Conformément aux dispositions de la loi 78-17 du 6 janvier 1978 modifiée, l’utilisateur du site https://herve-jacqueson.fr/ dispose d’un droit d’accès, de modification et de suppression des informations collectées. Pour exercer ce droit, envoyez un message à notre Délégué à la Protection des Données : Jacqueson Hervé - herve.jacqueson@gmail.com
                Pour plus d'informations sur la façon dont nous traitons vos données (type de données, finalité, destinataire...), lisez notre <a href="politique-confidentialite.html">https://herve-jacqueson.fr/politique-confidentialite/</a>
            </p>
            <h3>5 - Liens hypertextes et cookies</h3>
            <p>
                Le site https://herve-jacqueson.fr/ contient des liens hypertextes vers d’autres sites et dégage toute responsabilité à propos de ces liens externes ou des liens créés par d’autres sites vers https://herve-jacqueson.fr/
                La navigation sur le site https://herve-jacqueson.fr/ est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur.
                Un "cookie" est un fichier de petite taille qui enregistre des informations relatives à la navigation d’un utilisateur sur un site. Les données ainsi obtenues permettent d'obtenir des mesures de fréquentation, par exemple.
                Vous avez la possibilité d’accepter ou de refuser les cookies en modifiant les paramètres de votre navigateur. Aucun cookie ne sera déposé sans votre consentement.
                Les cookies sont enregistrés pour une durée maximale de mois.
                Pour plus d'informations sur la façon dont nous faisons usage des cookies, lisez notre https://herve-jacqueson.fr/politique-confidentialité/
            <h3>6 - Droit applicable et attribution de juridiction.</h3>
            <p>
                Tout litige en relation avec l’utilisation du site https://herve-jacqueson.fr/ est soumis au droit français. En dehors des cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux compétents de Avignon.
            </p>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
            </script>
    <script>
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    </script>
  </footer>
</body>

</html>