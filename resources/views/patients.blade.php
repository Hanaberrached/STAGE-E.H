@extends('master')
@section('content')
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Patients - EH DR. MADJEBEUR TAMI</title>

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
</head>
  <body>
    <div class="page-title">
      <h3>Liste des patients</h3>
      <a href="{{ route('patients.create') }}" class="add-patient-link">Ajouter un patient</a>
  </div>
  
    
    
  
  
    <main class="table">
      <section class="table__body">
        <table>
          <thead>
            <tr>
              <th>N° <span class="icon-arrow">&UpArrow;</span></th>
              <th>Patient <span class="icon-arrow">&UpArrow;</span></th>
              <th> Adresse mail<span class="icon-arrow">&UpArrow;</span></th>
              <th> Date de naissance <span class="icon-arrow">&UpArrow;</span></th>
              <th> date adhésion  <span class="icon-arrow">&UpArrow;</span></th>
              <th> </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($patients as $patient)
<tr data-id='{{ $patient->id }}'>
    <td>{{ $patient->id }}</td>
    <td>{{ $patient->name }}</td> <!-- Assuming the name column exists in the users table -->
    <td>{{ $patient->email }}</td>
    <td>{{ $patient->date_naissance }}</td>
    <td>{{ $patient->created_at }}</td>
    <td><span class="material-symbols-rounded edit-patient" data-id="{{ $patient->id }}">edit_square</span></td>

</tr>
@endforeach

          </tbody>
        </table>
      </section>
    </main>


{{-- !! DRAWER  !!--}}
{{-- !! DRAWER  !!--}}
{{-- !! DRAWER  !!--}}

    <div id="drawer" style="display: none">
      
      <section class="patient-card__header" style="display: flex; align-items: center;">
        <button id="closeDrawer" style="position: absolute; left: 0;margin-left:20px;"><i class="fa-solid fa-x fa-xl"></i></button> <!-- Close button added -->
        <h1 style="margin: 0; text-align: center; width: 100%;">Fiche patient</h1>
      </section>
      
      
      <section class="patient-card__body scrollable">
        <div class="patient-info">
          <img src="img/fiche.webp" alt="Photo du patient" class="rounded-border" />
        
        <div class="patient-details">
          <p id="nfiche"> </p>

<p id="dfiche">Date de naissance: </p>

<p id="femail">Email: </p>

