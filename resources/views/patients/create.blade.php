@extends('master')
@section('content')
<head>
    <title>Créer un patient - EH DR. MADJEBEUR TAMI</title>
</head>
    <h1>Créer un Patient</h1>
    <form action="{{ route('patients.store') }}" method="POST" class="user-form">
        @csrf
        <div class="form-group">
            <label for="name">Nom</label>
            <input required type="text" name="name" id="name" value="{{ old('name') }}" class="form-input">
            @error('name')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input required type="email" name="email" id="email" value="{{ old('email') }}" class="form-input">
            @error('email')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input required type="password" name="password" id="password" class="form-input">
            @error('password')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="date_naissance">Date de naissance</label>
            <input required id="date_naissance" class="form-input" type="date" name="date_naissance" value="{{ old('date_naissance') }}" required autocomplete="username">
            @error('date_naissance')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="adresse">Adresse du domicile</label>
            <input required id="adresse" class="form-input" type="text" name="adresse" value="{{ old('adresse') }}" required autocomplete="username">
            @error('adresse')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <!-- Add more input fields as needed -->
        <div class="form-group">
            <button type="submit" class="submit-button">Créer</button>
        </div>
    </form>
@endsection
<style>
    .user-form {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f8f8f8;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.error-message {
    color: red;
    margin-top: 5px;
}

.submit-button {
    padding: 10px 20px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.submit-button:hover {
    background-color: #45a049;
}
body.dark-mode .user-form {
    background-color: #333;
    color: #fff;
  }
</style>