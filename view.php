<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="others/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>View</title>
</head>

<body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php
include('const.php');
$db_conn = new PDO('mysql:host=localhost;dbname=' . DB_CONNECTION_DB, DB_CONNECTION_USER, DB_CONNECTION_PASS);
$shedule = $db_conn->query('SELECT * FROM shedule');
while ($row = $shedule->fetch()) {
    $arr[] = $row;
}
?>
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
        <td></td>
        <td>Пн</td>
        <td>Вт</td>
        <td>Ср</td>
        <td>Чт</td>
        <td>Пт</td>
        <td>Сб</td>
        <td>Вс</td>
        <td>Редактировать</td>
        <td>Удалить</td>
    </tr>
    </thead>
    <tbody>
    <? foreach ($arr as $row): ?>
        <tr>
            <td><?= $row['time'] ?></td>
            <td><?= $row['monday'] ?></td>
            <td><?= $row['tuesday'] ?></td>
            <td><?= $row['wednesday'] ?></td>
            <td><?= $row['thursday'] ?></td>
            <td><?= $row['friday'] ?></td>
            <td><?= $row['saturday'] ?></td>
            <td> <?= $row['sunday'] ?></td>
            <td><a href="edit.php?id=<?= $row['id'] ?>">Редактировать</a></td>
            <td><a href="delete.php?id=<?= $row['id'] ?>">Удалить</a></td>
        </tr>
    <? endforeach; ?>
    </tbody>

</table>

</body>

</html>