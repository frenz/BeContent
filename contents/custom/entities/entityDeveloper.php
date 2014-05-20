<?php

class EntityDeveloper extends Entity
{
	public function __construct($database,$name)
	{
		parent::__construct($database,$name);
		$this->setPresentation("name");
		$this->addPrimaryKey("name", VARCHAR, 50);
		$this->addField("surname", VARCHAR, 50);
		$this->addField("age", VARCHAR, 2);
		$this->addField("accountgit", VARCHAR, 50);
		$this->addField("e-mail", VARCHAR, 50);
		
	}
}
$developerEntity = new EntityDeveloper($database, "sys_developeres");
$developerEntity->addReference($sys_image,'image');