<?php

/**
 * Created by PhpStorm.
 * User: Я
 * Date: 19.12.2017
 * Time: 23:54
 */
require_once("Controller.php");
class News extends Controller
{
    public function add($name_ofnew, $name_description, $link_img)
    {
        $sth = $this->dbh->query('INSERT INTO News (name, description, link) VALUES ("' . $name_ofnew . '", "' . $name_description . '","' . $link_img . '")');

        header('Location: /news.html');
    }

    public function edit($name, $name_description, $link_img)
    {
//        $sth = $this->dbh->query('UPDATE News SET description="" WHERE name="' . $name_ofnew . '"');
        $sth = $this->dbh->query("UPDATE News SET description='$name_description', link='$link_img' WHERE name='$name'");
        header('Location: /news.html');
    }

    public function delete($name_ofnew)
    {
        $sth = $this->dbh->query('DELETE FROM News WHERE name="' . $name_ofnew . '"');
//        echo 'DELETE FROM News WHERE name_ofnew="' . $name_ofnew . '"';
        header('Location: /news.html');
        //$this->delete_from_db("News", "name", $name_ofnew);
    }
    
    public function show()
    {
        $sth = $this->dbh->query("SELECT * FROM News;");
        $arr=[];
        while ($row = $sth->fetch())
        {
//            echo var_dump($row);
//            echo "<hr>";
            $arr[]=$row;
        }
//        echo var_dump($arr);
        foreach ($arr as $element)
        {
//            echo var_dump($element)."<hr>";
            echo "<h3>$element[1]</h3> <p>$element[2]</p><img src='$element[3]'><hr/> ";
        }
        //header('Location: /news.html');
    }
}
