<!doctype html>
<html lang="fr">
<head>
    @include('Include/header');
    <title>NamekCBD - Inscription</title>

    <!-- CSS SIGNUP -->
    <link rel="stylesheet" href="{{ asset('css/style-signup.css') }}">
</head>
<body>
<form method="POST" action="{{ route('register.send') }}">
    @csrf
    <div class="card">
        <h2 class="title">S'inscire</h2>
        <p class="subtitle">Vous avez déjà un compte ? <a href="/login"> Connexion</a></p>
        <p class="or"><span>or</span></p>
        <table>
            <tr>
                <td>
                    <label for="titre"> <b>Titre</b></label><br>
                    <select id="input" name="titre">
                        <option value="Madame">Madame</option>
                        <option value="Monsieur">Monsieur</option>
                        <option value="Autres">Autres</option>
                    </select>
                </td>
                <td>
                    <label for="phone"> <b>Numéro téléphone</b></label><br>
                    <input type="text" placeholder="Votre numéro" name="phone" id="input" required>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="name"> <b>Prénom</b></label><br>
                    <input type="text" placeholder="Votre prénom" name="name" id="input" required>
                </td>
                <td>
                    <label for="lastName"> <b>Nom</b></label><br>
                    <input type="text" placeholder="Votre nom" name="lastName" id="input" required>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="username"> <b>Nom d'utilisateur</b></label><br>
                    <input type="text" placeholder="Votre nom d'utilisateur" name="username" id="input" required>
                </td>
                <td>
                    <label for="email"> <b>Email</b></label><br>
                    <input type="email" placeholder="Votre Email" name="email" id="input" required>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="psw"><b>Password</b></label><br>
                    <input type="password" placeholder="Votre mot de passe" name="psw" id="input" required>
                </td>
                <td>
                    <label for="birth"><b>Date de naissance</b></label><br>
                    <input type="date" placeholder="Date de naissance" name="birth" id="input" required>
                </td>
            </tr>
        </table>
        <button type="submit" class="cta-btn">S'inscire</button>
    </div>
</form>
@include('Include/footer')
</body>
