<?php
include('const.php');
$db_conn = new PDO('mysql:host=localhost;dbname=' . DB_CONNECTION_DB, DB_CONNECTION_USER, DB_CONNECTION_PASS);
$param = 'DELETE FROM shedule WHERE id="' . $_GET['id'] . '"';
$db_conn->query($param);
header('Location: /');
?>
