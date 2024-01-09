<?php
include_once "connection.php";
include_once "categorie.php";


class categorieDAO {
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection();
    }

    public function get_categorie(){
        $query = "SELECT * FROM categorie";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $categorieData = $stmt->fetchAll();
        $categorie= array();
        foreach ($categorieData as $P) {
            $categorie[] = new categorie($P["cat_date"], $P["nom_cat"]
            );
        }
        return $categorie;

    }
    public function insert_categorie($categorie)
    {
        $query = "INSERT INTO categorie(cat_date,nom_cat) 
                  VALUES (:cat_date, :nom_cat)";

        $stmt = $this->db->prepare($query);

        $cat_date = $categorie->getcat_date();
        $nom_cat = $categorie->getnom_cat();
       
        

        $stmt->bindParam(':cat_date', $cat_date);
        $stmt->bindParam(':nom_cat', $nom_cat);
     
        


        try {
            $stmt->execute();
        } catch (PDOException $e) {
            throw $e;
        }
       
    }

    public function delete_vile($id)
    {
        $query = "UPDATE tag WHERE name = :nom_tag";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':nom_tag', $id);

        try {
            $stmt->execute();
            echo "Record deleted successfully.";
        } catch (PDOException $e) {
            throw $e;
        }
    }
}

?>