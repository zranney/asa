@extends('layouts.app')

@section('content')
<div class="auth-container">
    <div class="auth-card">
        <h2 class="auth-title">Accès Administrateur</h2>

        <div id="notification" class="notification" style="display: none;"></div>

        @if ($errors->any())
            <div class="error-message">
                {{ $errors->first('email') }}
                {{ $errors->first('password') }}
            </div>
        @endif

        <!-- Formulaire d'authentification -->
        <form id="adminAuthForm">
            @csrf
            <label for="email" class="input-label">Adresse email :</label>
            <input type="email" name="email" id="email" class="auth-input" value="{{ old('email') }}" required>

            <label for="password" class="input-label">Mot de passe :</label>
            <div style="position: relative;">
                <input type="password" name="password" id="password" class="auth-input" required>
                <span id="togglePassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                    👁️
                </span>
            </div>
            <label for="remember">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi
        </label>
            <button type="submit" class="auth-button">Valider</button>
        </form>
    </div>
</div>

<!-- Style CSS -->
<style>
    body {
        background-color: #f4f7f6;
        font-family: 'Arial', sans-serif;
    }
    .auth-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .auth-card {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 100%;
        max-width: 350px;
    }
    .auth-title {
        margin-bottom: 20px;
        font-size: 22px;
        font-weight: bold;
        color: #333;
    }
    .input-label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #555;
    }
    .auth-input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }
    #togglePassword {
        font-size: 18px;
    }
    .auth-button {
        width: 100%;
        margin-top: 15px;
        padding: 10px;
        background-color: #007bff;
        color: white;
        font-size: 16px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }
    .auth-button:hover {
        background-color: #0056b3;
    }
    .notification {
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
        color: white;
        font-weight: bold;
        display: none;
    }
    .error-message {
        color: red;
        font-size: 14px;
        margin-bottom: 10px;
    }
</style>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("#adminAuthForm").submit(function(event) {
            event.preventDefault();

            let email = $("#email").val();
            let password = $("#password").val();
            let token = $("input[name='_token']").val();

            showNotification("Traitement en cours...", "blue");

            $.ajax({
                url: "{{ route('admin.auth') }}",
                type: "POST",
                data: {
                    _token: token,
                    email: email,
                    password: password
                },
                success: function(response) {
                    if (response.success) {
                        showNotification("Connexion réussie ! Redirection...", "green");
                        setTimeout(function() {
                            window.location.href = response.redirect;
                        }, 2000);
                    } else {
                        showNotification(response.message || "Identifiants incorrects !", "red");
                    }
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                    let errorMessage = "Une erreur s'est produite.";
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }
                    showNotification(errorMessage, "red");
                }
            });
        });

        function showNotification(message, color) {
            let notif = $("#notification");
            notif.text(message).css({
                "background-color": color,
                "display": "block"
            }).fadeIn();
            setTimeout(() => notif.fadeOut(), 3000);
        }

        // Gestion de l'affichage du mot de passe
        $("#togglePassword").click(function() {
            let passwordInput = $("#password");
            if (passwordInput.attr("type") === "password") {
                passwordInput.attr("type", "text");
                $(this).text("🙈");
            } else {
                passwordInput.attr("type", "password");
                $(this).text("👁️");
            }
        });
    });
</script>

@endsection
