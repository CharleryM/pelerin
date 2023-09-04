<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="{{ asset('css/intra.css') }}" rel="stylesheet" />

    <title>Page de CMS</title>
</head>
<body>
    <h1>Page de CMS pour Uploader une Vidéo</h1>

    <div class='form'>
    <form action="/cms/upload-video" method="post" enctype="multipart/form-data">
        @csrf

        <div class='champs'>
            <label for="video">Sélectionnez la vidéo :</label>
            <input type="file" id="video" name="video" accept="video/*" required>
        </div>
        <br><br>

        <div class='champs'>
            <label for="presentation">Texte de présentation :</label>
            <textarea id="presentation" name="presentation" rows="4" required></textarea>
        </div>
        <br><br>

        <div class='champs'>
            <label for="opening_dates">Dates d'ouverture :</label>
            <textarea id="opening_dates" name="opening_dates" rows="2" required></textarea>
        </div>
        <br><br>

        <div class='champs'>
            <label for="closing_text">Texte de fin :</label>
            <textarea id="closing_text" name="closing_text" rows="4" required></textarea>
        </div>
        <br><br>
    </div>

        <button type="submit">Uploader la vidéo</button>
    </form>
</body>
</html>
