<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/form/save" method="post">
        <input type="text" name="Title" id="Title">
        <textarea name="Content" id="Content" cols="30" rows="10" placeholder="type your article here!"></textarea>
        <input type="submit" value="Ajouter un article">

        <input type="hidden" name="_token" value="<?=csrf_token()?>">
    </form>
</body>
</html>