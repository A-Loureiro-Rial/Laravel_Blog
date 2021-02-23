<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Laravel</title>
</head>
<body>
    <h1>Connectes-toi ici!</h1>
    <form action="/login/authenticate" method="post">
        @if($errors->any())
        <h4>{{$errors->first()}}</h4>
        @endif
        <label for="email">Mail : </label><input type="text" name="email" id="email">
        <label for="password">Password : </label><input type="text" name="password" id="password">
        <input type="submit" value="Se connecter">        
        <input type="hidden" name="_token" value="<?=csrf_token()?>">
    </form><br>

    <form action="/login/form" method="post">
    <input type="submit" value="Créer un.e utilisateur.rice">
    <input type="hidden" name="_token" value="<?=csrf_token()?>">
    </form>
</body>
</html>