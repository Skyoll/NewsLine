<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
<h3>Добавить комментарий</h3>
<form action="/addArticleAction.php" id="News" method="post">
    <p>
        <label>Название новости</label>
        <input name="title" id="NameNews" value=" " type="text" size="30" alt="title" required /><br/>
        <label>Новость</label><br/>
        <textarea name="text" id="TextNews" rows="10" cols="45" required></textarea>
        <br />
        <input class="button" type="submit" value="Добавить" />
    </p>
</form>
</body>
</html>