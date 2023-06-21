<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "greenleaf";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successfully established: ". $servername. "\n";
}

date_default_timezone_set('Asia/Jakarta');

// Perform database operations here...
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Check if form fields are empty
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Get the current number of rows in the table
        $countQuery = "SELECT COUNT(*) FROM inquiry";
        $countResult = mysqli_query($conn, $countQuery);
        $countRow = mysqli_fetch_array($countResult);
        $numRows = $countRow[0];

        // Generate the new inquiry_id
        $id = $numRows + 1;

        // Get the current date
        $date = date("Y-m-d  H:i:s");

        // Insert data into the database
        $query = "INSERT INTO inquiry (inquiry_id, name, email, message, date) VALUES ('$id', '$name', '$email', '$message', '$date')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Data inserted successfully
            $response = array('status' => 'success', 'message' => 'Message sent successfully');
        } else {
            // Error inserting data
            $response = array('status' => 'error', 'message' => 'Failed to send message');
        }
    } else {
        // Empty form fields
        $response = array('status' => 'error', 'message' => 'Please fill out all the fields');
    }

    // Return the JSON response
    echo json_encode($response);
}

// Close the connection
mysqli_close($conn);
?>
