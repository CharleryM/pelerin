<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/newUser.css') }}" rel="stylesheet" />
    <title>Création d'utilisateur</title>

</head>
<body>
    <div class="container">
        <h2>Création d'utilisateur</h2>
        <form action="/users" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Créer l'utilisateur</button>
        </form>
    </div>
</body>
</html>
