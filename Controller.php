<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 22.12.2017
 * Time: 22:09
 */
class Controller
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new PDO('mysql:host=localhost;dbname=' . DB_CONNECTION_DB, DB_CONNECTION_USER, DB_CONNECTION_PASS);

    }
}
