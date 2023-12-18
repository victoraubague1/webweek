
<?php
class Participant {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function insert($nom, $prenom, $age, $photo, $id_equipe) {
        try {
            // Prepare the SQL statement
            $stmt = $this->db->prepare("INSERT INTO participant (nom, prenom, age, photo_participant, id_equipe) VALUES (:nom, :prenom, :age, :photo, :id_equipe)");
            
            // Bind the parameters
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':age', $age);
            $stmt->bindParam(':photo', $photo);
            $stmt->bindParam(':id_equipe', $id_equipe);
            
            // Execute the statement
            $stmt->execute();
            
            // Return the id of the inserted participant
            return $this->db->lastInsertId();
        } catch (PDOException $e) {
            echo "Insertion failed: " . $e->getMessage();
            return false;
        }
    }
}
?>
