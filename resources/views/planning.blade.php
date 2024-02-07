@extends('master')
@section('content')
<head>
  <title>Planning - EH DR. MADJEBEUR TAMI</title>

  <body>
    <div class="page-title">
      <h3> Rendez-vous à venir </h3>
    </div>
    <main class="table">
      <section class="table__body">
        <table>
          <thead>
            <tr>
              <th>N°   <span class="icon-arrow">&UpArrow;</span></th>
              <th> Nom <span class="icon-arrow">&UpArrow;</span></th>
              <th> Date <span class="icon-arrow">&UpArrow;</span></th>
              <th> Horaire <span class="icon-arrow">&UpArrow;</span></th>
             <th> Archiver </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($appointments as $appointment)
            <tr>
                <td>{{ $appointment->id }}</td>
                <td>{{$appointment->patients->name}}</td>
                {{-- //a la place yavait patient->name de base  --}}
                <td>{{ $appointment->date }}</td>
                <td>{{ $appointment->hour }}</td>
                <td><span class="material-symbols-rounded" class="check">
                  check_box
                  </span></td>
    
            </tr>
             @endforeach
          </tbody>
        </table>
      </section>
    </main>

  </body>
  <script src="js/historique.js"></script>
<link rel="stylesheet" type="text/css" href="{{ url('/css/historique.css') }}">
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
    />
    <link
      rel="stylesheet"
      href=" https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css "
    />      

  @endsection
<style>
  body.dark-mode .table {
    background-color: #333;
    color: #fff;
  }
  </style>