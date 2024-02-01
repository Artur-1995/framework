<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/core/core.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/routes.php';

$pages = include_once $_SERVER['DOCUMENT_ROOT'] . "/app/model/pages.php";
$path = $_SERVER['REQUEST_URI'];
$router = new routes($path);

