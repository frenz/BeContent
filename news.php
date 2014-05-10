<?php

require_once "include/beContent.inc.php";
require_once "include/content.inc.php";


$main = new Skin();

InitGraphic::getInstance()->createGraphic($main,false,false);


$news = new Content($newsEntity, $usersEntity);
$news->setOrderFields("date DESC");

$main->setContent("body", $news->get());
$main->close();  

?>