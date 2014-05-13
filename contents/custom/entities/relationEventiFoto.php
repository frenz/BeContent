<?php

require_once realpath(dirname(__FILE__)) .'/../../system/entities/entityImage.php';

$eventiImageRelation = new Relation($eventiEntity, $imageEntity);