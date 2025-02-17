<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЛР№2</title>
</head>
<body>
    <h1>Введите данные для записи в медицинскую клинику</h1> 
    <?php phpinfo(); ?>
    <form action="form.php" method="POST">
        <label for="name">ФИО:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="date">Дата приема:</label>
        <input type="date" id="date" name="date" required><br><br>
        <label for="type">Направление:</label>
        <input type="text" id="type" name="type" required><br><br>
        <label for="doctor">Врач:</label>
        <input type="text" id="doctor" name="doctor" required><br><br>
        <label for="time">Время приёма:</label>
        <input type="time" id="time" name="time" required><br><br>
        <input type="submit" value="Записаться на приём">
    </form>
</body>
</html>