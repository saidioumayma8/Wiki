<?php
class tag
{
    private $nom_tag;

    public function __construct($nom_tag)
    {
        $this->nom_tag = $nom_tag;
    }

    public function getnom_tag()
    {
        return $this->nom_tag;
    }


}