<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/services.css') }}">
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
    <title>Page d'accueil</title>
  </head>
    

  


  <body>
    <header id="header" >
    <div id="nav-bar">
      <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light">
        <div class="container-fluid">
          <a class=" logo-container navbar-brand col-1  " href="#" >
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
                  <li><a class="dropdown-item" href="/droits">Vos droits</a></li>
                  <li><a class="dropdown-item" href="/dons"> Dons et prélevement</a></li>
                  <li>
                    <a class="dropdown-item" href="/sejour">Votre séjour</a>
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
                    <a class="dropdown-item" href="/nephrologie">Néphrologie</a>
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
                <a class="nav-link" href="/login"> CONNEXION</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
          <h1>Nos Services </h1>
          <h2>medecine interne</h2>
          
        </div>
      </section>

    </header>






    {{-- titre  --}}
    <div class="big">
      <section id="services" class="services">
        <div class="container">
          <div class="section-title">
            <h2><img src="/img/logopneumologie.svg" alt=""> Présentation du Service Pneumologie</h2>
          </div>
<p>Le service de Pneumologie de médecine interne se concentre sur le diagnostic, le traitement et la prise en charge des maladies respiratoires et des affections des voies respiratoires. Les pneumologues de médecine interne sont des experts dans la gestion des affections telles que l'asthme, la bronchite, la bronchopneumopathie chronique obstructive (BPCO), la pneumonie, les infections respiratoires et les maladies pulmonaires interstitielles.</p>
        </div>
      </section>
    
      <section id="services" class="services">
        <div class="container">
          <div class="section-title">
            <h2>Quand consulter ?</h2>
          </div>
          <p>Il est recommandé de consulter un pneumologue de médecine interne si vous présentez des symptômes respiratoires tels que :</p>
            <br><br><li>  des essoufflements</li><br>
            <li> une toux persistante</li><br>
            <li>  des douleurs thoraciques</li><br>
            <li>des sifflements respiratoires </li><br>
            <li> des expectorations anormales ou des infections respiratoires récurrentes </li><br>
        <br>
          <p>  Les personnes exposées à des facteurs de risque tels que le tabagisme, l'exposition professionnelle à des substances toxiques ou ayant des antécédents familiaux de maladies pulmonaires devraient également consulter un spécialiste en pneumologie.</p>        
        </div>
      </section>
    
      <section id="services" class="services">
        <div class="container">
          <div class="section-title">
            <h2>Consultations en Hématologie</h2>
          </div>
          <p>Il est recommandé de consulter un pneumologue de médecine interne si vous présentez des symptômes respiratoires tels que des essoufflements, une toux persistante, des douleurs thoraciques, des sifflements respiratoires, des expectorations anormales ou des infections respiratoires récurrentes. Les personnes exposées à des facteurs de risque tels que le tabagisme, l'exposition professionnelle à des substances toxiques ou ayant des antécédents familiaux de maladies pulmonaires devraient également consulter un spécialiste en pneumologie.</p>
      </section>
      
    </div>

      
{{-- fin fiche informative --}}


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
  


  <script src="js/main.js"></script>
  <script src="https://kit.fontawesome.com/efb3069b65.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>  
</body>
</html>