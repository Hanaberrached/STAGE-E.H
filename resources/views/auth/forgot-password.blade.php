<head>
    <title>Mot de passe oublié - EH DR. MADJEBEUR TAMI</title>

</head>
<x-guest-layout>
    <div class="container">
        <h1 class="title">Mot de passe oublié ?</h1>
        <p class="description">Ce n'est pas un problème. Indiquez-nous votre adresse électronique et nous vous enverrons un lien de réinitialisation du mot de passe qui vous permettra d'en choisir un nouveau.</p>

        <!-- Session Status -->
        <center><x-auth-session-status class="status" :status="session('status')" /></center>

        <form method="POST" action="{{ route('password.email') }}" class="form">
            @csrf

            <!-- Email Address -->
            <center><div class="form-group">
                <x-input-label for="email" :value="__('')" />
                <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="error" />
            </div></center>

            <div class="button-group">
                <x-primary-button style="background-color: #1e90ff;
                color: white;
                padding: 10px 20px;
                font-size: 16px;
                border: none;
                border-radius: 4px;
                cursor: pointer;">
                    {{ __('Lien de réinitialisation du mot de passe') }}
                </x-primary-button>
            </div>
            <div class="button-group">
                <a href="{{ route('login') }}" class="primary-button">
                    {{ __('Connexion') }}
                </a>
            </div>
            
        </form>
    </div>
</x-guest-layout>

<style>
    .container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        font-family: Arial, sans-serif;
        background-color: #f3f3f3;
        border-radius: 10px;
    }

    .title {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
        font-family: Arial, sans-serif;
    }

    .description {
        font-size: 16px;
        color: #666;
        margin-bottom: 30px;
        font-family: Arial, sans-serif;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .input {
        width: 80%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .error {
        color: red;
        font-size: 14px;
        margin-top: 5px;
        font-family: Arial, sans-serif;
    }

    .button-group {
        text-align: center;
        margin-top: 20px;
    }

    .primary-button {
        background-color: #1e90ff;
        color: white;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-family: Arial, sans-serif;
    }

    .primary-button:hover {
        background-color: #007bff;
    }
</style>
