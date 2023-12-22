<?php
// Inclure les fichiers de configuration et de classe sinon sa marche aps
include 'configpoo.php';
include 'participant.php';

$configInstance = new Config();
$db = $configInstance->connect();

function insertNewTeam($db, $nom_equipe, $id_groupe) {
    $stmt = $db->prepare("INSERT INTO equipe (nom_equipe, id_groupe) VALUES (?, ?)");
    $stmt->execute([$nom_equipe, $id_groupe]);
    return $db->lastInsertId(); 
}

function insertParticipant($db, $nom, $prenom, $age, $id_equipe) {
    $participant = new Participant($db);
    return $participant->insert($nom, $prenom, $age, null, $id_equipe);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom_equipe = $_POST['nom_equipe'];
    $id_groupe = $_POST['id_groupe'];

    
    $id_equipe = insertNewTeam($db, $nom_equipe, $id_groupe);

   
    $result1 = insertParticipant($db, $_POST['nom1'], $_POST['prenom1'], $_POST['age1'], $id_equipe);
    $result1 = insertParticipant($db, $_POST['nom2'], $_POST['prenom2'], $_POST['age2'], $id_equipe);
    $result1 = insertParticipant($db, $_POST['nom3'], $_POST['prenom3'], $_POST['age3'], $id_equipe);

    if ($result1 ) {
        header("Location: ../php/equipe.php"); 
    } else {
        header("Location: inscription.php"); 
    }
}
?>
