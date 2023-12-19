
<?php
class Participant {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function insert($nom, $prenom, $age, $photo, $id_equipe) {
        try {

            $stmt = $this->db->prepare("INSERT INTO participant (nom, prenom, age, photo_participant, id_equipe) VALUES (:nom, :prenom, :age, :photo, :id_equipe)");
            

            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':age', $age);
            $stmt->bindParam(':photo', $photo);
            $stmt->bindParam(':id_equipe', $id_equipe);
            
     
            $stmt->execute();
    
            return $this->db->lastInsertId();
        } catch (PDOException $e) {
            echo " Cela n'a pas marche desoler" . $e->getMessage();
            return false;
        }
    }
}
?>
