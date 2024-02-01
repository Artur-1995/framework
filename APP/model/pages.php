<?php

namespace model;
trait Pages
{
    private $pages;

    public function __construct($par)
    {

        if ($par == '/index.php'){
            $par = '/';
        }
        $arr = $this->getPages();
        if (isset($arr[$par]) === false){
            $par = '/404';
        }

        $this->path = $arr[$par];
    }
    public function getPages()
    {
        return $this->pages = [
            '/' => '<h1>Home Page</h1>',
            '/login/' => '<h1>Login Page</h1>',
            '/about/' => '<h1>About</h1>',
            '/404/' => '<h1>Страница к сожалению не найдена</h1>'
        ];
    }
}