<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/login/create" method="post">
        <label for="name">Nom: </label><input type="text" name="name" id="name"><br>
        <label for="email">Email: </label><input type="text" name="email" id="email"><br>
        <label for="password">Mot de passe: </label><input type="password" name="password" id="password"><br><br>
        <input type="submit" value="S'inscrire">
        <input type="hidden" name="_token" value="<?=csrf_token()?>">
    </form>
</body>
</html>