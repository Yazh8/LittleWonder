<?php
include "dbconnection.php";

// Start the session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data sent from the client-side (JavaScript)
    // $score = $_POST['lives'];
    $tries = $_POST['tries'];

    if ($tries < 10) {
        $score =  6;
    } else if ($tries < 15) {
        $score =  5;
    } else if ($tries < 20) {
        $score =  4;
    } else if ($tries < 25) {
        $score =  3;
    } else if ($tries < 30) {
        $score =  2;
    } else {
        $score = 1;
    }


    // Check if 'user_id' is set in the session
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];

        // Perform the database insertion
        $query = "INSERT INTO score_memory (score,tries,user_id) VALUES ('$score','$tries', '$user_id')";

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
