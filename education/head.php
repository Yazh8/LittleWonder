<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php"); // Redirect to login page
    exit();
}
?>

<head>
    <title>Educational Games</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="myscript.js"></script>
    <script src="script_math.js"></script>
    <meta charset="UTF-8">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow-y: auto;
            /* Enable vertical scrolling */
        }

        /* Adjust the height based on your content */
        .content {
            padding: 20px;
            /* No fixed height - it will expand based on content */
            height: 1500px;
            /* Set the height you need for scrolling */
        }
    </style>
</head>