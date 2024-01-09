<?php
class categorie
{
    private $cat_date;
    private $nom_cat;

    public function __construct($cat_date, $nom_cat)
    {
        $this->cat_date = $cat_date;
        $this->nom_cat = $nom_cat;
    }

    public function getcat_date()
    {
        return $this->cat_date;
    }

    public function getnom_cat()
    {
        return $this->nom_cat;
    }


}