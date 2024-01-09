<?php
class wiki
{
    private $contenu;
    private $id_w;
    private $img;
    private $isArchive;
    private $title;
    private $wiki_date;

    public function __construct($contenu, $id_w, $img, $isArchive, $title, $wiki_date)
    {
        $this->contenu = $contenu;
        $this->id_w = $id_w;
        $this->img = $img;
        $this->isArchive = $isArchive;
        $this->title = $title;
        $this->wiki_date = $wiki_date;
    }

    public function getcontenu()
    {
        return $this->contenu;
    }
    public function getid_w()
    {
        return $this->id_w;
    }
    public function getimg()
    {
        return $this->img;
    }
    public function getisArchive()
    {
        return $this->isArchive;
    }
    public function gettitle()
    {
        return $this->title;
    }
    public function getwiki_date()
    {
        return $this->wiki_date;
    }


}