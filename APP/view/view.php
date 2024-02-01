<?php

namespace view;

class view
{
    private $dir_tmpl; //Путь к директории файла
    public function __construct($dir_tmpl){ //Присваивает входные данные переменной
        $this->dir_tmpl = $dir_tmpl;
    }
    public function render($file, $param, $terurn = false) {
        // Принимает имя, и параметры файла
        $template = $this->dir_tmpl.$file.".tpl"; // Полный путь к файлу
        extract($param); // Создаем переменные со значениями из пар ключей и значений
        ob_start(); // Сбор в выходной буфер
        include ($template); // Подключаем файл
        if ($return) {
            return ob_get_clean();
        } else echo ob_get_clean();
    }
//    function includeTemplate(string $templatePath, array $data = []): void
//    {
//        extract($data);
//
//        $fullPath = $_SERVER['DOCUMENT_ROOT'] . "/templates/" . ltrim($templatePath, '/');
//
//        if (file_exists($fullPath)) {
//            include($fullPath);
//        }
//    }

}