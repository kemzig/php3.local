<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

require  __DIR__.'/autoload.php';

$article = new \App\Models\Article();

$article->title = 'Заголовок новости';
$article->content = 'Опять что-то произошло';

$article->insert();

var_dump($article);


?>

</body>
</html>




