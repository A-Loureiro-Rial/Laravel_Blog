<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecté!</title>
</head>
<body>
    <h1>Salut <?=$User->name?></h1>
    <h3>Voici ton mail :</h3>
    <p><?=$User->email?></p><br><br>
    <form action="/login/logout" method="post">
        <input type="submit" value="Logout">
        <input type="hidden" name="_token" value="<?=csrf_token()?>">
    </form>
</body>
</html>