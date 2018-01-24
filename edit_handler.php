<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
include('const.php');
$db_conn = new PDO('mysql:host=localhost;dbname=' . DB_CONNECTION_DB, DB_CONNECTION_USER, DB_CONNECTION_PASS);
//$db_conn->query("UPDATE shedule SET time='$_GET['time']', monday='$_GET['monday']', tuesday='$_GET['tuesday']', wednesday='$_GET['wednesday']', thursday='$_GET['thursday']', friday='$_GET['friday']', saturday='$_GET['saturday']', sunday='$_GET['sunday']' WHERE id='$_GET['id']'");
$db_conn->query('UPDATE shedule SET time="'.$_GET['time'].'", monday="'.$_GET['monday'].'    " WHERE id='.$_GET['id']);
echo var_dump($_GET);
?>

</body>
</html>
