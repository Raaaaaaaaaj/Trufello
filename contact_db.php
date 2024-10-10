<?php
include "incl/database.php";

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);


// Check if the POST request contains required data
if (isset($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
    // Escape input to prevent SQL Injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO contact (name, phone, email, subject, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $phone, $email, $subject, $message);
    
    // Execute the query and check for errors
    if ($stmt->execute() === false) {
        // Log SQL error
        file_put_contents('debug.log', "SQL Error: " . $stmt->error . "\n", FILE_APPEND);
        $response = array('success' => false, 'message' => 'SQL error occurred.');
    } else {
        // Create a response array
        $response = array('success' => true, 'message' => 'Data inserted successfully.');
    }

    // Close the statement
    $stmt->close();
} else {
    // If required fields are not present, return an error response
    $response = array('success' => false, 'message' => 'Invalid form data.');
}

// Set header for JSON response
header('Content-Type: application/json');

// Send JSON response back to the frontend
echo json_encode($response);

// Close database connection
$conn->close();

?>
