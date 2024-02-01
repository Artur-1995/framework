<?php
global $router;
global $pages;
global $path;
$pages = $router->getPages();

$urlPage = [];
$urlName = [];

if ($path !== '/404' && isset($pages[$path])) {
    foreach ($pages as $keys => $value) {
        if ($keys !== $path && $keys !== '/404') {
            array_push($urlPage, $keys);
            array_push($urlName, $value);
        }
    }

}
if ($path == '/404'){
    $router->getPages();
}