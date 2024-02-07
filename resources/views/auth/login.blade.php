<head>
    <title>Connexion - EH DR. MADJEBEUR TAMI</title>

    <link rel="stylesheet" type="text/css" href="{{ url('/css/connexion.css') }}">
</head>
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="main-container">
        <div class="text-center">
          <h1><span>  Bienvenue sur le site de prise de rendez vous de notre hopital !</h1>
          <p>Veuillez vous connecter pour continuer.</p>
        </div>
          
    <form method="POST" action="{{ route('login') }}" class="login-form">
        @csrf

        <!-- Email Address -->
        <div class="login-box">
            <div class="form">
                <h2> Entrez vos identifiants </h2>
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email"  type="email" name="email" :value="old('email')" required autofocus autocomplete="username"  />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Mot de passe')" />

            <x-text-input id="password" 
                            type="password"
                            name="password"
                            required autocomplete="current-password"  />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <x-primary-button class="ml-3">
            {{ __('Se connecter') }}
        </x-primary-button>
<div><a href="{{ route('password.request') }}">
    Mot de passe oublié ?
</a>
</div>
             <!-- Ajout du lien "Pas encore inscrit ?" -->
             <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('register') }}">
                Pas encore inscrit ?
            </a>

        </div>
    </div>
  

    </form>
</x-guest-layout>
