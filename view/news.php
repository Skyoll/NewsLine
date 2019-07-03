<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
<?php foreach ($news as $item) :?>
    <a target="_blank" href="/detail/?id=<?= $item[0]?>"><?= $item[1]?></a><br/>
<?php endforeach;;?>

</body>
</html>
