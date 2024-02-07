@extends('master')
@section('content')
<head>
  <title>Dashboard - EH DR. MADJEBEUR TAMI</title>
</head>

 <div class="body">
<h6 class='bnj'>Bienvenue, 
    {{ Auth::user()->name }} !
  </h6> 


  <div class="container">
    <div class="card">
      <span class="emoji">👥</span>
      <h2 class="title"> Nombre de rendez-vous pris </h2>
      <p class="value">{{ $count }} </p>
    </div>
    <div class="card">
      <span class="emoji">📅</span>
      <h2 class="title">Nombre de rendez-vous pris</h2>
      <p class="value"></p>
    </div>

  </div>
</div>
<style> 
body.dark-mode .container {
    background-color: #333;
    color: #fff;
  }
  body.dark-mode .bnj{
    background-color: #333;
    color:white;

  }
  body.dark-mode .card {
    background-color: #212121;
    color: #fff;
  }
  body.dark-mode .body {
    background-color: #212121;
    color: #fff;
  }
  body.dark-mode .body {
    background-color: #333;
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