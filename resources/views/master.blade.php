<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- google fonts -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,1,0"
    />
    <!-- fonts poppins  -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://code.jquery.com/jquery-3.6.4.slim.min.js"
      integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw="
      crossorigin="anonymous"
    ></script>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/dashboard.css') }}">
   <style>
   body.dark-mode .content {
    background-color: #333;
    color: #fff;
  }
  body.dark-mode .header {
    background-color: #212121;
    color: black;
  }
  body.dark-mode .sidebar {
    background-color: #212121;
    color: black;
  }
  body.dark-mode .namemed {
    color: white;
  }
  #mode-switch {
    margin: 10px;
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    background-color: #ccc;
    color: #000;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  #mode-switch:hover {
    background-color: #ddd;
  }
  </style>
    </head>
  <body id="body">
    <!--!------------------------------------------------------------------------------------------------------------->
    <!--!---------------------------------------------------SIDEBAR--------------------------------------------------->
    <div class="sidebar">
      <div class="logo">
       <a href="/"> <img src="/img/hlogbl.png" alt="" /></a>
      </div>
      <div class="sidebar-menu" data-id="{!!$pageName!!}">
      


        @if (Auth::user()->id >= 10)
        <a href="/dashboardpat" class="nav-link" data-id='dashboardpat'>
          <span class="material-symbols-rounded"> grid_view </span> Dashboard 
        </a>
        @endif

        @if (Auth::user()->id < 10 )
        <a href="/dashboardmed" class="nav-link" data-id='dashboardmed'>
          <span class="material-symbols-rounded"> grid_view </span>
          Dashboard
        </a>
        @endif
        @if (Auth::user()->id >= 10)
        <a href="/rendezvous" class="nav-link" data-id='rdv'>
          <span class="material-symbols-rounded"> edit_calendar </span>
          Rendez-vous</a
        >
        @endif
        <!--@if (Auth::user()->id >= 10)
        <a href="/resultats" class="nav-link" data-id='results'>
          <span class="material-symbols-rounded"> fact_check </span>Résultats
        </a>
        @endif-->
        @if (Auth::user()->id >= 10)
        <a href="/historique" class="nav-link" data-id='history'
          ><span class="material-symbols-rounded"> history </span> Historique</a
        >
        @endif
        
        @if (Auth::user()->id >= 10)
        <a href="{{ route('services.index') }}" class="nav-link" data-id="services">
          <span class="material-symbols-rounded"> list_alt </span> Services
        </a>
        @endif

        @if (Auth::user()->id < 10)
        <a href="/patients" class="nav-link" data-id='patients'>
          <span class="material-symbols-rounded"> patient_list </span> Patients
        </a>
        @endif
        @if (Auth::user()->id < 10)
        <a href="/historiquem" class="nav-link" data-id='historym'
          ><span class="material-symbols-rounded"> history </span> Historique</a
        >
        @endif
        @if (Auth::user()->id < 10)
        <a href="/planning" class="nav-link" data-id='planning'>
          <span class="material-symbols-rounded"> more_time </span>
          Planning</a
        >
        @endif
      </div>
              <!-- LOG OUT -->
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout">
                    <span class="material-symbols-rounded">
                        logout
                    </span>
                    Quitter
                </button>
            </form>
            
        
    </div>
    <!--!-------------------------------------------------------------------------------------------------------------> 
    <!--!---------------------------------------------------CONTENT--------------------------------------------------->

     <div class="content">
    <div class="header">
      <button id="mode-switch" onclick="toggleMode()">
        Changer le thème
      </button>
        <div class="search">
          <input type="search" />
          <span class="material-symbols-sharp">search</span>
        </div>
        
        @if (Auth::user()->id >= 10 )
    <div class="avatar">

        <img src="{{ asset('avatars/' . Auth::id() . '.png') }}" width="40" class="mr-2" />
    </div>

@endif
@if (Auth::user()->id < 10)
<span class="namemed material-symbols-rounded">
  person
  </span>
  <h7 class="namemed"> {{ Auth::user()->name }} </h7>
@endif
        
    </div>

        <!-- <div class="profile">
          <span class="material-symbols-rounded"> account_circle </span>
        </div> -->
      <!-- </div> -->

      @yield('content')


    </div>
    <script>
      function toggleMode() {
        const body = document.getElementById('body');
        body.classList.toggle('dark-mode');
        const isDarkMode = body.classList.contains('dark-mode');
        localStorage.setItem('darkMode', isDarkMode);
      }
  
      const storedDarkMode = localStorage.getItem('darkMode');
      if (storedDarkMode === 'true') {
        document.getElementById('body').classList.add('dark-mode');
      }
    </script>
</body>
<script src="js/dashboard.js"></script>
</html>
