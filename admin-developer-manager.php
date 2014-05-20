<?php
/**
 * User: daniele
 * Date: 21/09/13
 * Time: 12.07
 * @author dipompeodaniele@gmail.com
 */


session_start();

require "include/beContent.inc.php";
require "include/auth.inc.php";
require_once 'include/content.inc.php';
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');

$main = new Skin("system");

InitGraphic::getInstance()->createSystemGraphic($main);

$form = new Form("dataEntry", $developerEntity);

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

$relationForm = new RelationForm("dataEntry3", $serviziDeveloperRelation);
$relationForm->addSection('Servizi da legare');
$relationForm->addRelationManager("vp_servizi_nome", "Servizi");
$form->triggers($relationForm);

$relationForm = new RelationForm("dataEntry4", $developerImageRelation);
$relationForm->addSection('Immagini da legare');
$relationForm->addRelationManager("id_sys_image", "Immagini");
$form->triggers($relationForm);

$main->setContent("body", $form->requestAction());

$main->close();