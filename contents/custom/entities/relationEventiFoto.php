<?php

require_once realpath(dirname(__FILE__)) .'/core.php';
require_once realpath(dirname(__FILE__)) .'/entityEventi.php';
require_once realpath(dirname(__FILE__)) .'/../../system/entities/entityImage.php';

$eventiImageRelation = new Relation($eventiEntity, $imageEntity);