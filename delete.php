<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="others/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Delete</title>
</head>

<body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>

<?
$id = $_GET['id'];
if (!isset($id)) die(' Определите id');
include('const.php');
$db_conn = new PDO('mysql:host=localhost;dbname=' . DB_CONNECTION_DB, DB_CONNECTION_USER, DB_CONNECTION_PASS);
$shedule = $db_conn->query('SELECT * FROM shedule WHERE id=' . $id);
$row = $shedule->fetch();

?>
<form action='delete_handler.php'>
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
        <tr>
            <td><input name="id" hidden value='<?= $row['id'] ?>'></td>
            <td><input name="time" placeholder=" время " value='<?= $row['time'] ?>'></td>
            <td><input name="monday" placeholder=" Пн " value='<?= $row['monday'] ?>'></td>
            <td><input name="tuesday" placeholder=" Вт " value='<?= $row['tuesday'] ?>'></td>
            <td><input name="wednesday" placeholder=" Ср " value='<?= $row['wednesday'] ?>'></td>
            <td><input name="thursday" placeholder=" Чт " value='<?= $row['thursday'] ?>'></td>
            <td><input name="friday" placeholder=" Пт " value='<?= $row['friday'] ?>'></td>
            <td><input name="saturday" placeholder=" Сб " value='<?= $row['saturday'] ?>'></td>
            <td><input name="sunday" placeholder=" Нд " value='<?= $row['sunday'] ?>'></td>

        </tr>
        </tbody>

    </table>
    <input type='submit'>
    <input type="reset">
    <form>
</body>

</html>
