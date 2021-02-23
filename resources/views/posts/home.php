<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <?php
        foreach($posts as $post)
        {
    ?>
            <h1><?=$post->Title?></h1><br><br>
            <p><?=$post->Content?></p>

    <?php
        }
    ?>
</body>
</html>