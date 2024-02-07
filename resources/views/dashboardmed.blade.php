@extends('master')
@section('content')
<head>
  <title>Dashboard - EH DR. MADJEBEUR TAMI</title>

</head>
<div class="Bienvenue">
  <h6 class='bnj'>Bienvenue, 
  {{ Auth::user()->name }} !
</h6>
</div>
<div class="container">
    <div class="card">
     <span class="material-symbols-rounded">
        personal_injury
        </span>
      <h2 class="title">Nombre de patients inscrits</h2>
      <p class="value">{{ $usersCount }}</p>
    </div>
    <div class="card">
      <span class="material-symbols-rounded">
        how_to_reg
        </span>
      <h2 class="title">Nombre de rendez-vous pris à l'hopital</h2>
      <p class="value">{{ $rdvCount }}</p>
    </div>
    <div class="card">
      <span class="material-symbols-rounded">
        where_to_vote
        </span>
      <h2 class="title">Nombre de rendez-vous pris dans votre service </h2>
      <p class="value">
        {{ $appointmentsCount }}
      </p>
    </div>
  </div>
  






  {{-- FICHE PATIENT  --}}

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
  />
  <link
    rel="stylesheet"
    href=" https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css "
  />
    <link rel="stylesheet" href="{{ url('/css/fiche.css') }}">
    <title> Fiche patient</title>
</head>
<body>

    <script src="js/fiche.js"></script>
</body>
<style> 

body.dark-mode .card {
    background-color: #212121;
    color: #fff;
  }


.container {
display: flex;
justify-content: space-evenly;
padding: 20px;
}

.card {
display: flex;
flex-direction: column;
align-items: center;
background-color: #f1f1f1;
border-radius: 10px;
padding: 5.5rem;
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
width: 30rem;
text-align: center;

}

.emoji {
font-size: 2em;
}

.title {
margin-top: 20px;
margin-bottom: 10px;
}

.value {
font-size: 1.5em;
font-weight: bold;
}

</style>    

@endsection 