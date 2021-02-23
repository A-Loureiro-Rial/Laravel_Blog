<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <h1><?=$post->Title?></h1><br><br>
    <p><?=$post->Content?></p><br><br>
    <form action="/comment/save" method="post">
        <input type="hidden" name="article_id" value="<?=$post->id?>">
        <input type="text" name="comment" id="comment">
        <input type="hidden" name="_token" value="<?=csrf_token()?>">
        <input type="submit" value="Ajouter un commentaire">
    </form>
    <label for="Comments">Comments</label>
    <ul>
<?php
foreach ($comments as $comment)
{
?>
        <li>
            <p><?=$comment->comment?></p>
            <span>Creation date: <?=$comment->created_at?></span>
        </li><br>
<?php
}
?>
    </ul>
</body>
</html>