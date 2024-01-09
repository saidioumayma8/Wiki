<?php
include_once "connection.php";
include_once "tag.php";


class tagDAO {
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection();
    }

    public function get_tag(){
        $query = "SELECT * FROM tag";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $vileData = $stmt->fetchAll();
        $vile= array();
        foreach ($vileData as $P) {
            $vile[] = new tag($P["nom_tag"]
            );
        }
        return $vile;

    }
    public function insert_tag($tag)
    {
        $query = "INSERT INTO tag(nom_tag)  
                  VALUES (:nom_tag)";

        $stmt = $this->db->prepare($query);

        $nom_tag = $tag->getnom_tag();
       
        

        $stmt->bindParam(':nom_tag', $nom_tag);
     
        


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