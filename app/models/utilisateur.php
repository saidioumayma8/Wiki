<?php
class utilisateur
{
    private $email;
    private $nom;
    private $pswd;
    private $role;

    public function __construct($email, $nom, $pswd, $role)
    {
        $this->email = $email;
        $this->nom = $nom;
        $this->pswd = $pswd;
        $this->role = $role;
    }

    public function getemail()
    {
        return $this->email;
    }
    public function getnom()
    {
        return $this->nom;
    }
    public function getpswd()
    {
        return $this->pswd;
    }
    public function getrole()
    {
        return $this->role;
    }


}