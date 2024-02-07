@extends('master')
@section('content')
<body>


    <div class="box">
    <h1>Téléchargement des résultats d'analyse</h1>
    <p>Cliquez sur le bouton ci-dessous pour consulter vos résultats d'analyse en PDF :</p>
    <a class="download-button" href="/chemin/vers/le/fichier.pdf" download>Télécharger</a>
</div>
</body>
<link rel="stylesheet" type="text/css" href="{{ url('/css/resultats.css') }}">


@endsection
<style>
    body.dark-mode .box {
    background-color: #212121;
    color: #fff;
  }

</style>