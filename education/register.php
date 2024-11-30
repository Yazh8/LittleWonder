<?php
include "dbconnection.php";

// Function to register a new user
function register_user($fullname, $username, $password, $conn)
{
    $fullname = mysqli_real_escape_string($conn, $fullname);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "INSERT INTO users (fullname,username, password) VALUES ('$fullname','$username', '$password')";

    if ($conn->query($query) === TRUE) {
        return true; // Registration successful
    } else {
        return false; // Registration failed
    }
}

// Example usage
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password === $confirm_password) {
        $result = register_user($fullname, $username, $password, $conn);

        if ($result) {
            // Successful registration
            // echo "Registration successful. You can now login.";
            echo "<script type = \"text/javascript\">
            alert(\"Registration successful. You can now login.\");
            window.location = (\"index.php\")
            </script>";
        } else {
            // Registration failed
            // echo "Registration failed. Please try again.";
            echo "<script type = \"text/javascript\">
            alert(\"Registration failed. Please try again.\");
            window.location = (\"registration.php\")
            </script>";
        }
    } else {
        // Passwords do not match
        // echo "Passwords do not match. Please try again.";
        echo "<script type = \"text/javascript\">
        alert(\"Passwords do not match. Please try again.\");
        window.location = (\"registration.php\")
        </script>";
    }
}

// Close connection
$conn->close();
