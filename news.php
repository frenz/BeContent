<?php

session_start();
require_once "include/beContent.inc.php";
require_once "include/view/template/InitGraphic.php";


$newsEntity = $GLOBALS['sys_news'];

$main = new Skin("theme");
InitGraphic::getInstance()->createGraphic($main);



//Creazione oggetto di tipo news
$newsTemplate = new Skinlet('newsPage');
$news = new Content($newsEntity);
$news->setOrderFields("id DESC");
$news->apply($newsTemplate);




$home = new Skinlet("home");


$main->setContent("news", $newsTemplate->get());


$main->close();

?>