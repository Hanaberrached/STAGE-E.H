<!-- resources/views/auth/verify-email.blade.php -->

<x-guest-layout>
    <div class="verification-container">
        <h2 class="verification-title">Vérification de l'e-mail</h2>

        <div class="verification-row">
            <div class="verification-message">
                {{ __('Merci de vous être inscrit ! Avant de commencer, pourriez-vous vérifier votre adresse électronique en cliquant sur le lien que nous venons de vous envoyer ? Si vous n\'avez pas reçu l\'e-mail, nous vous en enverrons un autre avec plaisir.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="verification-success">
                    {{ __('Un nouveau lien de vérification a été envoyé à l\'adresse électronique que vous avez fournie lors de votre inscription.') }}
                </div>
            @endif
        </div>

        <div class="verification-actions">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <button type="submit" class="verification-button resend">
                        {{ __('Renvoyer l\'e-mail de vérification') }}
                    </button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="verification-button logout">
                    {{ __('Se déconnecter') }}
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>

<!-- Add this CSS in the <head> section of your HTML or in a separate CSS file -->

    <style>
        /* Base styles */
        .verification-container {
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
    
        .verification-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333333;
        }
    
        .verification-row {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-bottom: 20px;
        }
    
        .verification-message {
            flex: 1;
            font-size: 16px;
            color: #555555;
        }
    
        .verification-success {
            flex: 1;
            font-size: 16px;
            color: #008000;
        }
    
        .verification-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    
        .verification-button {
            padding: 10px 20px;
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
    
        .verification-button.resend {
            background-color: #6097FF;
        }
    
        .verification-button.resend:hover {
            background-color: #316ED6;
        }
    
        .verification-button.logout {
            background-color: #FF0000;
        }
    
        .verification-button.logout:hover {
            background-color: #D60000;
        }
    </style>
    