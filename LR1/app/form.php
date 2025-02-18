<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = trim($_POST['name'] ?? '');
        $specialty = trim($_POST['specialty'] ?? '');
        $date = trim($_POST['date'] ?? '');
        $time = trim($_POST['time'] ?? '');
        $phone = trim($_POST['phone'] ?? '');

        $csvFile = 'data.csv';

        $dataRow = [$name, $specialty, $date, $time, $phone];

        if (($file = fopen($csvFile, 'a')) !== false) {
            fputcsv($file, $dataRow);
            fclose($file);
            echo 'Данные успешно сохранены';
        } else {
            echo 'Ошибка при сохранении';
        }
    }
?>