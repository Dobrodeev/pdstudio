<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="reset v2.0.css">
	<link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Shedule</title>
</head>
<body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php
include('const.php');
$db_conn = new PDO('mysql:host=localhost;dbname=' . DB_CONNECTION_DB, DB_CONNECTION_USER, DB_CONNECTION_PASS);
$shedule = $db_conn->query('SELECT * FROM shedule');
while ($row = $shedule->fetch())
{
    $arr[]=$row;
}
$prices = $db_conn->query('SELECT * FROM prices');
while ($row_prices = $prices->fetch())
{
    $arr_prices[]=$row_prices;
}
//echo var_dump($arr_prices);
//echo '<br><br>';
//echo var_dump($row_prices);
?>
<!-- <h4>Расписание</h4> -->
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
    </tr>
    </thead>
    <tbody>
    <? foreach ($arr as $row):?>
        <tr>
            <td><?=$row['time']?></td>
            <td><?=$row['monday']?></td>
            <td><?=$row['tuesday']?></td>
            <td><?=$row['wednesday']?></td>
            <td><?=$row['thursday']?></td>
            <td><?=$row['friday']?></td>
            <td><?=$row['saturday']?></td>
            <td> <?=$row['sunday']?></td>
        </tr>
    <? endforeach;?>
    </tbody>

</table>
<h3>Цены</h3>
<table class="table table-striped table-bordered">
    <thead>

    </thead>
    <tbody>
    <? foreach ($arr_prices as $row_prices):?>
        <tr>
            <td><?=$row_prices['name_lesson']?></td><td><?=$row_prices['price_lesson']?> грн</td>
            <? //echo var_dump($row_prices); ?>
        </tr>
    <? endforeach;?>
    </tbody>

</table>
</body>
</html>

