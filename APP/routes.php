<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/core/core.php';

use model\Pages;
class routes {
    use Pages;
    private $path;
    public function getRouter()
    {
        return $this->path;
    }
//    public function setRouter($path)
//    {
//        $this->path = $path;
//    }

}
