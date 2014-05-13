<?php

class EntityEventi extends Entity
{
    public function __construct($database, $name,$owner="")
    {
        parent::__construct($database,$name,$owner);
        $this->addField('descrizione', TEXT);
        $this->addField('nome', VARCHAR, 255, MANDATORY);
        $this->addField('data', LONGDATE);
        $this->addField('luogo', VARCHAR, 255);
        $this->addField('latitudine', VARCHAR, 255);
        $this->addField('longitudine', VARCHAR, 255);
        $this->addField('suggest', TEXT);
        $this->setPresentation("nome");
    }
}

$eventiEntity = new EntityEventi($database,
    Config::getInstance()->getConfigurations()['database']['prefix'].'eventi');

$eventiEntity->addReference($imageEntity, 'foto');