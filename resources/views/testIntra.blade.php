<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Page d'accueil</h1>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<p>Date de début : {{ $intranetData->date_debut }}</p>
<p>Date de fin : {{ $intranetData->date_fin }}</p>

<form action="{{ route('update.dates') }}" method="post">
    @csrf
    <label for="date_debut">Date de début :</label>
    <input type="date" name="date_debut" value="{{ $intranetData->date_debut }}"><br>
    <label for="date_fin">Date de fin :</label>
    <input type="date" name="date_fin" value="{{ $intranetData->date_fin }}"><br>
    <button type="submit">Mettre à jour les dates</button>
</form>

</body>
</html>