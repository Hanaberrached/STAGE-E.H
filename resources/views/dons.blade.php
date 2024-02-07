<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/dons.css') }}">
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
       
        </div>
      </section>

    </header>






    {{-- titre  --}}
    <div class="big">
      <section id="services" class="services">
        <div class="container">
          <div class="section-title">
            <h2><img src="/img/.png" alt="">Principes généraux des dons et prélèvements d’éléments ou produits du corps</h2>
          </div>
          <p>
            - Le prélèvement d’organes humains et la transplantation de tissus ou d’organes humains ne peuvent être effectués qu’à des fins thérapeutiques ou de diagnostic, dans les conditions prévues par la loi.
          </p>
          <p>
            - Le prélèvement et la transplantation d’organes et de tissus humains ne peuvent faire l’objet d’aucune transaction financière.
          </p>
          <p>
            - Il est interdit de procéder au prélèvement d’organes chez :
          </p>
          <ol>
            <li>des mineurs</li>
            <li>des personnes privées de discernement. </li>
          </ol>
          <p>
            - Il est interdit de procéder au prélèvement d’organes ou de tissus chez :
          </p>
          <ul>
            <li>des personnes atteintes de maladies de nature à affecter la santé du donneur ou du receveur.</li>
          </ul>
          <p>
            - Le prélèvement et la transplantation de tissus ou d’organes humains sont effectués par des médecins et seulement dans des hôpitaux autorisés à cette fin, par le ministre chargé de la santé.
          </p>
          <p>
            - Une commission médicale, créée spécialement au sein de l’EHUO, décide de la nécessité du prélèvement ou de la transplantation.
          </p>
        </div>
      </section>
    
      <section id="services" class="services">
        <div class="container">
          <div class="section-title">
            <h2>Prélèvements sur une personne vivante</h2>
          </div>
          <p>
            - Le prélèvement de tissus ou d’organes ne peut être pratiqué sur des personnes vivantes que s’il ne met pas en danger la vie du donneur.
          </p>
          <p>
            - Le consentement écrit du donneur d’organe est exigé, après avoir été établi en présence de deux témoins et déposé auprès du directeur d’établissement et du médecin-chef de service.
          </p>
          <p>
            - Le donneur ne peut exprimer son consentement qu’après avoir été informé, par le médecin, des risques médicaux éventuels qu’entraîne le prélèvement, le donneur peut, en tout temps, retirer le consentement qu’il a déjà donné.
          </p>     </div>
      </section>
    
      <section id="services" class="services">
        <div class="container">
          <div class="section-title">
            <h2>Prélèvements sur une personne décédée</h2>
          </div>
          <p>
            - Le prélèvement de tissus et d’organes sur des personnes décédées ne peut se faire qu’après constatation médicale et légale du décès, selon des critères scientifiques définis par arrêté du ministre chargé de la santé.
          </p>
          <p>
            - Les critères scientifiques prévus à l’article 1er ci-dessus sont fixés comme suit :
          </p>
          <ol>
            <li>Absence totale de conscience et d’activité motrice spontanée.</li>
            <li>Abolition de tous les réflexes du tronc cérébral.</li>
            <li>Absence totale de ventilation spontanée vérifiée par une épreuve d’hypercapnie.</li>
            <li>Deux électroencéphalogrammes interprétés par deux médecins différents.</li>
          </ol>
          <p>
            - Le prélèvement peut se faire avec le consentement écrit de la personne de son vivant, ou dans le cas contraire de l’un des membres adultes de la famille, dans l’ordre de priorité suivant : père, mère, conjoint, enfant, frère ou sœur ou le tuteur légal si le défunt est sans famille.
          </p>
          <p>
            - Le prélèvement de cornées, de reins peut être effectué sans l’accord visé à l’alinéa précédent, s’il n’est pas possible de prendre contact, à temps, avec la famille ou le représentant légal du défunt et que tout délai entraînerait la détérioration de l’organe à prélever, ou si l’urgence de l’état de santé du receveur de l’organe l’exige ; cette urgence étant constatée par la commission d’éthique.
          </p>
          <p>
            -Les responsables d’établissements autorisés à effectuer des prélèvements et de transplantations d’organes et de tissus humains sont chargés de l’exécution de ces dispositions.
          </p>
          <p>
            - Il est interdit de procéder au prélèvement de tissus ou d’organes en vue d’une transplantation, si la personne, de son vivant, a exprimé par écrit une volonté contraire ou si le prélèvement entrave l’autopsie médico-légale.
          </p>
          <p>
            - Il est interdit de révéler l’identité du donneur et celle du receveur à la famille du donneur.
          </p>
          <p>
            - Le médecin ayant constaté et certifié la mort du donneur ne doit pas faire partie de l’équipe qui effectue la Transplantation.
          </p>
       </div>
      </section>


      <section id="services" class="services">
        <div class="container">
          <div class="section-title">
            <h2>Dispositions relatives au receveur</h2>
          </div>
          <p>
            - La transplantation de tissus ou d’organes humains n’est pratiquée que si elle représente le seul moyen de préserver la vie ou l’intégrité physique du receveur,
          </p>
          <p>
            - Elle est pratiquée après consentement du receveur, en présence du médecin-chef de service dans lequel il a été admis, et de deux témoins.
          </p>
          <p>
            - Lorsque le receveur n’est pas en état d’exprimer son consentement, l’un des membres de sa famille peut donner le consentement par écrit, dans l’ordre de priorité suivant : père, mère, conjoint, enfant, frère ou sœur.
          </p>
          <p>
            - Dans le cas des personnes frappées d’incapacité légale, le consentement peut être donné par le père, la mère ou le tuteur légal, selon le cas.
          </p>
          <p>
            - Dans le cas des mineurs, le consentement est donné par le père ou, à défaut, par le tuteur légal.
          </p>
          <p>
            - Le consentement ne peut être exprimé qu’après que le receveur, ou les personnes énoncées plus haut, aient été informés, par le médecin traitant, des risques médicaux encourus.
          </p>
          <p>
            - La transplantation de tissus ou d’organes humains peut être pratiquée sans le consentement visé plus haut, lorsque, en raison de circonstances exceptionnelles, il n’est pas possible de prendre contact, à temps, avec la famille ou les représentants légaux d’un receveur qui n’est pas en état d’exprimer son consentement et que tout délai entraînerait son décès, cet état de fait étant confirmé par le médecin- chef de service et deux témoins.
          </p>
       </div>
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