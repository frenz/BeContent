<?php

session_start();
require_once "include/beContent.inc.php";
require_once "include/view/template/InitGraphic.php";

$sliderEntity = $GLOBALS['sys_slider'];
$imageEntity =$GLOBALS['sys_image'];
$imageSliderRelation = $GLOBALS['sys_image_sys_slider'];
$newsImmageRelation = $GLOBALS['sys_news_sys_slider'];
$menuEntity = $GLOBALS['sys_menu'];
$newsEntity = $GLOBALS['sys_news'];
$developerImageRelation = $GLOBALS['developer_sys_image'];
$developerEntity = $GLOBALS['developer'];  
$pageEntity = $GLOBALS['sys_page'];
$taxonomyEntity = $GLOBALS['taxonomy'];
$taxonomyImageRelation = $GLOBALS['taxonomy_sys_image'];
$loginEntity = $GLOBAL['sys_log'];

$main = new Skin("theme");
InitGraphic::getInstance()->createGraphic($main);

//Creazione oggetto di tipo menu
$menuTemplate = new Skinlet('menu');
$menu = new Content($menuEntity,$menuEntity);
$menu->setFilter("parent_id", 0);
$menu->setOrderFields("sys_menu_position",'sys_menu_parent',"sys_menu0_position");
$menu->apply($menuTemplate); /* apply(ogetto,'nome prefisso istanza') */

//Creazione oggetto di tipo slider
$sliderTemplate = new Skinlet('slider');
$slider = new Content($sliderEntity, $imageSliderRelation, $imageEntity);
$slider->apply($sliderTemplate);

//Creazione oggetto di tipo news
$newsTemplate = new Skinlet('newsHome');
$news = new Content($newsEntity, $newsImageRelation, $imageEntity);
$news->apply($newsTemplate);

//Creazione oggetto di tipo developer
$developerTemplate = new Skinlet('developer');
$developer = new Content($developerEntity, $developerImageRelation, $imageEntity);
$developer->apply($developerTemplate);

//Creazione oggetto di tipo taxonomy
$taxonomyTemplate = new Skinlet('gallery');
$taxonomy = new Content($taxonomyEntity, $taxonomyImageRelation, $imageEntity);
$taxonomy->apply($taxonomyTemplate);

//Creazione oggetto di tipo page
$pageTemplate = new Skinlet('page');
$page = new Content($pageEntity);
$page->apply($pageTemplate);

//Creazione oggetto di tipo login
$loginTemplate = new Skinlet('login');
$login = new Content($loginEntity);
$login->apply($loginTemplate);



$home = new Skinlet("home");
$contact = new Skinlet("contact");

$main->setContent("slider", $sliderTemplate->get());
$main->setContent("body", $home->get());
$main->setContent("menu", $menuTemplate->get());
$main->setContent("news", $newsTemplate->get());
$main->setContent("developer", $developerTemplate->get());
$main->setContent("gallery", $taxonomyTemplate->get());
$main->setContent("page", $pageTemplate->get());
$main->setContent("contact", $contact->get());
$main->setContent("login", $loginTemplate->get());

$main->close();

?>