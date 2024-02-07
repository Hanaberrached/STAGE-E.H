<head>
        <title>Inscription - EH. Madjebeur Tami</title>
        <title>Inscription - EH DR. MADJEBEUR TAMI</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/connexion.css') }}">
        <script src="https://kit.fontawesome.com/efb3069b65.js" crossorigin="anonymous"></script>
        
      </head>
      <x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="login-form">
        @csrf
        <div class="main-container">
            <div class="text-center">
              <h1><span>  Bienvenue sur le site de prise de rendez vous de notre hopital !</h1>
                <p> Pour continuer, Inscrivez-vous en un clic &nbsp; <i class="fa-sharp fa-solid fa-arrow-pointer" style="color: #e7ecf3;"></i> </p>

            </div>

            <div class="login-box">
                <div class="form">
               
                  
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nom')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error style="color:red;" :messages="$errors->get('email')" class="mt-2" />
        </div>



        {{-- date de naissance  --}}
        <div class="mt-4">
            <x-input-label for="date_naissance" :value="__('Date de naissance')" />
            <x-text-input id="date_naissance" class="block mt-1 w-full" type="date" name="date_naissance" :value="old('date_naissance')" required autocomplete="username" />
        </div>
        <div class="mt-4">
            <x-input-label for="adresse" :value="__('Adresse du domicile')" />
            <x-text-input  id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autocomplete="username" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmer mot de passe')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
           

            <x-primary-button class="ml-4">
                {{ __("S'inscire") }}
            </x-primary-button>
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Déja inscrit?') }}
            </a>
        </div>
    </form>
</x-guest-layout>
