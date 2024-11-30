<?php
include "dbconnection.php";

// Function to validate user login
function validate_login($username, $password, $conn)
{
    $username = mysqli_real_escape_string($conn, $username);

    $query = "SELECT id, username, password FROM users WHERE username='$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $stored_password = $row['password'];

        if ($password == $stored_password) {
            return $row;
        } else {
            return false; // Password does not match
        }
    } else {
        return false; // Username not found
    }
}

// Example usage
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = validate_login($username, $password, $conn);

    if ($user !== false) {
        // Successful login
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: quiz.php"); // Redirect to a quiz page
        exit();
    } else {
        // Invalid login
        // echo "Invalid username or password.";
        echo "<script type = \"text/javascript\">
            alert(\"Invalid username or password.\");
            window.location = (\"index.php\")
            </script>";
    }
}

// Close connection
$conn->close();
