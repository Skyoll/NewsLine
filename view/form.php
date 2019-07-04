<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
<h3>Добавить комментарий</h3>
<form action="" id="News" method="post">
    <p>
        <label>Название новости</label>
        <input name="NameNews" id="NameNews" value=" " type="text" size="30" alt="Name" required /><br/>
        <label>Новость</label><br/>
        <textarea name="TextNews" id="TextNews" rows="10" cols="45" required></textarea>
        <br />
        <input class="button" type="submit" value="Добавить" />
    </p>
</form>
</body>
</html>
<?php
var_dump($_POST);
?>