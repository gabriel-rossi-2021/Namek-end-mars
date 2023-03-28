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
            <h3>Informations générales</h3>
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
                    <label for="psw"><b>Mot de passe</b></label><br>
                    <input type="password" placeholder="Votre mot de passe" name="psw" id="input" required>
                </td>
                <td>
                    <label for="confirm-psw"><b>Confirmation</b></label><br>
                    <input type="password" placeholder="Encore une fois" name="confirm-psw" id="input" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="birth"><b>Date de naissance</b></label><br>
                    <input type="date" placeholder="Date de naissance" name="birth" id="input" required>
                </td>
            </tr>
        </table>
        <table>
            <h3>Informations complémentaires</h3>
            <tr>
                <td>
                    <label for="rue"> <b>Rue</b></label><br>
                    <input type="text" placeholder="Votre rue" name="rue" id="input" required>
                </td>
                <td>
                    <label for="num-rue"> <b>N° de rue</b></label><br>
                    <input type="number" placeholder="Votre n° de rue" name="num-rue" id="input" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ville"> <b>Ville</b></label><br>
                    <input type="text" placeholder="Votre ville" name="ville" id="input" required>
                </td>
                <td>
                    <label for="npa"> <b>NPA</b></label><br>
                    <input type="number" placeholder="Votre NPA" name="npa" id="input" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pays"> <b>Pays</b></label><br>
                    <input type="text" placeholder="Votre pays" name="pays" id="input" value="Suisse" disabled required>
                    <p>*Pour l'instant nous livrons que en Suisse</p>
                </td>
            </tr>
        </table>
        <button type="submit" class="cta-btn">S'inscire</button>
    </div>
</form>
@include('Include/footer')
</body>
