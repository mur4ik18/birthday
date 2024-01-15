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
    include 'config.php';
    

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $conn = new mysqli($host, $user, $password, $database);
        if ($conn->connect_error) {
            echo("Connection failed");
        } 

        $sql = "INSERT INTO `birthday-guests` (name, nombre) VALUES ('". $name."','".$nombre."')";
        //$result = $conn->query($sql);
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

} else {
    // If the form is not submitted, redirect to the home page or display an error message
    header("Location: index.html");
    exit();
}
?>