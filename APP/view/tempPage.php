<?php
global $router;
include_once $_SERVER['DOCUMENT_ROOT'] . '/app/controller/main.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=trim($router->getRouter(), '<h1></h1>')?></title>
</head>
<?=$router->getRouter()?>
<body>
<?php if ($urlName && $urlPage) {
    include_once $_SERVER['DOCUMENT_ROOT'] . '/app/view/tempMain.php';
}?>
</body>
</html>