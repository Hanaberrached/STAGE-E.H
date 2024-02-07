<x-guest-layout>

    <form method="POST" action="{{ route('password.store') }}" class="reset-password-form">
        @csrf
        <h1 class="title">Réinitialiser votre mot de passe</h1>

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="form-group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="input" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="error" />
        </div>
        

        <!-- Password -->
        <div class="form-group">
            <x-input-label for="password" :value="__('Mot de passe')" />
            <x-text-input id="password" class="input" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="error" />
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />
            <x-text-input id="password_confirmation" class="input" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="error" />
        </div>

        <div class="button-group">
            <x-primary-button style="background-color: #1e90ff;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;">
                {{ __('Réinitialiser') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<style>
    .reset-password-form {
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

    .form-group {
        margin-bottom: 20px;
    }

    .input {
        width: 90%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .error {
        color: red;
        font-size: 14px;
        margin-top: 5px;
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
    }

    .primary-button:hover {
        background-color: #007bff;
    }

    /* Media Queries */
    @media (max-width: 576px) {
        .reset-password-form {
            max-width: 100%;
            height: auto;
            padding: 10px;
        }
    }

    @media (max-width: 768px) {
        .reset-password-form {
            max-width: 500px;
        }
    }

    @media (max-width: 992px) {
        .reset-password-form {
            max-width: 700px;
        }
    }
</style>
