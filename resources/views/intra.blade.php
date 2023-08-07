<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jeunes pelerins - intranet</title>
    <link rel="stylesheet" href="{{asset('css/intra.css')}}">
    <link
      href="{{ asset('images/icon_header.png') }}"
      rel="icon"
      type="img/png"
      alt="Ma Image"
    />
</head>
<body>
    <form action="/intranet" method="get">
        <label for="presantation_g">présantation du groupe :</label>
        <input type="text" id="presantation_g" name="presantation_g"><br><br>
        <label for="date" >début :</label>
        <input type="date" id="date_debut" name="date_debut"><br><br>
        <label for="date" >début :</label>
        <input type="date" id="date_fin" name="date_fin"><br><br>
    </form>
</body>
</html>