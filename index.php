<?php

require_once 'helpers.php';
require_once 'MainController.php';

$main = new MainController();

// 1.Определить максимальный возраст
$task1 = $main->pdoAd->execute(
    $method = 'selectOne',
    $sql = 'SELECT MAX(age) AS age FROM person'
);

$maxAge = $task1->age;


// 2.Найти любую персону, у которой mother_id не задан и возраст меньше максимального
$task2 = $main->pdoAd->execute(
    $method = 'selectOne',
    $sql = "SELECT * 
            FROM person 
            WHERE mother_id IS NULL
            AND age < :maxAge",
    $args = ['maxAge' => $maxAge]
);


// 3.изменить у нее возраст на максимальный
//$task2_id = $task2->id;
//$task3 = $main->pdoAd->execute(
//    $method = 'execute',
//    $sql = "UPDATE person
//            SET age = :maxAge
//            WHERE id = :task2_id",
//    $args = [
//        'maxAge' => $maxAge,
//        'task2_id' => $task2_id
//    ]
//);


// 4.Получить список персон максимального возраста (фамилия, имя). Желательно НЕ ИСПОЛЬЗУЯ полученное на шаге 1 значение.
$task4 = $main->pdoAd->execute(
    $method = 'selectAll',
    $sql = "SELECT lastname, firstname, age
            FROM person
            WHERE age = (SELECT MAX(age) FROM person)
            ORDER BY lastname ASC, firstname ASC"
            //Сортировка для 5го задания
);


// 5.Сформировать и отобразить HTML-страницу:
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        * { font-family: Arial, sans-serif; }
    </style>
</head>
<body>

<table border="1" align="center" width="60%">
    <caption>Список персон максимального возраста (<?= $maxAge ?>)</caption>
    <tr>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Возраст</th>
    </tr>
    <?php foreach ($task4 as $person): ?>

    <tr>
        <td><?= $person->lastname ?></td>
        <td><?= $person->firstname ?></td>
        <td><?= $person->age ?></td>
    </tr>

    <?php endforeach; ?>
</table>

</body>
</html>

