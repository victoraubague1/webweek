
<?php
include 'configpoo.php';
include 'participant.php';

$configInstance = new Config();
$db = $configInstance->connect();

$participant = new Participant($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Clean and validate the input data
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    $id_equipe = filter_input(INPUT_POST, 'id_equipe', FILTER_VALIDATE_INT);

    // Additional validation can be done here
    if (!$nom || !$prenom || !$age || !$id_equipe) {
        // One of the validations failed. Handle the error here.
        exit('Validation of data failed. All fields are required.');
    }

    // Handle the photo upload
    $photo = null;
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = '/path/to/upload/directory/'; // This path should be updated to the correct upload directory
        $tmpName = $_FILES['photo']['tmp_name'];
        $fileName = basename($_FILES['photo']['name']);
        $uploadFilePath = $uploadDir . $fileName;
        
        // You should add file type checking and validation here

        if (move_uploaded_file($tmpName, $uploadFilePath)) {
            $photo = $uploadFilePath;
        }
    }

    // Insert the participant data into the database
    $insertionResult = $participant->insert($nom, $prenom, $age, $photo, $id_equipe);

    if ($insertionResult) {
        echo "Participant registered successfully.";
    } else {
        echo "Failed to register participant.";
    }
}
?>
