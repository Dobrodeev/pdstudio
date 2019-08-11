<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 19.12.2017
 * Time: 23:46
 */
error_reporting(-1);
ini_set('display_errors', 'On');


include('News.php');
include('const.php');

$news = new News;
$form_type = $_POST['type'];
$name_ofnew = $_POST['name_ofnew'];
$name_description = $_POST['name_description'];
$link_img=$_POST['link_img'];

switch($form_type){
    case 'add':
        $news->add($name_ofnew, $name_description, $link_img);
        break;
    case 'edit':
        $news->edit($name_ofnew, $name_description, $link_img);
        break;
    case 'delete':
        $news->delete($name_ofnew);
        break;
    case 'show':
        $news->show();
        break;

}
