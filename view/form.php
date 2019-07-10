<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
<h3>Добавить комментарий</h3>
<form action="/addArticleAction.php" enctype="multipart/form-data" method="post">
        <label>Название новости</label>
        <input name="title" type="text"/><br/><br/>
        <label>Загрузка фотографии</label><br/><br/>
        <input type="file" name="image"><br/><br/>
        <label>Новость</label><br/>
        <textarea name="text" rows="10" cols="45" required></textarea>
        <br />
        <input  type="submit" value="Добавить" />
</form>
</body>
</html>