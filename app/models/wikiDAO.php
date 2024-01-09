<?php
include_once "connection.php";
include_once "wiki.php";


class wikiDAO {
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection();
    }

    public function get_wiki(){
        $query = "SELECT * FROM wiki";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $wikiData = $stmt->fetchAll();
        $wiki= array();
        foreach ($wikiData as $P) {
            $wiki[] = new wiki($P["contenu"], $P["id_w"], $P["img"], $P["title"], $P["title"], $P["wiki"]
            );
        }
        return $wiki;

    }
    public function insert_wiki($wiki)
    {
        $query = "INSERT INTO wiki(contenu,id_w,img,title,wiki) 
                  VALUES (:contenu, :id_w, :img, :title, :wiki)";

        $stmt = $this->db->prepare($query);

        $contenu = $wiki->getcontenu();
        $id_w = $wiki->getid_w();
        $img = $wiki->getimg();
        $title = $wiki->gettitle();
        $wiki = $wiki->getwiki();
       
        

        $stmt->bindParam(':contenu', $contenu);
        $stmt->bindParam(':id_w', $id_w);
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':wiki', $wiki);
     
        


        try {
            $stmt->execute();
        } catch (PDOException $e) {
            throw $e;
        }
       
    }

    public function delete_wiki($id)
    {
        $query = "UPDATE wiki WHERE name = :nom_tag";
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