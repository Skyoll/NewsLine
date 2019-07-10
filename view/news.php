<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>

<?php foreach ($news as $a):?>
    <a target="_blank" href="/detail/?id=<?= $a[0]?>"><?= $a[1]?></a><br/>
    <a href=href="/detail/?id=<?= $a[0]?>"><?= $a[2]?></a><br/>
    <img src= "<?= $a[2]?>" width="189" height="255" alt="lorem"></a><br/>
    <a target="_blank" href="/detail/?id=<?= $a[0]?>"><?= $a[3]?></a><br/>
<?//   var_dump($news); die();
endforeach;;?>
</body>
</html>
