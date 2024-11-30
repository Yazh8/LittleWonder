<?php
include "dbconnection.php";

// Start the session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data sent from the client-side (JavaScript)
    $correctAnswers = $_POST['correctAnswers'];
    $wrongAnswers = $_POST['wrongAnswers'];

    // Check if 'user_id' is set in the session
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];

        // Perform the database insertion
        $query = "INSERT INTO score_quiz (correct_answers, wrong_answers, user_id) VALUES ('$correctAnswers', '$wrongAnswers', '$user_id')";

        if ($conn->query($query) === TRUE) {
            echo "Data inserted successfully";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "User session not found";
    }
} else {
    echo "Invalid request method";
}
