<?php

/**
 * Created by PhpStorm.
 * User: Я
 * Date: 22.12.2017
 * Time: 22:09
 */
class Controller
{
    const DB_CONNECTION_DB = 'Dance';
    const DB_CONNECTION_USER = 'root';
    const DB_CONNECTION_PASS = '';
    protected $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=' . DB_CONNECTION_DB, DB_CONNECTION_USER, DB_CONNECTION_PASS);

    }

    public function deleteFrom($id)
    {
        $this->pdo->query('SELECT * FROM shedule WHERE id=' . $id);
        $param = 'DELETE FROM shedule WHERE id="' . $_GET['id'] . '"';
    }

    public function editFrom($id)
    {
        $update = 'UPDATE shedule SET time="' . $_GET['time'] . '", monday="' . $_GET['monday'] . '    " WHERE id=' . $_GET['id'];

    }
}
