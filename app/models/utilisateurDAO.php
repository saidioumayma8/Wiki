<?php
include_once "connection.php" ;
include_once "utilisateur.php" ;


class utilisateurDAO {
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection();
    }

    public function get_utilisateur(){
        $query = "SELECT * FROM utilisateur";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $utilisateurData = $stmt->fetchAll();
        $utilisateur= array();
        foreach ($utilisateurData as $P) {
            $utilisateur[] = new utilisateur($P["email"],$P["nom"], $P["pswd"], $P["role"]
            );
        }
        return $utilisateur;

    }
    public function insert_utilisateur($utilisateur)
    {
        $query = "INSERT INTO utilisateur(email, nom, pswd, role) 
                  VALUES (:email, :nom, :pswd, :role )";

        $stmt = $this->db->prepare($query);

        $email = $utilisateur->getemail();
        $nom = $utilisateur->getnom();
        $pswd = $utilisateur->getpswd();
        $role = $utilisateur->getrole();
        

        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':pswd', $pswd);
        $stmt->bindParam(':role', $role);
        


        try {
            $stmt->execute();
        } catch (PDOException $e) {
            throw $e;
        }
       
}
public function update_utilisateur($utilisateur)
    {
        $query = "UPDATE utilisateur SET 
                  email = :email, 
                  nom = :nom,
                  pswd = :pswd,
                  role = :role,
                  WHERE nom = :nom";

        $stmt = $this->db->prepare($query);

        $email = $utilisateur->getemail();
        $nom = $utilisateur->getnom();
        $pswd = $utilisateur->getpswd();
        $role = $utilisateur->getrole();
       

        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':pswd', $pswd);
        $stmt->bindParam(':role', $role);
       

        try {
            $stmt->execute();
            echo "Record updated successfully.";
        } catch (PDOException $e) {
            throw $e;
        }
    }
    public function delete_utilisateur($id)
    {
        $query = "UPDATE utilisateur WHERE name = :nom";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':nom', $id);

        try {
            $stmt->execute();
            echo "Record deleted successfully.";
        } catch (PDOException $e) {
            throw $e;
        }
    }
}

?>