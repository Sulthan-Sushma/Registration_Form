<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        try {
            // Create connection without specifying a database
            $conn = new mysqli('localhost', 'root', '123456789');

            // Check connection
            if ($conn->connect_error) {
                throw new Exception("Connection failed: " . $conn->connect_error);
            }

            // First, check if the database exists
            $db_selected = mysqli_select_db($conn, 'registration');
            if (!$db_selected) {
                // Create database if it doesn't exist
                $sql = "CREATE DATABASE IF NOT EXISTS registration";
                if ($conn->query($sql) === TRUE) {
                    // Select the newly created database
                    $conn->select_db('registration');
                    
                    // Create table if it doesn't exist
                    $sql = "CREATE TABLE IF NOT EXISTS user_data (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        username VARCHAR(255) NOT NULL,
                        password VARCHAR(255) NOT NULL
                    )";
                    $conn->query($sql);
                } else {
                    throw new Exception("Error creating database: " . $conn->error);
                }
            } else {
                // If the database exists, select it
                $conn->select_db('registration');
            }

            // Prepare and execute the statement
            $stmt = $conn->prepare("INSERT INTO user_data (username, password) VALUES (?, ?)");
            if (!$stmt) {
                throw new Exception("Prepare failed: " . $conn->error);
            }

            $stmt->bind_param("ss", $username, $password);
            
            if ($stmt->execute()) {
                echo "Registration successful!";
            } else {
                throw new Exception("Execute failed: " . $stmt->error);
            }

            $stmt->close();
            $conn->close();

        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }
    } else {
        die("Username and password are required");
    }
} else {
    die("Invalid request method");
}
?>
