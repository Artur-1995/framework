<?php

namespace model;

use mysqli;

class dbPage
{
    private $pages;
    public $sql;

    private $mysql;
    public function __construct(){
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASSWORD', 'root');
        define('DB_NAME', 'site_test');

        $this->mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($mysql->connect_errno) exit('Ошибка подключения к БД');
        $mysql->set_charset('utf-8');
        $mysql->close();

    }
    public function getPages(){
        return $this->pages;
    }

    public function setPages($sql){
        $this->sql = "SELECT * FROM Users";
        if($result = $mysql->query($sql)){
            foreach($result as $row){
                $pageId = $row["id"];
                $namePage = $row["name"];
                $uriPage = $row["url"];
            }
        }
        return $this->pages = $pages;
    }
}