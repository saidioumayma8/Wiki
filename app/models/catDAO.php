<?php
include_once "Database.php" ;
include_once "categorie.php" ;


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
            $categorie[] = new categorie($P["cat_date"],$P["nom_cat"]
            );
        }
        return $categorie;

    }
    public function insert_categories($categorie)
    {
        $query = "INSERT INTO categorie(cat_date, nom_cat) 
                  VALUES (:cate_date, :nom_cat)";

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
public function update_categorie($categorie)
    {
        $query = "UPDATE categorie SET 
                  nom_cat = :nom_cat, 
                  cat_date = :cat_date,
                  WHERE nom_cat = :nom_cat";

        $stmt = $this->db->prepare($query);

        $nom_cat = $categorie->getnom_cat();
        $cat_date = $categorie->getcat_date();
       

        $stmt->bindParam(':nom_cat', $nom_cat);
        $stmt->bindParam(':cat_date', $cat_date);
       

        try {
            $stmt->execute();
            echo "Record updated successfully.";
        } catch (PDOException $e) {
            throw $e;
        }
    }
    public function delete_categorie($id)
    {
        $query = "UPDATE categorie WHERE name = :nom_cat";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':nom_cat', $id);

        try {
            $stmt->execute();
            echo "Record deleted successfully.";
        } catch (PDOException $e) {
            throw $e;
        }
    }
}

?>