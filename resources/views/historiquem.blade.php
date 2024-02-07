@extends('master')
@section('content')
<head>
  <title>Historique - EH DR. MADJEBEUR TAMI</title>

  <body>
    <div class="page-title">
      <h3> Historique de consultations </h3>
    </div>
    <main class="table">
      <section class="table__body">
        <table>
          <thead>
            <tr>
              <th>N°  <span class="icon-arrow">&UpArrow;</span></th>
              <th> Nom <span class="icon-arrow">&UpArrow;</span></th>
              <th> Prénom <span class="icon-arrow">&UpArrow;</span></th>
              <th> Service <span class="icon-arrow">&UpArrow;</span></th>
              <th> Date <span class="icon-arrow">&UpArrow;</span></th>
            </tr>
          </thead>
          <tbody>
            {{-- @foreach ($patients as $patient)
            <tr>
                <td>{{ $patient->id }}</td>
                <td>{{ $patient->name }}</td>
                <td>{{ $patient->email }}</td>
                <td></td>
                <td></td>
            </tr>
             @endforeach --}}
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