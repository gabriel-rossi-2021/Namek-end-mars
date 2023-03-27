<!doctype html>
<html lang="fr">
<head>
    @include('Include/header');
    <title>NamekCBD - Connexion</title>

    <!-- CSS LOGIN -->
    <link rel="stylesheet" href="{{ asset('css/style-login.css') }}">
</head>
<body>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="card">
        <h2 class="title">Connexion</h2>
        <p class="subtitle">Vous n'avez pas de compte ? <a href="/signup">S'inscrire</a></p>

        <p class="or"><span>ou</span></p>

        <div class="email-login">
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Entrer email" name="email" id="email" class="input" required>
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            <label for="password"><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer mot de passe" name="password" id="password" class="input" required>
            @error('password')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember" style="color: rgb(170 166 166)">
                        Se souvenir de moi
                    </label>
                </div>
            </div>
        </div>
        <button class="cta-btn">Se connecter</button>
        <a class="forget-pass" href="#">Oublier mon mot de passe</a>
    </div>
</form>

@include('Include/footer')
</body>
