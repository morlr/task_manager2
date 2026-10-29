<?php

$appName = "Task Manager";
$taskTitle = "Вивчити основи PHP та динамічне виведення";
$taskTimeEstimate = 2; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName ?></title>
</head>
<body>
<header>
        <h1><?= $appName ?></h1>
    </header>
    <main>
        <h2>Поточне завдання:</h2>
        <ul>
            <li><strong>Назва:</strong> <?= $taskTitle ?></li>
            <li><strong>Очікуваний час виконання:</strong> <span class="accent"><?= $taskTimeEstimate ?></span> год.</li>
        </ul>
    </main>
</body>
</html>