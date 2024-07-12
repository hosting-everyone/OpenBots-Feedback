<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedback = trim($_POST['feedback']);
    $filePath = 'feedback.txt';

    if (!empty($feedback)) {
        // Controleer of het bestand bestaat, zo niet, maak het aan
        if (!file_exists($filePath)) {
            file_put_contents($filePath, "Feedback:\n");
        }
        
        // Opslaan in feedback.txt
        file_put_contents($filePath, $feedback . PHP_EOL, FILE_APPEND);
        echo "Bedankt voor uw feedback!";
    } else {
        echo "Feedback mag niet leeg zijn.";
    }
} else {
    echo "Ongeldige aanvraag.";
}
?>
