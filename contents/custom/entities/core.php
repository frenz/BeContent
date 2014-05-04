<?php



require_once realpath(dirname(__FILE__)) . '/entityEventi.php';


require_once realpath(dirname(__FILE__)) . '/relationEventiFoto.php';


/*entities*/

$tagEntity->connect();
/*relation*/

$eventiImageRelation->connect();