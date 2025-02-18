<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Медицинская клиника</title>
</head>
<body>
    <h1>Медицинская клиника</h1>
    <form action="form.php" method="POST">
        <!-- Поле для ФИО -->
        <label for="name">ФИО пациента:</label>
        <input type="text" id="name" name="name" required><br><br>

        <!-- Выпадающий список с профилем врача -->
        <label for="specialty">Профиль врача:</label>
        <select id="specialty" name="specialty" required>
            <option value="терапевт">Терапевт</option>
            <option value="кардиолог">Кардиолог</option>
            <option value="невролог">Невролог</option>
            <option value="хирург">Хирург</option>
            <option value="офтальмолог">Офтальмолог</option>
        </select><br><br>

        <!-- Поле для выбора даты приёма -->
        <label for="date">Дата приёма:</label>
        <input type="date" id="date" name="date" required><br><br>

        <!-- Поле для выбора времени приёма -->
        <label for="time">Время приёма:</label>
        <input type="time" id="time" name="time" required><br><br>

        <!-- Поле для ввода номера телефона -->
        <label for="phone">Номер телефона:</label>
        <input type="tel" id="phone" name="phone" placeholder="88005553535" required><br><br>

        <!-- Кнопка отправки формы -->
        <input type="submit" value="Записаться на приём">
    </form>
</body>
</html>