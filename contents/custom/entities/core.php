<?php

require_once "entityDeveloper.php";

require_once "relationNewsFoto.php";
require_once "relationDeveloperFoto.php";


/*entities*/
$developerEntity->connect();

/*relation*/
$newsImageRelation->connect();
$developerImageRelation->connect();

?>