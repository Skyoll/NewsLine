<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>

<?php foreach ($news as $a):?>
    <a target="_blank" href="/detail/?id=<?= $a[0]?>"><?= $a[1] .'<br/>' . $a[2]?></a><br/>
<?//   var_dump($news); die();
endforeach;;?>
</body>
</html>