<p id="afiche">Adresse: </p>




        </div>
      </div>
      <div class="patient-notes">
        <h2>Notes concernant le Patient</h2>
        <textarea id="notes" rows="5" placeholder="Enter notes"></textarea>
        <button id="saveNotes">Enregistrer la note</button>
      </div>
      <h2 class="history"> Historique de consultations </h2>
      <div class="patient-history">
        <section class="table__body">
            <table>
              <thead>
                <tr>
                  <th>N <span class="icon-arrow">&UpArrow;</span></th>
                  <th>Consultation <span class="icon-arrow">&UpArrow;</span></th>
                  <th>Type<span class="icon-arrow">&UpArrow;</span></th>
                  <th> Motif <span class="icon-arrow">&UpArrow;</span></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                   12/12/2012
                  </td>
                  <td>Premiere consultation</td>
                  <td> Mal au venttre </td>
                  
                </tr>
                <tr>
                  <td>1</td>
                  <td> 12/12/2012</td>                  
                  <td>Premiere consultation</td>
                  <td> Mal au venttre  </td>

                </tr>
                <tr>
                  <td>1</td>
                  <td>12/12/2012</td>
                  <td>Premiere consultation</td>
                  <td> Mal au venttre </td>

                </tr>
              </tbody>
            </table>
      </div>
    </section>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <script>
    
    $(document).ready(function() {
  $(document).on('click', 'tr', function() {
    let id = $(this).data('id');
    console.log(id);

    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type: "GET",
      url: "/patients/" + id + "/rendezvous",

      success: function(response) {
        console.log(response);

        // Update the rendezvous table with the retrieved data
        let tableBody = $('.patient-history tbody');
        tableBody.empty(); // Clear existing rows

        if (response.length > 0) {
          response.forEach(function(rendezvous, index) {
            let row = `<tr>
                        <td>${index + 1}</td>
                        <td>${rendezvous.date}</td>
                        <td>${rendezvous.typeconsultation}</td>
                        <td>${rendezvous.motif}</td>
                      </tr>`;
            tableBody.append(row);
          });
        } else {
          tableBody.html('<tr><td colspan="4">Aucun rendez-vous trouvé pour ce patient</td></tr>');
        }

        $('#drawer, #overlay').show();
      },
      error: function(error) {
        console.log(error);
      }
    });
  });
  $(document).on('click', '.edit-patient', function() {
    let id = $(this).data('id');
    console.log(id);

    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type: "GET",
      url: "/patients/" + id,

      success: function(response) {
        console.log(response);

        // Update the patient details in the drawer with the retrieved data
        $('#nfiche').text(response.name);
        $('#dfiche').text('Date de naissance: ' + response.date_naissance);
        $('#femail').text('Email: ' + response.email);
        $('#afiche').text('Adresse: ' + response.adresse);

        $('#drawer, #overlay').show();
      },
      error: function(error) {
        console.log(error);
      }
    });
  });

  $(document).on('click', '.edit-patient', function() {
  let id = $(this).data('id');
  console.log(id);

  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: 'GET',
    url: '/patients/' + id,

    success: function(response) {
      console.log(response);

      // Update the patient details in the drawer with the retrieved data
      $('#nfiche').text(response.name);
      $('#dfiche').text('Date de naissance: ' + response.date_naissance);
      $('#femail').text('Email: ' + response.email);
      $('#afiche').text('Adresse: ' + response.adresse);
      $('#notes').val(response.notes); // Set the notes value

      // Store the patient ID as a data attribute in the save button
      $('#saveNotes').data('id', response.id);

      $('#drawer, #overlay').show();
    },
    error: function(error) {
      console.log(error);
    }
  });
});

$(document).on('click', '#saveNotes', function() {
  let id = $(this).data('id');
  let notes = $('#notes').val();

  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: 'PUT',
    url: '/patients/' + id + '/notes',
    data: {
      notes: notes
    },

    success: function(response) {
      console.log(response);

      // Show a success message or perform any other action
      alert('Notes saved successfully');
    },
    error: function(error) {
      console.log(error);
    }
  });
});




$(document).on('click', '#closeDrawer', function() {
    $('#drawer, #overlay').hide();
  });
});




  </script>
  </body>
      

  @endsection
  <style>
    body.dark-mode .table {
    background-color: #333;
    color: #fff;
  }
  body.dark-mode .patient-card__body {
    background-color: #212121;
  }
  body.dark-mode .patient-card__header {
    background-color: #333;
  }
  body.dark-mode #drawer {
    background-color: #333;
  }
    .page-title {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .add-patient-link {
        font-size: 20px;
        padding: 10px;
        margin: 10px;
        background-color: pink;
        border: none;
        text-decoration: none;
        color: black;
        transition: transform 0.3s ease;
    }

    .add-patient-link:hover {
        transform: translateY(-3px);
    }
    .patient-notes {
  margin-top: 20px;
}

.patient-notes h2 {
  font-size: 18px;
  margin-bottom: 10px;
}

#notes {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  color:black;
}

#saveNotes {
  background-color: #4caf50;
  color: white;
  border: none;
  padding: 10px 20px;
  margin-top: 10px;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

#saveNotes:hover {
  background-color: #45a049;
}
#closeDrawer {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 40px;
  height: 40px;
  border-radius: 20%;
  background-color: #cd5f5f;
  border: none;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

#closeDrawer:hover {
  background-color: #ff5555;
}

#closeDrawer i {
  color: #ffffff;
}

</style>


