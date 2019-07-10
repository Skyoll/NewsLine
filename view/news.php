<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>

<?php foreach ($news as $article):?>

    <a target="_blank" href="/detail/?id=<?= $article[0]?>"><?= $article[1]?></a><br/>

    <a target="_blank" href="/detail/?id=<?= $article[0]?>">
        <img src= "<?= $article[2]?>" width="189" height="255">
    </a><br/>

    <p><?= $article[3]?></p><br/>

<?php endforeach;;?>
</body>
</html>
