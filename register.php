<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form data
    $name = $_POST["name"];
    $nombre = $_POST["number"];

    // Simple form validation
    if (empty($name) || empty($nombre)) {
        echo "Please fill out all fields.";
        exit();
    }
    include 'config.php'; // Include the configuration file

    // Create a new MySQLi connection
    $conn = new mysqli($host, $user, $password, $database);
    if ($conn->connect_error) {
        echo("Connection failed"); // Display an error message if the connection fails
    } 

    // SQL query to insert the form data into the 'birthday-guests' table
    $sql = "INSERT INTO `birthday-guests` (name, nombre) VALUES ('". $name."','".$nombre."')";
    //$result = $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully"; // Display a success message if the record is inserted successfully
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // Display an error message if there is an issue with the SQL query
    }
    $conn->close(); // Close the database connection

} else {
    // If the form is not submitted, redirect to the home page or display an error message
    header("Location: index.html");
    exit();
}
?>