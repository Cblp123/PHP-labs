<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = trim($_POST['name'] ?? '');
        $date = trim($_POST['date'] ?? '');
        $type = trim($_POST['type'] ?? '');
        $doctor = trim($_POST['doctor'] ?? '');
        $time = trim($_POST['time'] ?? '');

        $csvFile = 'data.csv';

        $dataRow = [$name, $date, $type, $doctor, $time];

        if (($file = fopen($csvFile, 'a')) !== false) {
            fputcsv($file, $dataRow);
            fclose($file);
            echo 'Данные успешно сохранены';
        } else {
            echo 'Ошибка при сохранении';
        }
    }
?>