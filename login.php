<?php
// login.php
include 'db.php';  // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Basic form validation
    if (empty($username) || empty($password)) {
        echo "Username or Password is required.";
        exit();
    }

    // Prepare and bind
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $row['password'])) {
            // Successful login
            echo "Login successful. Welcome " . $row['username'] . "!";
            // Here, you can start a session or redirect the user to a new page
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "No user found with that username.";
    }

    $stmt->close();
    $conn->close();
}
?>
