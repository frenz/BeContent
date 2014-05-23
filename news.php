<?php

require_once "include/beContent.inc.php";
require_once "include/view/template/InitGraphic.php";

$newsPageEntity = $GLOBALS['sys_news'];

$main = new Skin("theme");
InitGraphic::getInstance()->createGraphic($main);

//Creazione oggetto di tipo news
$newsPageTemplate = new Skinlet('newsPage');
$newsPage = new Content($newsPageEntity);
$newsPage->setOrderFields("id DESC");
$newsPage->apply($newsPageTemplate);

$main->setContent("body", $newsPage->get());
$main->close();  

?>