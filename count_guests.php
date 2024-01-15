<?php
    include 'config.php'; // Include the configuration file

    $conn = new mysqli($host, $user, $password, $database); // Create a new MySQLi connection
    if ($conn->connect_error) {
        echo("Connection failed"); // Display an error message if the connection fails
    } 

    $sql = "SELECT * FROM `birthday-guests`"; // SQL query to select all rows from the 'birthday-guests' table
    $result = $conn->query($sql); // Execute the query
    $count = 0; // Initialize a variable to store the total count of guests
    $row_cnt = $result->num_rows; // Get the number of rows returned by the query

    if ($row_cnt > 0) { // If there are rows returned
        while($row = $result->fetch_assoc()) { // Loop through each row
            $count += $row["nombre"]; // Add the value of the 'nombre' column to the count variable
        }
    }

    printf("%d.\n", $count); // Print the total count of guests
?>