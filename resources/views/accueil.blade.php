<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - EH DR. MADJEBEUR TAMI</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/accueil.css') }}">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
    />
    <script src="https://kit.fontawesome.com/efb3069b65.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
    

    <title>Page d'accueil</title>
  </head>

  <body>
    <header id="header" >
    <div id="nav-bar">
      <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light">
        <div class="container-fluid">
          <a class=" logo-container navbar-brand col-1  " href="/" >
            <img src="img/hlog.png" alt="" class="logo img-fluid"/>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav fw-semibold">
              <li class="nav-item offset-lg-6 offset-md-1 offset-6">
                <a class="nav-link" aria-current="page" href="/"> ACCUEIL</a>
              </li>
              <li class="nav-item dropdown offset-lg-1 offset-md-1 offset-6">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  PATIENT
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/droits"> Vos droits </a></li>
                  <li><a class="dropdown-item" href="/dons"> Dons et prélevements</a></li>
                  <li>
                    <a class="dropdown-item" href="/sejour"> Votre séjour</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown offset-lg-1 offset-md-1 offset-6">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  A PROPOS
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/presentation"> Présentation de l'EH </a></li>
                  <li><a class="dropdown-item" href="/mot"> Mot du Directeur </a></li>
                  <li>
                    <a class="dropdown-item" href="/informations"> Informations pratiques</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown offset-lg-1 offset-md-1 offset-6">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  SERVICES
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/cardiologie"> Cardiologie </a></li>
                  <li><a class="dropdown-item" href="/rhumatologie">Rhumatologie</a></li>
                  <li>
                    <a class="dropdown-item" href="/nephrologie">nephrologie</a>
                  </li>
                  <li><a class="dropdown-item" href="/infectiologie">Infectiologie</a></li>

                  <li>
                    <a class="dropdown-item" href="/pneumologie">Pneumologie</a>
                  </li>
                  <li><a class="dropdown-item" href="/hematologie">Hématologie</a></li>
                  <li>
                    <a class="dropdown-item" href="/immunoallergologie">Immunoallergologie</a>
                  </li>
                  <li><a class="dropdown-item" href="/dermatologie">Dermatologie</a></li>
                  <li><a class="dropdown-item" href="/geriatrie">Gériatrie</a></li>
                </ul>
              </li>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                  <li class="nav-item offset-lg-6 offset-md-4 offset-6">
                    <a class="nav-link scrollto" aria-current="page" href="#Emplacement"> PLAN</a>
                  </li>
                  <li class="nav-item offset-lg-11 offset-6">
                    @guest
                        <a class="nav-link" href="/login">CONNEXION</a>
                    @else
                        @if(auth()->user()->id < 10)
                            <a class="nav-link" href="{{ url('/dashboardmed') }}">Profile</a>
                        @else
                            <a class="nav-link" href="{{ url('/dashboardpat') }}">Profile</a>
                        @endif
                    @endguest
                </li>
                
                
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <h1>Bienvenue à EH Dr. Madjebeur Tami</h1>
        <h2>Notre établissement hospitalier situé à Oran, Ain El-Turk</h2>
        <a href="/register" class="btn-get-started "> Prenez rendez-vous</a>
      </div>
    </section>

    </header>



<main id="main">







  <!-- CAROUSEL -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p> Le service médecine interne se divise en plusieurs sous spécialités dont celles que notre hopital propose: </p>
      </div>

  <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active c-item">
        <img src="img/hmtami.jpg" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <p>First slide label</p>
          <h1>Some representative placeholder content for the first slide.</h1>
          
        </div>
      </div>
      <div class="carousel-item active c-item">
        <img src="img/EHMT.png" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <p> Notre hopital </p>
          <h1>Une vue sur l'entrée de l'hopital.</h1>
          
        </div>
      </div>
      <div class="carousel-item active c-item">
        <img src="img/hmtami.jpg" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <p>First slide label</p>
          <h1>Some representative placeholder content for the first slide.</h1>
          
        </div>
      </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
        </div>

      </div>

    </section>

  

  

