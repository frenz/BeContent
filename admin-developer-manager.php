<?php

session_start();

require_once "include/beContent.inc.php";
require_once "include/content.inc.php";
require_once "include/auth.inc.php";
require_once "include/view/template/InitGraphic.php";

$main = new Skin("system");

InitGraphic::getInstance()->createSystemGraphic($main);

$form = new Form("dataEntry",$developerEntity);

$form->addTitleForm("Developer Management");

$form->addSection('developer details');
$form->addText("name", "Nome", 255, MANDATORY);
$form->addText("surname", "Cognome", 255, MANDATORY);
$form->addText("email", "E-Mail", 255);
$form->addText("gitaccount", "Account", 255);
$form->addLongDate("birthday", "Data_Di_Nascita");

$imageForm = new ImageForm('imageEntry',$developerEntity);
$imageForm->addImage('foto','Foto');
$form->triggers($imageForm);

$main->setContent("body", $form->requestAction());

$main->close();  

?>