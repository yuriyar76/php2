<?php
require_once __DIR__ . '/autoload.php';
require_once __DIR__ . '/function.php';
use App\Db;

$db = new Db();

//\App\Models\Article::addItem(['Заголовок еще одной пробной статьи', 'Текст новой пробной статьи']);
//$res = \App\Models\Article::findById(5);
//$res = \App\Models\Article::findAll();
//$res = \App\Models\User::findAll();
if ($_GET['id']){
    $id = (int)$_GET['id'];
    $templ = \App\Models\Article::getArticle($id);
}else{
    $templ = \App\Models\Article::getArticles(4);
}


echo $templ;

