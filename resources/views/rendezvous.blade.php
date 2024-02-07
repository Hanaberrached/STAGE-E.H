@extends('master')
@section('content')
<head>
    <title>Rendez-vous - EH DR. MADJEBEUR TAMI</title>

</head>
@if (session('errMessage'))
    <div class="alert alert-danger">
        <span class="material-symbols-rounded">
            cancel
            </span>{{ session('errMessage') }}
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success">
        <span class="material-symbols-rounded">
            check_circle
            </span> {{ session('success') }}
    </div>
@endif

<h1> Prenez Rendez-vous ici </h1>

<form class="fofo" action="/formulaire" method="POST" onsubmit="return validateForm()">
    @csrf
    <div class="formulaire">
        <h2>Formulaire de prise de RDV</h2>
        <fieldset>
            <legend><span class="number">1</span> Vos Infos</legend>
            <label for="Nom"><!-- label --></label>
            <input type="text" name="nom" class="input" placeholder="Nom" value="{{$client->name}}">

            <label for="Email"></label>
            <input type="email" name="text" class="input" placeholder="Email" value="{{$client->email}}" disabled>
        </fieldset>
        <fieldset>
            <legend><span class="number">2</span> Specificités</legend>

            <div class="form-group">
                <label for="Service">Service:</label><br>
                <select class="textWidth form-control" name="ServicePriority" id="ServicePriority" type="text">
                    <option value=""></option> <!-- Add this empty option -->
                    @foreach($services as $service)
                    <option value="{{$service->id}}">
                        {{$service->name}}
                    </option>
                    @endforeach
                </select>
                
            </div>
            <label for="type de consultation">Type de consultation</label>
            <select name="typedeconsultation" id="typedeconsultation">
                <option value="premiere_consultation">première consultation</option>
                <option value="consultation_suivi">consultation de suivi</option>
                <option value="Consultation_urgence">consultation en urgence</option>
            </select>
            <label for="Motif">Motif</label>
            <input required type="text" name="motif" class="motif" placeholder="Ecrivez votre motif ici" maxlength="160">

            <label for="date">
                <input type="date" id="meeting-date" name="meeting-date" value="2023-06-12" min="2023-06-07"
                    max="2024-06-14" onchange="updateTimeOptions()">
                <select id="meeting-time" name="meeting-time">
                    <!-- Les options sont générées dynamiquement en utilisant JavaScript -->
                </select>
            </label>

            <script>
                function updateTimeOptions() {
                    var dateInput = document.getElementById("meeting-date");
                    var timeSelect = document.getElementById("meeting-time");
                    var selectedDate = new Date(dateInput.value);
                    var currentDate = new Date();
                    currentDate.setHours(0, 0, 0, 0);

                    // Réinitialiser les options disponibles
                    timeSelect.innerHTML = "";

                    // Vérifier si la date sélectionnée est égale à la date actuelle
                    addOption(timeSelect, "08:30", "08:30");
                    addOption(timeSelect, "09:00", "09:00");
                    addOption(timeSelect, "09:30", "09:30");
                    addOption(timeSelect, "10:00", "10:00");
                    addOption(timeSelect, "10:30", "10:30");
                    addOption(timeSelect, "11:00", "11:00");
                    addOption(timeSelect, "11:30", "11:30");
                    addOption(timeSelect, "13:30", "13:30");
                    addOption(timeSelect, "14:00", "14:00");
                    addOption(timeSelect, "14:30", "14:30");
                    addOption(timeSelect, "15:00", "15:00");
                    addOption(timeSelect, "15:30", "15:30");
                }

                function addOption(selectElement, text, value) {
                    var option = document.createElement("option");
                    option.text = text;
                    option.value = value;
                    selectElement.add(option);
                }

                function validateForm() {
                    var serviceSelect = document.getElementById("ServicePriority");
                    if (serviceSelect.value === "") {
                        alert("Please select a service");
                        return false; // Prevent form submission
                    }
                    // Add more validation if needed
                    return true; // Proceed with form submission
                }

                // Mettre à jour les options initiales lors du chargement de la page
                window.onload = updateTimeOptions;
            </script>

            <div>
                <div class="button-container">
                    <button type="submit" class="btn-submit">Valider</button>
                </div>
            </div>
        </fieldset>
    </div>
</form>

</div>
@endsection
<style>
    body.dark-mode .formulaire {
    background-color: #212121;
    color: #fff;
  }
  body.dark-mode .fofo {
    background-color: #212121;
    color: #fff;
  }

</style>