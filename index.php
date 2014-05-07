<?php

session_start();
require_once "include/beContent.inc.php";
require_once "include/view/template/InitGraphic.php";

$sliderEntity = $GLOBALS['sys_slider'];
$imageEntity = $GLOBALS['sys_image'];
$imageSliderRelation = $GLOBALS['sys_image_sys_slider'];
$main = new Skin("theme");
InitGraphic::getInstance()->createGraphic($main);

$homeTemplate = new Skinlet("home");

/*skinlet slider: skins/theme/sliderHome.html*/
$sliderTemplate = new Skinlet('sliderHome');
$slider = new Content($sliderEntity, $imageSliderRelation, $imageEntity);
$slider->forceSingle();
$slider->setFilter('titolo', 'sliderHome');
$slider->apply($sliderTemplate, 'slider');


$main->setContent('slider', $sliderTemplate->get());
$main->setContent("body", $homeTemplate->get());

$main->close(); 

?>