<!-- FIN CAROUSEL -->






     <!-- ======= Services Section ======= -->
     <section id="services" class="services">
      <div class="container">

        <div class="section-title-2">
          <h2>Services</h2>
          <p> Le service médecine interne se divise en plusieurs blabla </p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-heartbeat"></i></i></i></div>
              <h4><a href=""> Cardiologie </a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4><a href=""> Rhumatologie </a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hospital-user"></i></div>
              <h4><a href="">Néphrologie</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4><a href="">infectiologie</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-wheelchair"></i></div>
              <h4><a href="">Pneumologie</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-notes-medical"></i></div>
              <h4><a href="">Hematologie</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4><a href="">Immunoallergologie</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-wheelchair"></i></div>
              <h4><a href="">Dermatologie</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-notes-medical"></i></div>
              <h4><a href="">Gériatrie</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->
    <div class="section-title-2" id="Emplacement">
      <h2>Emplacement de l'hôpital</h2>
      <p>Où nous trouver</p>
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12954.307819612934!2d-0.7553604!3d35.7366214!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7e90008eed0ac3%3A0xe99c185feb3a6c37!2sHOPITAL%20MEDJBEuR%20TAMI!5e0!3m2!1sfr!2sdz!4v1682887703727!5m2!1sfr!2sdz" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
    
  
  </main>

   
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-8 footer-contact">
            <h3>Hopital Dr. Madjebeur Tami</h3>
            <p>
              Ain el El-Turk <br>
              Oran , <br>
              Algérie <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa-solid fa-chevron-right fa-2xs"></i> <a href="#">Home</a></li>
              <li><i class="fa-solid fa-chevron-right fa-2xs"></i> <a href="#">About us</a></li>
              <li><i class="fa-solid fa-chevron-right fa-2xs"></i> <a href="#">Services</a></li>
              <li><i class="fa-solid fa-chevron-right fa-2xs"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa-solid fa-chevron-right fa-2xs"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="fa-solid fa-chevron-right fa-2xs"></i></i><a href="#">MED</a></li>
              <li><i class="fa-solid fa-chevron-right fa-2xs"></i> <a href="#">MED</a></li>
              <li><i class="fa-solid fa-chevron-right fa-2xs"></i> <a href="#">MED</a></li>
              <li><i class="fa-solid fa-chevron-right fa-2xs"></i> <a href="#">MED</a></li>
              <li><i class="fa-solid fa-chevron-right fa-2xs"></i> <a href="#">MED</a></li>
            </ul>
          </div>


          <div class="social-links col-lg-2 col-md-6">
            <a href="#" class="instagram"><i class="fa-solid fa-envelope"></i></a>
            <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
            

          </div>


        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start mx-auto">
        <div class="copyright">
          &copy; Copyright <strong><span> EH Dr Medjebeur Tami</span></strong>. All Rights Reserved
        </div>

      </div>

    </div>





    
  </footer><!-- End Footer -->  



<!-- to the top button  -->

<a href="#header">
  <div class="back-to-top">
    <i class="fa-solid fa-arrow-up"></i>
  </div>
</a>


  

<script>
  // Function to scroll smoothly to the top of the page
  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }

  // Add click event listener to the button
  document.addEventListener('DOMContentLoaded', function() {
    var button = document.querySelector('.back-to-top');
    button.addEventListener('click', scrollToTop);

    // Show the button when scrolling beyond a certain point
    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 100) {
        button.style.display = 'block';
      } else {
        button.style.display = 'none';
      }
    });
  });
</script>

<style>
  .map-container {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 aspect ratio (change this value according to your map's aspect ratio) */
  height: 0;
  overflow: hidden;
}

.map-container iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

  .back-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 40px;
    height: 40px;
    background-color: #333;
    color: #fff;
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    cursor: pointer;
    z-index: 999;
  }

  .back-to-top:hover {
    background-color: #555;
  }
</style>


  <script src="js/main.js"></script>
  <script src="https://kit.fontawesome.com/efb3069b65.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>  
</body>
</html>

